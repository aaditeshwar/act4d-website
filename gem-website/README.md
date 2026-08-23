# Giant Economy Monitor (GEM)

Static-ish research site under this repo. Live path: `https://act4d.iitd.ac.in/gem-website/`  
From the ACT4D site, the nav item **Giant Economy Monitor** loads `gem-website/index.htm`.

Shared chrome is `header.html` / `footer.html` (and copies under `Entities/`, `Pages/`, `Urbanization/`, `socio-econ-hypo/`). Nav sections:

| Nav | Entry page | What it is |
| --- | --- | --- |
| Home | `index.htm` | Vision text; no map |
| Corporate Government Interlocks | `Entities/INTERLOCKS.htm` | Company–government networks, CSR, political funding |
| Political Economy | `Entities/POLITICALECONOMY.htm` | Political-economy charts and notes |
| Media | `Entities/MASSMEDIABASIS.htm` | Mass-media coverage / bias charts |
| Socio-Economic Development | `Entities/SOCIO-ECODEV.htm` | District choropleth + census drill-down |
| Urbanization | `Urbanization/index.html` | Separate urbanization maps/UI |
| Agriculture | `/agri_req/` | External (not in this folder) |
| Blogs | empty `href` | Not wired |

`Pages/` holds supporting articles (e.g. `info.php`, `mediainfo.php`, `politicalinfo.php`, CSR/funding HTML). `Entities/socialresponsibility.htm` and `Entities/politicalfunding.htm` are interlocks subpages.

## Data by section

**Interlocks / CSR / political funding**

- CSVs and figures under `csv data/` and `Images/Corporate Interlocks/`
- Network/layout images under `Images/Interlocks/`

**Media**

- Chart APIs: `api/data.php`, `api/kld_data.php` (CSV-backed; no live Postgres)
- Related tables in `csv data/`

**Socio-economic development**

- District **census / development indicators**: `create-mysql-table.sql` loaded in PHP by `Entities/socio-econ-hypo/load-districts.php` (`gem_district_by_code()`). `connect-to-server.php` only includes that loader (no MySQL).
- District **maps**: GeoJSON JS globals (below). Hypothesis pages (`hypo-*.html`, `future-pred.html`) colour districts from those feature properties plus `hypothesis4.csv` / related CSVs.
- `main-district-page.php` is the per-district report after a click on the national map.

**Urbanization**

- Own JS/CSS and local GeoJSON under `Urbanization/` (not the `GeoJSON_Files/main*.geojson` pair).

Unused / not shipped in a trimmed deploy: `Entities/socio-econ-hypo-1/`, old `SOCIO-ECODEV-1.htm` / `-2.htm`, `Entities/Models/`, `Entities/MRV/`, `GeoJSON_Files-1/`.

## District GeoJSON (master vs trimmed)

These files are **JavaScript**, not raw GeoJSON: they assign `var india_districts = { … FeatureCollection … };` so Leaflet pages can load them with a `<script src>`.

| File | Role | Approximate size |
| --- | --- | --- |
| `GeoJSON_Files/main1.geojson` | **Master** for the national socio-econ map | ~26.5 MB |
| `GeoJSON_Files/main.geojson` | **Master** for hypothesis / future-pred maps | ~28.5 MB |
| `GeoJSON_Files/main1.trimmed.geojson` | Derived; used by pages | ~1.90 MB |
| `GeoJSON_Files/main.trimmed.geojson` | Derived; used by pages | ~1.81 MB |

**Currently in use on pages**

- `Entities/SOCIO-ECODEV.htm` and `Entities/socio-econ-hypo/main-district-page.php` → `main1.trimmed.geojson`
- `Entities/socio-econ-hypo/hypo-*.html` and `future-pred.html` → `main.trimmed.geojson`

Masters are left unchanged. Both masters have the same geometry (~641 districts, ~1.27M coordinate numbers); they differ mainly in feature properties.

### How the trimmed files are built

```text
py gem-website/scripts/trim_geojson.py
```

The script does **not** overwrite the masters. It:

1. **Round** lon/lat to 4 decimal places (~11 m).
2. **Skip dropping properties** (see size review below).
3. **Simplify** polygon rings with Douglas–Peucker, `EPSILON_DEG = 0.01` (~1 km), which is enough for Leaflet at national zoom.
4. **Compact JSON** (`separators=(",", ":")`) and write `var india_districts = …;`.

**Gzip (step 4 on the server):** enable gzip/brotli for `.geojson` (and JS) on the host. The trimmed files already compress well; do not check in `.gz` copies unless you also change how pages load them.

Rebuild after editing a master. Pages keep the same global name `india_districts`; do not `defer` the script unless map init is moved after load.

### Size review: is dropping properties (old step 2) useful?

Geometry dominated the masters. After rounding + simplify + compact:

- ~26.5 MB → **1.90 MB** (`main1`)
- ~28.5 MB → **1.81 MB** (`main`)
- Coordinate numbers: **1,272,706 → 135,888** (~9× fewer vertices)

Remaining bytes are mostly **feature properties** (census / hypothesis fields the maps already use). Dropping unused keys would save only a fraction of ~2 MB and would require a per-page property allowlist. **Skip step 2 unless** you later need a much smaller payload after gzip or a property-heavy page that never uses those attributes.

## Local notes

Serve over HTTP (not `file://`) so PHP district pages and CSV APIs work. PHP 8: district data comes from the SQL file, not `mysqli`.
