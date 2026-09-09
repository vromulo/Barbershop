document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -50px 0px',
        threshold: 0.1,
    };

    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Animate in when entering viewport
                entry.target.classList.add('is-visible');
            } else {
                // Reset state when scrolled out of view so it animates again next time
                entry.target.classList.remove('is-visible');
            }
        });
    }, observerOptions);

    // Observe all scroll-animated elements
    const elementsToReveal = document.querySelectorAll('.reveal-on-scroll');
    elementsToReveal.forEach((el) => scrollObserver.observe(el));
});