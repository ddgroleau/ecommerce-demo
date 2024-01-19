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
});
