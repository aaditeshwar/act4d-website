(function () {
  const root = document.body;
  const page = root.getAttribute("data-page") || "home";
  const md = root.getAttribute("data-md");
  ACT4D.renderNav(page);
  ACT4D.applyUrls(document);
  const contentEl = document.getElementById("content");
  if (md && contentEl) {
    ACT4D.loadMarkdown(md, contentEl);
  }
  const listEl = document.getElementById("linkedin-all");
  const followEl = document.getElementById("linkedin-follow-slot");
  if (followEl) {
    followEl.replaceChildren(ACT4D.followLink());
  }
  if (listEl) {
    ACT4D.loadPosts()
      .then(function (posts) {
        ACT4D.renderAllPosts(listEl, posts);
      })
      .catch(function () {
        listEl.innerHTML = "<li>Could not load content/linkedin-posts.csv.</li>";
      });
  }
})();
