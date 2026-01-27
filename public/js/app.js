document.addEventListener('DOMContentLoaded', function () {
  const backToTopButton = document.getElementById("backToTop");

  if (backToTopButton) {
    function checkScroll() {
      const y = window.scrollY || document.documentElement.scrollTop || document.body.scrollTop || 0;

      if (y > 300) {
        backToTopButton.classList.add("show");
        backToTopButton.style.opacity = "1";
        backToTopButton.style.visibility = "visible";
      } else {
        backToTopButton.classList.remove("show");
        backToTopButton.style.opacity = "0";
        backToTopButton.style.visibility = "hidden";
      }
    }

    window.addEventListener('scroll', checkScroll);
    document.body.addEventListener('scroll', checkScroll);
    document.addEventListener('scroll', checkScroll, true);

    backToTopButton.addEventListener("click", function (e) {
      e.preventDefault();

      const startPosition = window.pageYOffset;
      const distance = -startPosition;
      const duration = 600;
      let start = null;

      function step(timestamp) {
        if (!start) start = timestamp;
        const progress = timestamp - start;
        const percentage = Math.min(progress / duration, 1);

        const ease = 1 - Math.pow(1 - percentage, 3);

        window.scrollTo(0, startPosition + distance * ease);

        if (progress < duration) {
          window.requestAnimationFrame(step);
        }
      }

      window.requestAnimationFrame(step);
    });

    checkScroll();
  }
});

function hidePreloader() {
  const preloader = document.getElementById("preloader");
  if (preloader && preloader.style.display !== "none" && !preloader.classList.contains('hiding')) {
    preloader.classList.add('hiding');
    preloader.style.opacity = "0";
    setTimeout(() => {
      preloader.style.display = "none";
    }, 200);
  }
}

window.addEventListener("load", hidePreloader);

setTimeout(hidePreloader, 300);

const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
dropdownToggles.forEach(toggle => {
  toggle.addEventListener('click', function (e) {
    e.preventDefault();
    const dropdown = this.closest('.mobile-dropdown');
    const icon = this.querySelector('.fa-chevron-down');

    dropdown.classList.toggle('active');

    if (icon) {
      if (dropdown.classList.contains('active')) {
        icon.style.transform = 'rotate(180deg)';
      } else {
        icon.style.transform = 'rotate(0deg)';
      }
    }
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.querySelector('.mobile-menu-toggle');
  const mobileMenu = document.querySelector('.mobile-menu');
  const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
  const mobileMenuClose = document.querySelector('.mobile-menu-close');

  if (menuToggle && mobileMenu && mobileMenuOverlay && mobileMenuClose) {
    menuToggle.addEventListener('click', function () {
      mobileMenu.classList.add('active');
      mobileMenuOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    });

    function closeMobileMenu() {
      mobileMenu.classList.remove('active');
      mobileMenuOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }

    mobileMenuClose.addEventListener('click', closeMobileMenu);
    mobileMenuOverlay.addEventListener('click', closeMobileMenu);
  }
});

const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.slider-dot');

if (slides.length > 0) {
  let currentSlide = 0;
  const slideInterval = 4000;

  function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    if (slides[index]) slides[index].classList.add('active');
    if (dots[index]) dots[index].classList.add('active');
    currentSlide = index;
  }

  function nextSlide() {
    let nextIndex = (currentSlide + 1) % slides.length;
    showSlide(nextIndex);
  }

  setInterval(nextSlide, slideInterval);

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      showSlide(index);
    });
  });
}

const desktopDropdowns = document.querySelectorAll('.nav-links .dropdown');
desktopDropdowns.forEach(dropdown => {
  const navItem = dropdown.querySelector('.nav-item');

  if (navItem) {
    navItem.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();

      desktopDropdowns.forEach(otherDropdown => {
        if (otherDropdown !== dropdown) {
          otherDropdown.classList.remove('active');
        }
      });

      dropdown.classList.toggle('active');
    });
  }
});

document.addEventListener('click', function (e) {
  if (!e.target.closest('.dropdown')) {
    desktopDropdowns.forEach(dropdown => {
      dropdown.classList.remove('active');
    });
  }
});

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.fade-in').forEach(el => {
  observer.observe(el);
});

const themeButtons = document.querySelectorAll('.theme-btn');

const savedTheme = localStorage.getItem('smkmarhas-theme') || 'green';
applyTheme(savedTheme);

function applyTheme(theme) {
  document.body.classList.remove('theme-blue', 'theme-orange');

  if (theme === 'blue') {
    document.body.classList.add('theme-blue');
  } else if (theme === 'orange') {
    document.body.classList.add('theme-orange');
  }

  themeButtons.forEach(btn => {
    btn.classList.remove('active');
    if (btn.dataset.theme === theme) {
      btn.classList.add('active');
    }
  });

  localStorage.setItem('smkmarhas-theme', theme);
}

themeButtons.forEach(btn => {
  btn.addEventListener('click', function () {
    const theme = this.dataset.theme;
    applyTheme(theme);
  });
});