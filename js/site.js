(function (global) {
  const LINKEDIN_PAGE_URL = "https://www.linkedin.com/company/core-stack/";
  const LINKEDIN_CSV_URL = "content/linkedin-posts.csv";
  const MONTHS = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];

  const NAV = [
    { id: "home", href: "index.html", label: "ACT4D" },
    { id: "core", href: "https://core-stack.org/", label: "CoRE stack", external: true },
    { id: "gramvaani", href: "https://gramvaani.org/", label: "Gram Vaani", external: true },
    { id: "book", href: "act.html", label: "ACT book" },
    { id: "gem", href: "gem-website/index.htm", gem: true, label: "Giant Economy Monitor" },
    { id: "publications", href: "publications-dynamic.html", label: "Publications" },
    { id: "archive", href: "archive.html", label: "Archived website" },
    { id: "aseth", href: "aseth.html", label: "Aaditeshwar Seth", align: "end" }
  ];

  function parseCsv(text) {
    const rows = [];
    let row = [];
    let field = "";
    let inQuotes = false;
    for (let i = 0; i < text.length; i++) {
      const c = text[i];
      const next = text[i + 1];
      if (inQuotes) {
        if (c === '"' && next === '"') {
          field += '"';
          i++;
        } else if (c === '"') {
          inQuotes = false;
        } else {
          field += c;
        }
      } else if (c === '"') {
        inQuotes = true;
      } else if (c === ",") {
        row.push(field);
        field = "";
      } else if (c === "\n" || c === "\r") {
        if (c === "\r" && next === "\n") i++;
        row.push(field);
        if (row.some(function (cell) { return cell.trim(); })) rows.push(row);
        row = [];
        field = "";
      } else {
        field += c;
      }
    }
    if (field.length || row.length) {
      row.push(field);
      if (row.some(function (cell) { return cell.trim(); })) rows.push(row);
    }
    return rows;
  }

  function rowsToPosts(rows) {
    if (!rows.length) return [];
    const header = rows[0].map(function (h) { return h.trim().toLowerCase(); });
    const col = function (name, fallback) {
      const i = header.indexOf(name);
      return i >= 0 ? i : fallback;
    };
    const iDate = col("date", 0);
    const iTitle = col("title", 1);
    const iUrl = col("url", 2);
    const posts = rows.slice(1).map(function (row) {
      return {
        date: (row[iDate] || "").trim(),
        title: (row[iTitle] || "").trim(),
        url: (row[iUrl] || "").trim()
      };
    }).filter(function (post) { return post.url; });

    posts.sort(function (a, b) {
      if (a.date && b.date && a.date !== b.date) {
        return a.date < b.date ? 1 : -1;
      }
      return 0;
    });
    return posts;
  }

  function formatDate(value) {
    if (!value) return "";
    const parts = value.split("-").map(Number);
    if (!parts[0] || parts.some(isNaN)) return value;
    const month = parts[1] ? MONTHS[parts[1] - 1] : "";
    return month ? month + " " + parts[0] : String(parts[0]);
  }

  function dateTimeAttr(value) {
    if (!value) return "";
    const parts = value.split("-");
    if (parts.length >= 2) return parts[0] + "-" + parts[1];
    return value;
  }

  function config() {
    return global.ACT4D_CONFIG || {};
  }

  function trimSlash(value) {
    return String(value || "").replace(/\/+$/, "");
  }

  function isAbsoluteUrl(value) {
    return /^(https?:)?\/\//i.test(value) || /^(mailto|tel|javascript):/i.test(value);
  }

  function joinUrl(base, path) {
    path = String(path || "");
    if (!path || isAbsoluteUrl(path) || path.charAt(0) === "#") return path;
    path = path.replace(/^\.\//, "");
    if (!base) return path;
    if (path.charAt(0) === "/") {
      try {
        return new URL(path, trimSlash(base) + "/").href;
      } catch (err) {
        return trimSlash(base) + path;
      }
    }
    return trimSlash(base) + "/" + path;
  }

  function gemRemainder(path) {
    return String(path || "").replace(/^(?:\.\/)?gem-website\/?/i, "");
  }

  function isGemPath(path) {
    return /^(?:\.\/)?gem-website(\/|$)/i.test(path || "");
  }

  function gemUrl(path) {
    const gemBase = trimSlash(config().gemBaseUrl || "");
    const rest = gemRemainder(path) || "index.htm";
    if (gemBase) return joinUrl(gemBase, rest);
    return joinUrl(config().baseUrl, "gem-website/" + rest);
  }

  function localUrl(path) {
    if (!path || isAbsoluteUrl(path) || path.charAt(0) === "#") return path;
    if (isGemPath(path)) return gemUrl(path);
    return joinUrl(config().baseUrl, path);
  }

  function applyUrls(root) {
    if (!root || !root.querySelectorAll) return;
    root.querySelectorAll("a[href]").forEach(function (el) {
      const href = el.getAttribute("href");
      if (!href) return;
      const next = localUrl(href);
      if (next !== href) el.setAttribute("href", next);
    });
    root.querySelectorAll("img[src]").forEach(function (el) {
      const src = el.getAttribute("src");
      if (!src) return;
      const next = localUrl(src);
      if (next !== src) el.setAttribute("src", next);
    });
  }

  function renderNav(currentId) {
    const header = document.querySelector("[data-site-nav]");
    if (!header) return;
    const inner = document.createElement("div");
    inner.className = "site-header-inner";

    const nav = document.createElement("nav");
    nav.className = "site-nav";
    nav.setAttribute("aria-label", "Site");

    const start = document.createElement("div");
    start.className = "site-nav-start";
    const end = document.createElement("div");
    end.className = "site-nav-end";

    NAV.forEach(function (item) {
      const a = document.createElement("a");
      a.href = item.gem ? gemUrl(item.href) : localUrl(item.href);
      a.textContent = item.label;
      if (item.id === currentId) {
        a.setAttribute("aria-current", "page");
        a.classList.add("is-current");
      }
      if (item.id === "home") a.classList.add("wordmark");
      if (item.external) {
        a.target = "_blank";
        a.rel = "noopener noreferrer";
      }
      (item.align === "end" ? end : start).appendChild(a);
    });

    nav.appendChild(start);
    nav.appendChild(end);
    inner.appendChild(nav);
    header.replaceChildren(inner);
  }

  function postLink(post) {
    const a = document.createElement("a");
    a.href = post.url;
    a.target = "_blank";
    a.rel = "noopener noreferrer";
    const title = document.createElement("span");
    title.className = "linkedin-title";
    title.textContent = post.title || post.url;
    a.appendChild(title);
    if (post.date) {
      const time = document.createElement("time");
      time.dateTime = dateTimeAttr(post.date);
      time.textContent = formatDate(post.date);
      a.appendChild(time);
    }
    return a;
  }

  function followLink() {
    const p = document.createElement("p");
    p.className = "linkedin-follow";
    const a = document.createElement("a");
    a.href = LINKEDIN_PAGE_URL;
    a.target = "_blank";
    a.rel = "noopener noreferrer";
    a.textContent = "Follow the CoRE stack on LinkedIn";
    p.appendChild(a);
    return p;
  }

  function renderSidebar(feedEl, posts) {
    const heading = document.createElement("h2");
    heading.id = "linkedin-feed-heading";
    heading.textContent = "On LinkedIn";

    const list = document.createElement("ul");
    posts.slice(0, 10).forEach(function (post) {
      const li = document.createElement("li");
      li.appendChild(postLink(post));
      list.appendChild(li);
    });

    const more = document.createElement("p");
    more.className = "linkedin-feed-more";
    const a = document.createElement("a");
    a.href = localUrl("linkedin.html");
    a.textContent = "See all posts";
    more.appendChild(a);

    feedEl.replaceChildren(followLink(), heading, list, more);
  }

  function renderAllPosts(listEl, posts) {
    listEl.replaceChildren();
    posts.forEach(function (post) {
      const li = document.createElement("li");
      li.appendChild(postLink(post));
      listEl.appendChild(li);
    });
  }

  async function loadPosts() {
    const response = await fetch(localUrl(LINKEDIN_CSV_URL), { cache: "no-store" });
    if (!response.ok) throw new Error("Could not load LinkedIn CSV");
    return rowsToPosts(parseCsv(await response.text()));
  }

  async function loadMarkdown(url, contentEl) {
    try {
      const response = await fetch(localUrl(url), { cache: "no-store" });
      if (!response.ok) throw new Error("Could not load " + url);
      contentEl.innerHTML = marked.parse(await response.text());
      applyUrls(contentEl);
    } catch (err) {
      contentEl.innerHTML =
        "<h1>Could not load this page</h1><p>Open the project through a local web server so the browser can read <code>" +
        url +
        "</code>.</p>";
    }
  }

  global.ACT4D = {
    LINKEDIN_PAGE_URL: LINKEDIN_PAGE_URL,
    localUrl: localUrl,
    gemUrl: gemUrl,
    applyUrls: applyUrls,
    renderNav: renderNav,
    loadMarkdown: loadMarkdown,
    loadPosts: loadPosts,
    renderSidebar: renderSidebar,
    renderAllPosts: renderAllPosts,
    followLink: followLink
  };
})(window);
