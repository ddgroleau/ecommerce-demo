const $ = (element) => document.querySelector(element);

function getElementOffset(element) {
  let offsetTop = 0;
  while (element) {
    offsetTop += element.offsetTop;
    element = element.offsetParent;
  }
  return offsetTop;
}

// Window Dependencies
document.addEventListener("DOMContentLoaded", () => {
  // Fade in on Scroll
  const elementsToFadeInUpOnScroll = document.querySelectorAll(
    ".fade-in-up-on-scroll"
  );

  if (elementsToFadeInUpOnScroll) {
    window.addEventListener("scroll", function (event) {
      elementsToFadeInUpOnScroll.forEach(function (element) {
        const offsetTop = getElementOffset(element);
        if (window.scrollY >= offsetTop - window.innerHeight + 100) {
          element.classList.remove("faded-out");
          element.classList.add("faded-in");
        } else {
          element.classList.add("faded-out");
          element.classList.remove("faded-in");
        }
      });
    });
  }

  // Navbar
  const navToggle = $("#nav-toggle");
  const navItems = $("#nav-items");

  const toggleNav = () => {
    [
      document.querySelector(".bar1"),
      document.querySelector(".bar2"),
      document.querySelector(".bar3"),
    ].forEach((x) => x.classList.toggle("change"));

    if (navItems.classList.contains("faded-out-left")) {
      navItems.classList.add("mobile-nav-show", "faded-in-left");
      document.body.style.overflow = "hidden";
      navItems.classList.remove("faded-out-left");
    } else {
      navItems.classList.add("faded-out-left");
      navItems.classList.remove("faded-in-left");
    }
  };

  navItems.addEventListener("transitionend", () => {
    if (navItems.classList.contains("faded-out-left")) {
      navItems.classList.remove("mobile-nav-show", "faded-in-left");
      document.body.style.overflow = "auto";
    }
  });

  navToggle.addEventListener("click", toggleNav);

  /* Cart */

  // Add loading animation to 'Add to Cart' buttons
  if ($(".products__container")) {
    $(".products__container").addEventListener("click", (event) => {
      if (event.target.textContent.toLowerCase().endsWith("cart")) {
        event.target.innerHTML = '<span class="spinner"></span>';
      }
    });
  }

  /* Product Page */

  if ($(".product__container")) {
    $(".woocommerce-product-gallery__wrapper").addEventListener(
      "click",
      (event) => {
        if (event.target.classList.contains("wp-post-image")) {
          return;
        } else if (event.target.tagName.toLowerCase() === "img") {
          const target = $(".wp-post-image");
          const source = event.target;

          const tgtSrc = target.src;
          const tgtSrcSet = target.srcset;

          const srcSrc = source.src;
          const srcSrcSet = source.srcset;

          target.src = srcSrc;
          target.srcset = srcSrcSet;

          source.src = tgtSrc;
          source.srcset = tgtSrcSet;

          event.preventDefault();
        }
      }
    );
  }

  /* Prevent Actual Checkout */
  waitForElement(".wc-block-components-checkout-place-order-button").then(
    (checkoutBtn) => {
      if (checkoutBtn)
        checkoutBtn.addEventListener("click", (event) => {
          openModal();
          event.preventDefault();
          event.stopImmediatePropagation();
        });
    }
  );
});

function waitForElement(selector) {
  return new Promise((resolve) => {
    if (document.querySelector(selector)) {
      return resolve(document.querySelector(selector));
    }

    const observer = new MutationObserver((mutations) => {
      if (document.querySelector(selector)) {
        observer.disconnect();
        resolve(document.querySelector(selector));
      }
    });

    observer.observe(document.body, {
      childList: true,
      subtree: true,
    });
  });
}

function openModal() {
  const modal = document.createElement("div");

  modal.id = "dynamic-modal";
  modal.style = `
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100vw;
    height: 100vh;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
  `;

  modal.onclick = function (event) {
    if (event.target == modal) {
      closeModal();
    }
  };

  const modalContent = document.createElement("div");
  modalContent.style = `
    background-color: #fefefe;
    margin: min(8rem, 25%) auto;
    padding: 32px;
    border: 1px solid #888;
    width: min(90%, 20rem);
    border-radius: 16px;
    font-size: 24px;
    line-height: 32px;
    letter-spacing: 0.025em;
  `;

  const closeBtn = document.createElement("button");
  closeBtn.style = `
    color: #aaa;
    float: right;
    font-size: 36px;
    font-weight: bold;
    cursor: pointer;
    margin-top: -28px;
    margin-right: -10px;
  `;
  closeBtn.innerHTML = "&times;";
  closeBtn.onclick = closeModal;

  const modalDiv = document.createElement("div");
  modalDiv.style =
    "display: flex; flex-direction: column; gap: 2rem; padding-block: 16px;";

  const modalText = document.createElement("span");
  modalText.textContent = "Thanks for checking out the E-Commerce Demo Site!";

  const modalLink = document.createElement("a");
  modalLink.href = "https://dangroleauwebdevelopment.com";
  modalLink.textContent = "Return to Main Site";
  modalLink.style =
    "border: solid 2px; padding: 0.5rem 1rem; font-size: 16px; text-decoration: none; text-align: center;";

  modalDiv.appendChild(modalText);
  modalDiv.appendChild(modalLink);
  modalContent.appendChild(closeBtn);
  modalContent.appendChild(modalDiv);
  modal.appendChild(modalContent);

  document.body.appendChild(modal);
  modal.style.display = "block";
}

function closeModal() {
  const modal = document.querySelector("#dynamic-modal");
  if (modal) {
    modal.style.display = "none";
    document.body.removeChild(modal);
  }
}
