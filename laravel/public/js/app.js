if (typeof tailwind !== 'undefined') {
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    gorilla: '#DE5A17',
                    primary: '#DE5A17',
                    cocoa: '#4C1D10',
                    'burnt-orange': '#DE5A17',
                    burnt: '#DE5A17',
                    amber: '#FE9E32',
                    cyan: '#01CAFF',
                    red: '#E02E2E',
                    cream: '#FBE8C8',
                    caramel: '#7A3B1F',
                },
                fontFamily: {
                    poppins: ['"Poppins"', 'sans-serif'],
                    montserrat: ['"Montserrat"', 'sans-serif'],
                    roboto: ['"Roboto"', 'sans-serif'],
                    heading: ['"Poppins"', 'sans-serif'],
                    subheading: ['"Montserrat"', 'sans-serif'],
                    sans: ['"Roboto"', 'sans-serif'],
                    bricolage: ['"Poppins"', 'sans-serif'],
                },
                borderRadius: {
                    '2xl': '1rem',
                    '3xl': '1.5rem',
                    '4xl': '2rem',
                    '5xl': '2.5rem',
                }
            }
        }
    };
}

document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    }

    const DEFAULT_IMAGE_FALLBACK = '/images/packaging-hero.png';

    document.querySelectorAll('img').forEach(function (img) {
        const src = img.getAttribute('src');
        if (!src || src.trim() === '' || src === window.location.href) {
            img.src = DEFAULT_IMAGE_FALLBACK;
        }

        img.addEventListener('error', function () {
            if (!this.dataset.fallbackApplied) {
                this.dataset.fallbackApplied = 'true';
                this.src = DEFAULT_IMAGE_FALLBACK;
            }
        });
    });
});
