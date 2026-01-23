// document.addEventListener('DOMContentLoaded', function () {
//   if (!document.querySelector('#fullpage')) return;

//   new fullpage('#fullpage', {
//     licenseKey: 'gplv3-license',
//     autoScrolling: true,
//     fitToSection: true,
//     scrollingSpeed: 800,
//     navigation: true
//   });

// console.log(typeof fullpage);

// });





//header logic hidden menu
const header = document.getElementById("main-header");
const triggers = document.querySelectorAll(".nav-trigger");
const menuContainer = document.getElementById("mega-menu-container");
const allMenus = document.querySelectorAll(".menu-content");

function openMenu(targetId) {
  allMenus.forEach((menu) => menu.classList.replace("flex", "hidden"));
  const activeMenu = document.getElementById(targetId);
  if (activeMenu) {
    activeMenu.classList.replace("hidden", "flex");
    menuContainer.classList.remove("hidden");
    setTimeout(() => {
      menuContainer.classList.add("opacity-100");
    }, 10);
  }
}

function closeAllMenus() {
  menuContainer.classList.remove("opacity-100");
  setTimeout(() => {
    if (!menuContainer.classList.contains("opacity-100")) {
      menuContainer.classList.add("hidden");
      allMenus.forEach((menu) => menu.classList.replace("flex", "hidden"));
    }
  }, 300);
}

triggers.forEach((trigger) => {
  trigger.addEventListener("mouseenter", () => {
    const target = trigger.getAttribute("data-target");
    openMenu(target);
  });
});

header.addEventListener("mouseleave", (e) => {
  closeAllMenus();
});









document.addEventListener('DOMContentLoaded', () => {
    const overlay = document.getElementById('mobile-menu-overlay');
    const trigger = document.getElementById('mobile-menu-trigger');
    const closeBtn = document.getElementById('mobile-menu-close');
    const accordions = document.querySelectorAll('.mobile-accordion');

    // 1. Open/Close Menu
    trigger.addEventListener('click', () => {
        overlay.classList.remove('translate-x-full');
        document.body.style.overflow = 'hidden'; // Stop page scrolling
    });

    closeBtn.addEventListener('click', () => {
        overlay.classList.add('translate-x-full');
        document.body.style.overflow = ''; // Resume page scrolling
    });

    // 2. Accordion Toggle Logic
    accordions.forEach(acc => {
        const headerBtn = acc.querySelector('button');
        const content = acc.querySelector('.accordion-content');
        const plusSign = acc.querySelector('.plus-icon');

        headerBtn.addEventListener('click', () => {
            const isCurrentlyOpen = !content.classList.contains('hidden');

            // Optional: Close all other open accordions first
            accordions.forEach(other => {
                other.querySelector('.accordion-content').classList.add('hidden');
                other.querySelector('.plus-icon').textContent = '+';
            });

            // Toggle current one
            if (isCurrentlyOpen) {
                content.classList.add('hidden');
                plusSign.textContent = '+';
            } else {
                content.classList.remove('hidden');
                plusSign.textContent = '−'; // Changes to minus
            }
        });
    });
});









// --- Initialize FullPage.js ---
var myFullpage = new fullpage("#fullpage", {
  licenseKey: "gplv3-license",
  scrollOverflow: false,
  controlArrows: false,
  loopHorizontal: true,
  scrollingSpeed: 1000,

  afterLoad: function (origin, destination, direction) {
    // 1. Logic for the Driving Car Section
    if (destination.item.classList.contains('car-section')) {
      const activeGroup = destination.item.querySelector(".car-group.active-group");
      if (activeGroup) {
        runCarAnimation(activeGroup);
      }
    } else {
      // 2. Standard logic for other sections
      const activeSlide = destination.item.querySelector(".slide.active");
      if (activeSlide) {
        runGsapAnimation(activeSlide);
      } else {
        runGsapAnimation(destination.item);
      }
    }
  },

  onLeave: function (origin, destination, direction) {
    // Reset specific Car logic
    if (origin.item.classList.contains('car-section')) {
      resetCarAnimation(origin.item);
    }
    // Reset standard GSAP
    resetGsapAnimation(origin.item);
  },

  afterSlideLoad: function (section, origin, destination, direction) {
    runGsapAnimation(destination.item);
  },

  onSlideLeave: function (section, origin, destination, direction) {
    resetGsapAnimation(origin.item);
  },
});

// --- Custom Arrow & Auto-Play Logic ---
document.getElementById("prevArrow").addEventListener("click", () => fullpage_api.moveSlideLeft());
document.getElementById("nextArrow").addEventListener("click", () => fullpage_api.moveSlideRight());

setInterval(function () {
  var activeSection = fullpage_api.getActiveSection();
  if (activeSection.item.querySelectorAll(".slide").length > 0) {
    fullpage_api.moveSlideRight();
  }
}, 5000);