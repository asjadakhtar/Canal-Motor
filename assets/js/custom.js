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
  licenseKey: "xxxxxxxxxxxxxxxxxxxxxxxxx",
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



// GSAP ANIMATION FUNCTIONS
function runGsapAnimation(container) {
  const elements = container.querySelectorAll(".gsap-reveal");
  if (!elements.length) return;

  gsap.killTweensOf(elements);

  elements.forEach((el, i) => {
    const isButton = el.tagName === "A" && el.classList.contains("opacity-70");

    gsap.to(el, {
      y: 0,
      opacity: isButton ? 0.7 : 1,
      duration: 1.1,
      ease: "power2.out",
      delay: i * 0.18,
    });
  });
}

function resetGsapAnimation(container) {
  const elements = container.querySelectorAll(".gsap-reveal");
  if (!elements.length) return;

  gsap.killTweensOf(elements);
  gsap.set(elements, { y: 120, opacity: 0 });
}






// --- GSAP Reveal + Driving Animation ---
document.addEventListener("DOMContentLoaded", function () {
  // Set Dashing as active in background, but DON'T run animation yet
  // FullPage.js afterLoad will trigger the animation when user arrives
  const dashingGroup = document.getElementById("group-dashing");
  if (dashingGroup) {
    document.querySelectorAll('.car-group').forEach(g => g.classList.remove('active-group'));
    dashingGroup.classList.add('active-group');
    document.querySelectorAll('.car-selector').forEach(t => t.classList.remove('active-thumb'));
    const dashingThumb = document.querySelector('.car-selector[data-target="group-dashing"]');
    if (dashingThumb) dashingThumb.classList.add('active-thumb');
    const btn = document.getElementById('car-explore-btn');
    if (btn && dashingThumb) btn.setAttribute('href', dashingThumb.getAttribute('data-link'));
    
    // Stage the car off-screen so it's ready to drive in
    resetCarAnimation(dashingGroup);
  }
});

function runCarAnimation(container) {
  const titles = container.querySelectorAll(".gsap-reveal:not(.button-reveal)");
  const button = container.querySelector(".button-reveal"); // Find button inside this group
  const car = container.querySelector(".car-move");

  gsap.killTweensOf([titles, car, button]);
  
  gsap.to([titles, button], {
    y: 0,
    opacity: 1, // Set to 1 for both
    duration: 1,
    stagger: 0.2,
    ease: "power2.out"
  });
  
  gsap.to(car, {
    x: 0,
    opacity: 1,
    duration: 1.4,
    ease: "power3.out",
    delay: 0.2
  });
}



function resetCarAnimation(container) {
  // Finding elements specifically inside the container
  const elements = container.querySelectorAll(".gsap-reveal, .car-move, .button-reveal");
  gsap.set(elements, { opacity: 0 });
  gsap.set(container.querySelectorAll(".gsap-reveal, .button-reveal"), { y: 50 });
  gsap.set(container.querySelector(".car-move"), { x: 150 }); 
}


document.querySelectorAll('.car-selector').forEach(thumb => {
  thumb.addEventListener('click', function() {
    document.querySelectorAll('.car-selector').forEach(t => t.classList.remove('active-thumb'));
    this.classList.add('active-thumb');
    const targetId = this.getAttribute('data-target');
    document.querySelectorAll('.car-group').forEach(group => group.classList.remove('active-group'));
    const activeGroup = document.getElementById(targetId);
    activeGroup.classList.add('active-group');
    resetCarAnimation(activeGroup);
    runCarAnimation(activeGroup);
  });
});