window.addEventListener("DOMContentLoaded", () => {
  // Your pagination code here
  const pages = [{ url: "gallery.html" }, { url: "gallery-1.html" }];

  function getCurrentPage() {
    const currentPageUrl = window.location.pathname;
    return pages.find((page) => currentPageUrl.includes(page.url));
  }

  function paginate(pages, selector) {
    const currentPage = getCurrentPage();
    const currentPageIndex = pages.findIndex((page) => page === currentPage);
    const html = `
      <ul class="pagination-list">
          <li class="previous">
              ${
                currentPageIndex === 0
                  ? `<span>‹</span>`
                  : `<a href="${pages[currentPageIndex - 1].url}">‹</a>`
              }
          </li>
          ${pages
            .map(
              (item, index) => `
              <li${item === currentPage ? ' class="current"' : ""}>
                  ${
                    item === currentPage
                      ? `<span>${index + 1}</span>`
                      : `<a href="${item.url}">${index + 1}</a>`
                  }
              </li> 
          `
            )
            .join("")}
          <li class="next">
              ${
                currentPageIndex === pages.length - 1
                  ? `<span>›</span>`
                  : `<a href="${pages[currentPageIndex + 1].url}">›</a>`
              }
          </li>
      </ul>
  `;

    document.querySelector(selector).innerHTML = html;
  }

  // Function to call the paginate function on page load
  function onPageLoad() {
    paginate(pages, ".pagination");
  }

  // Add an event listener for the "load" event on the window object
  window.addEventListener("load", onPageLoad);
});
