document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('welcomeModal');
    const closeBtn = document.getElementById('closeWelcomeModal');
    const overlay = modal.querySelector('.welcome-modal-overlay');
    const slidesWrapper = document.getElementById('welcomeSlidesWrapper');
    const slides = modal.querySelectorAll('.welcome-slide');
    const dots = modal.querySelectorAll('.welcome-dot');
    const prevBtn = document.getElementById('welcomePrev');
    const nextBtn = document.getElementById('welcomeNext');

    let currentSlide = 0;
    let autoSlideInterval;
    const slideCount = slides.length;

    const hasSeenModal = sessionStorage.getItem('welcomeModalSeen');

    if (!hasSeenModal) {
        setTimeout(showModal, 100);
    }

    function showModal() {
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
        setTimeout(() => {
            modal.classList.add('visible');
        }, 10);
        startAutoSlide();
    }

    function hideModal() {
        modal.classList.remove('visible');
        setTimeout(() => {
            modal.classList.remove('show');
            document.body.style.overflow = '';
        }, 300);
        stopAutoSlide();
        sessionStorage.setItem('welcomeModalSeen', 'true');
    }

    function goToSlide(index) {
        if (index < 0) index = slideCount - 1;
        if (index >= slideCount) index = 0;
        currentSlide = index;
        slidesWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
        updateDots();
    }

    function updateDots() {
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentSlide);
        });
    }

    function nextSlide() {
        goToSlide(currentSlide + 1);
    }

    function prevSlide() {
        goToSlide(currentSlide - 1);
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 4000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    closeBtn.addEventListener('click', hideModal);
    overlay.addEventListener('click', hideModal);

    prevBtn.addEventListener('click', function () {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
    });

    nextBtn.addEventListener('click', function () {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', function () {
            stopAutoSlide();
            goToSlide(index);
            startAutoSlide();
        });
    });

    document.addEventListener('keydown', function (e) {
        if (!modal.classList.contains('show')) return;

        if (e.key === 'Escape') {
            hideModal();
        } else if (e.key === 'ArrowLeft') {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        } else if (e.key === 'ArrowRight') {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        }
    });
});