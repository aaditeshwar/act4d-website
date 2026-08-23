(function (global) {
  global.ACT4D_CONFIG = {
    // Prefix for local pages, CSS, JS, images, and markdown/CSV fetches.
    // Leave empty so all of those stay relative and the site can be served
    // from any path (/, /act4d-website/, GitHub Pages, etc.).
    // Example: "https://act4d.iitd.ac.in" or "/act4d-website/"
    baseUrl: "",

    // Prefix for GEM links only. Empty = same as local (relative gem-website/...).
    // Set this when GEM is hosted at a fixed location while the rest of the
    // site stays relative. Include the gem-website directory if that is the
    // document root of that host.
    // Example: "https://act4d.iitd.ac.in/gem-website/"
    gemBaseUrl: ""
  };
})(window);
