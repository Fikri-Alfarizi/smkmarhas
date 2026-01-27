(function () {
    'use strict';

    const fasilitasObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in').forEach(el => {
        fasilitasObserver.observe(el);
    });

    window.setMiniSlide = function (containerId, index) {
        const container = document.getElementById(containerId);
        if (!container) return;

        const slides = container.querySelectorAll('.mini-carousel-slide');
        const indicators = container.querySelectorAll('.mini-indicator');

        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });

        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    };
})();