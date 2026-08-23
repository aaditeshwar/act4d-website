"""Trim a GEM district GeoJSON script without dropping feature properties.

Reads a ``var india_districts = {...};`` file, rounds coordinates, simplifies
polygon rings (Douglas-Peucker), and writes a compact JS assignment to a new
file. Does not overwrite the source.
"""
from __future__ import print_function

import json
import math
import os
import sys

DECIMALS = 4
# ~0.01 degrees is about 1 km; national-scale Leaflet maps (zoom 4-8).
EPSILON_DEG = 0.01


def load_js_geojson(path):
    raw = open(path, encoding="utf-8").read()
    start = raw.find("{")
    end = raw.rfind("}")
    return json.loads(raw[start : end + 1])


def perp_dist(p, a, b):
    ax, ay = a
    bx, by = b
    px, py = p
    dx, dy = bx - ax, by - ay
    if dx == 0 and dy == 0:
        return math.hypot(px - ax, py - ay)
    t = ((px - ax) * dx + (py - ay) * dy) / (dx * dx + dy * dy)
    t = max(0.0, min(1.0, t))
    return math.hypot(px - (ax + t * dx), py - (ay + t * dy))


def douglas_peucker(pts, eps):
    if len(pts) < 3:
        return pts
    closed = pts[0] == pts[-1]
    work = pts[:-1] if closed else pts
    if len(work) < 3:
        return pts

    stack = [(0, len(work) - 1)]
    keep = [False] * len(work)
    keep[0] = keep[-1] = True
    while stack:
        i, j = stack.pop()
        max_d = -1.0
        max_k = None
        a, b = work[i], work[j]
        for k in range(i + 1, j):
            d = perp_dist(work[k], a, b)
            if d > max_d:
                max_d = d
                max_k = k
        if max_k is not None and max_d > eps:
            keep[max_k] = True
            stack.append((i, max_k))
            stack.append((max_k, j))
    out = [work[i] for i, flag in enumerate(keep) if flag]
    if closed:
        if out[0] != out[-1]:
            out.append(out[0])
        if len(out) < 4:
            return pts
    elif len(out) < 2:
        return pts
    return out


def round_pt(pt):
    return [round(float(pt[0]), DECIMALS), round(float(pt[1]), DECIMALS)]


def simplify_ring(ring):
    pts = [round_pt(p) for p in ring]
    return douglas_peucker(pts, EPSILON_DEG)


def simplify_coords(geom_type, coords):
    if geom_type == "Polygon":
        return [simplify_ring(r) for r in coords]
    if geom_type == "MultiPolygon":
        return [[simplify_ring(r) for r in poly] for poly in coords]
    return coords


def count_nums(geom):
    n = [0]

    def walk(x):
        if isinstance(x, list):
            if x and isinstance(x[0], (int, float)):
                n[0] += len(x)
            else:
                for y in x:
                    walk(y)

    walk(geom.get("coordinates"))
    return n[0]


def trim(src, dest):
    obj = load_js_geojson(src)
    before = 0
    after = 0
    for feat in obj["features"]:
        g = feat["geometry"]
        before += count_nums(g)
        g["coordinates"] = simplify_coords(g["type"], g["coordinates"])
        after += count_nums(g)
    os.makedirs(os.path.dirname(dest) or ".", exist_ok=True)
    payload = json.dumps(obj, separators=(",", ":"), ensure_ascii=False)
    with open(dest, "w", encoding="utf-8", newline="\n") as f:
        f.write("var india_districts = ")
        f.write(payload)
        f.write(";\n")
    print(
        "%s -> %s\n  file: %.2f MB -> %.2f MB\n  coord numbers: %d -> %d (eps=%.3f deg, %d decimals)"
        % (
            src,
            dest,
            os.path.getsize(src) / 1e6,
            os.path.getsize(dest) / 1e6,
            before,
            after,
            EPSILON_DEG,
            DECIMALS,
        )
    )


def main():
    root = os.path.join(os.path.dirname(__file__), "..", "GeoJSON_Files")
    root = os.path.normpath(root)
    pairs = [
        (os.path.join(root, "main1.geojson"), os.path.join(root, "main1.trimmed.geojson")),
        (os.path.join(root, "main.geojson"), os.path.join(root, "main.trimmed.geojson")),
    ]
    for src, dest in pairs:
        if not os.path.isfile(src):
            print("skip missing", src)
            continue
        trim(src, dest)


if __name__ == "__main__":
    sys.exit(main() or 0)
