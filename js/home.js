(function () {
  const contentEl = document.getElementById("content");
  const feedEl = document.getElementById("linkedin-feed");

  ACT4D.renderNav("home");

  function styleLatest(root) {
    const headings = root.querySelectorAll("h2");
    headings.forEach(function (heading) {
      if (heading.textContent.trim().toLowerCase() !== "latest") return;
      const list = heading.nextElementSibling;
      if (list && list.tagName === "UL") {
        list.classList.add("latest-links");
      }
    });
  }

  ACT4D.loadMarkdown("content/act4d.md", contentEl).then(function () {
    styleLatest(contentEl);
  });

  if (feedEl) {
    ACT4D.loadPosts()
      .then(function (posts) {
        if (posts.length) ACT4D.renderSidebar(feedEl, posts);
      })
      .catch(function () {
        feedEl.innerHTML = "";
      });
  }
})();
