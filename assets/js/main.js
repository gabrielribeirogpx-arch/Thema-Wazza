(function () {
  'use strict';

  const toggle = document.querySelector('[data-menu-toggle]');
  const nav = document.querySelector('[data-primary-navigation]');

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      const isOpen = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      document.body.classList.toggle('menu-open', isOpen);
    });

    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('menu-open');
      });
    });
  }

  if ('IntersectionObserver' in window) {
    const animated = document.querySelectorAll('[data-animate]');
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.16 });

    animated.forEach(function (item) { observer.observe(item); });
  }
}());
