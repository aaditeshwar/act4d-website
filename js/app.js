(function () {
  const MENU_URL = "menu.json";
  const menuEl = document.getElementById("menu");
  const contentEl = document.getElementById("content");
  const titleEl = document.querySelector("title");

  let siteData = null;

  function allItems(data) {
    const collected = [];
    function walk(items) {
      (items || []).forEach(function (item) {
        collected.push(item);
        if (item.children && item.children.length) walk(item.children);
      });
    }
    walk(data.menu);
    walk(data.unlisted);
    return collected;
  }

  function findItem(id) {
    return allItems(siteData).find(function (item) {
      return item.id === id;
    });
  }

  function ancestorIds(targetId) {
    const ids = [];
    function walk(items, trail) {
      return (items || []).some(function (item) {
        const next = trail.concat(item.id);
        if (item.id === targetId) {
          ids.push.apply(ids, next);
          return true;
        }
        return walk(item.children, next);
      });
    }
    walk(siteData.menu, []);
    walk(siteData.unlisted, []);
    return ids;
  }

  function currentId() {
    const hash = window.location.hash.replace(/^#\/?/, "");
    return hash || siteData.site.home;
  }

  function renderMenu(items, activeId) {
    const activeTrail = ancestorIds(activeId);
    function list(nodes) {
      return nodes
        .map(function (item) {
          const hasChildren = item.children && item.children.length;
          const classes = [];
          if (hasChildren) classes.push("parent");
          if (activeTrail.indexOf(item.id) !== -1) classes.push("active");
          if (item.status === "pending") classes.push("pending");
          const kids = hasChildren ? "<ul>" + list(item.children) + "</ul>" : "";
          return (
            '<li class="' +
            classes.join(" ") +
            '">' +
            '<a href="#/' +
            item.id +
            '"><span>' +
            item.title +
            "</span></a>" +
            kids +
            "</li>"
          );
        })
        .join("");
    }
    menuEl.innerHTML = list(items);
  }

  function pendingMarkup(item) {
    const source = item.sourceUrl
      ? '<p>Original page: <a href="' +
        item.sourceUrl +
        '">' +
        item.sourceUrl +
        "</a></p>"
      : "";
    return (
      "<h2>" +
      item.title +
      "</h2>" +
      "<p>This page has not been imported yet.</p>" +
      source
    );
  }

  function missingMarkup(id) {
    return "<h2>Page not found</h2><p>No menu entry exists for <code>" + id + "</code>.</p>";
  }

  function listingMarkup(item) {
    function list(nodes) {
      return (
        "<ul class=\"section-list\">" +
        nodes
          .map(function (child) {
            var nested =
              child.children && child.children.length ? list(child.children) : "";
            return (
              "<li><a href=\"#/" +
              child.id +
              "\">" +
              child.title +
              "</a>" +
              nested +
              "</li>"
            );
          })
          .join("") +
        "</ul>"
      );
    }
    return "<h2>" + item.title + "</h2>" + list(item.children || []);
  }

  async function renderMarkdown(item) {
    try {
      const response = await fetch(item.content);
      if (!response.ok) {
        contentEl.innerHTML = pendingMarkup(item);
        return;
      }
      contentEl.innerHTML = marked.parse(await response.text());
    } catch (err) {
      contentEl.innerHTML =
        "<h2>Could not load page</h2><p>Serve this folder over HTTP so the browser can read markdown files.</p>";
    }
  }

  async function loadPage() {
    const id = currentId();
    const item = findItem(id);
    renderMenu(siteData.menu, item ? item.id : siteData.site.home);
    titleEl.textContent = item
      ? item.title + " | " + siteData.site.title
      : siteData.site.fullTitle;

    if (!item) {
      contentEl.innerHTML = missingMarkup(id);
      return;
    }

    if (item.generate === "children") {
      contentEl.innerHTML = listingMarkup(item);
      return;
    }

    await renderMarkdown(item);
  }

  async function init() {
    try {
      const response = await fetch(MENU_URL);
      siteData = await response.json();
    } catch (err) {
      contentEl.innerHTML =
        "<h2>Could not load the site</h2><p>Open this project through a local web server (for example <code>python -m http.server</code>) so the browser can read <code>menu.json</code> and the markdown files.</p>";
      return;
    }
    window.addEventListener("hashchange", loadPage);
    loadPage();
  }

  init();
})();
