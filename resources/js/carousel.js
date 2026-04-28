import EmblaCarousel from 'embla-carousel';
import Autoplay from 'embla-carousel-autoplay';
import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';

export function initializeCarousel(id, itemsPerView, autoplayEnabled = true) {
    const container = document.getElementById(id);
    if (!container) return;

    const links = container.querySelectorAll('a[data-pswp]');
    links.forEach(link => {
        const img = new Image();
        img.src = link.href;
        img.onload = () => {
            link.setAttribute('data-pswp-width', img.width);
            link.setAttribute('data-pswp-height', img.height);
        };
    });

    const lightbox = new PhotoSwipeLightbox({
        gallery: '#' + id,
        children: 'a[data-pswp]',
        pswpModule: () => import('photoswipe'),
    });
    lightbox.init();

    const plugins = [];
    if (autoplayEnabled) {
        plugins.push(Autoplay({ delay: 5000, stopOnInteraction: false }));
    }
    
    const embla = EmblaCarousel(container, {
        align: 'center',
        loop: true,
        duration: 30,
        skipSnaps: false
    }, plugins);

    const updateActiveClasses = () => {
        const selectedSnap = embla.selectedScrollSnap();
        const slides = embla.slideNodes();
        
        slides.forEach((slide, index) => {
            if (index === selectedSnap) {
                slide.classList.add('is-active');
            } else {
                slide.classList.remove('is-active');
            }
        });
    };

    const prevBtn = container.parentElement.querySelector('.embla__prev');
    const nextBtn = container.parentElement.querySelector('.embla__next');

    if (prevBtn) prevBtn.addEventListener('click', () => embla.scrollPrev());
    if (nextBtn) nextBtn.addEventListener('click', () => embla.scrollNext());

    embla.on('select', updateActiveClasses);
    embla.on('init', updateActiveClasses);
    embla.on('reInit', updateActiveClasses);
    
    updateActiveClasses();
    
    setTimeout(() => embla.reInit(), 200);
}
