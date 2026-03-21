<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    
    // --- Helper: Select Element ---
    const $ = (id) => document.getElementById(id);
    const $$ = (selector) => document.querySelectorAll(selector);

    // --- 1. UI Toggles (Mobile Menu & Avatar) ---
    const toggleUI = (btnId, menuId, overlayId = null) => {
        const btn = $(btnId);
        const menu = $(menuId);
        const overlay = overlayId ? $(overlayId) : null;

        if (!btn || !menu) return;

        const toggle = () => {
            menu.classList.toggle('-translate-x-full');
            menu.classList.toggle('hidden'); // For avatar type menus
            if (overlay) overlay.classList.toggle('hidden');
        };

        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggle();
        });

        // Specific for mobile sidebar close button
        if ($(btnId === 'mobile-menu-btn' ? 'close-menu-btn' : null)) {
            $('close-menu-btn').addEventListener('click', toggle);
        }

        // Close when clicking outside
        document.addEventListener('click', (e) => {
            if (!menu.contains(e.target) && !btn.contains(e.target)) {
                menu.classList.add('-translate-x-full');
                menu.classList.add('hidden');
                if (overlay) overlay.classList.add('hidden');
            }
        });
    };

    toggleUI('mobile-menu-btn', 'mobile-sidebar', 'menu-overlay');
    toggleUI('mobile-avatar-button', 'avatar-submenu-mobile');

    // --- 2. Back to Top Button ---
    const backToTopBtn = $('back-to-top');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            const isVisible = window.scrollY > 300;
            backToTopBtn.classList.toggle('hidden', !isVisible);
            backToTopBtn.classList.toggle('flex', isVisible);
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // --- 3. Swiper Initializations (Unified Logic) ---
    const initSwiper = (selector, options) => {
        if (document.querySelector(selector)) return new Swiper(selector, options);
    };

    // Hero
    initSwiper('.main-slider', {
        loop: true,
        pagination: { el: '.swiper-pagination', clickable: true },
        autoplay: { delay: 5000 },
    });

    // Product/Category Sliders (Common Breakpoints)
    const productBreakpoints = {
        640: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        1024: { slidesPerView: 4 }
    };

    initSwiper('.category-slider', { 
        slidesPerView: 2, spaceBetween: 20, loop: true, 
        breakpoints: { ...productBreakpoints, 1024: { slidesPerView: 6 } } 
    });

    initSwiper('.brand-slider', { 
        slidesPerView: 2, spaceBetween: 20, loop: true, 
        breakpoints: { ...productBreakpoints, 1024: { slidesPerView: 5 } } 
    });

    initSwiper('.featured-slider', { 
        slidesPerView: 1, spaceBetween: 20, 
        navigation: { nextEl: '.feat-next', prevEl: '.feat-prev' },
        breakpoints: productBreakpoints 
    });

    initSwiper('.related-slider', { 
        slidesPerView: 1, spaceBetween: 20, 
        navigation: { nextEl: '.related-next', prevEl: '.related-prev' },
        breakpoints: productBreakpoints 
    });

    // Gallery Thumbs logic
    const galleryThumbs = initSwiper('.gallery-thumbs', {
        spaceBetween: 10, slidesPerView: 4, freeMode: true, watchSlidesProgress: true,
    });

    initSwiper('.gallery-top', {
        spaceBetween: 10,
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        thumbs: { swiper: galleryThumbs }
    });

    // --- 4. Tabs Logic ---
    $$('.tab-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            $$('.tab-btn').forEach(b => b.classList.remove('active'));
            $$('.tab-content').forEach(c => c.classList.add('hidden'));
            
            btn.classList.add('active');
            const target = $(btn.getAttribute('data-target'));
            if (target) target.classList.remove('hidden');
        });
    });

    // --- 5. Countdown Timer ---
    const countdownContainer = $('countdown-timer');
    if (countdownContainer) {
        const targetDate = new Date("2025-12-31T00:00:00").getTime();
        const updateTimer = () => {
            const distance = targetDate - new Date().getTime();
            if (distance < 0) {
                countdownContainer.innerHTML = "EXPIRED";
                return clearInterval(timerInterval);
            }
            const timeMap = {
                days: Math.floor(distance / 864e5),
                hours: Math.floor((distance % 864e5) / 36e5),
                minutes: Math.floor((distance % 36e5) / 6e4),
                seconds: Math.floor((distance % 6e4) / 1000)
            };
            Object.keys(timeMap).forEach(unit => {
                const el = $(unit);
                if (el) el.innerText = String(timeMap[unit]).padStart(2, '0');
            });
        };
        const timerInterval = setInterval(updateTimer, 1000);
        updateTimer();
    }
});

// --- 6. Global Functions ---
function updateQty(amount) {
    const input = document.getElementById('qty-input');
    if (!input) return;
    let val = parseInt(input.value) + amount;
    input.value = val < 1 ? 1 : val;
}
</script>