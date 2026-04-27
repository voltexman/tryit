import EmblaCarousel from 'embla-carousel';
import Autoplay from 'embla-carousel-autoplay';
import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';

export function initializeCarousel(id, itemsPerView, autoplayEnabled = true) {
    const container = document.getElementById(id);
    if (!container) return;

    // Створюємо список посилань для PhotoSwipe
    const links = container.querySelectorAll('a[data-pswp]');
    
    // Попередньо завантажуємо розміри всіх зображень у каруселі
    links.forEach(link => {
        const img = new Image();
        img.src = link.href;
        img.onload = () => {
            link.setAttribute('data-pswp-width', img.width);
            link.setAttribute('data-pswp-height', img.height);
        };
    });

    // Initialize PhotoSwipe
    const lightbox = new PhotoSwipeLightbox({
        gallery: '#' + id,
        children: 'a[data-pswp]',
        pswpModule: () => import('photoswipe'),
        showHideAnimationType: 'fade',
        initialZoomLevel: 'fit',
        secondaryZoomLevel: 1.5,
        maxZoomLevel: 2,
        getThumbBoundsFn: false 
    });

    lightbox.init();

    const plugins = [];
    if (autoplayEnabled) {
        plugins.push(
            Autoplay({
                delay: 3000,
                stopOnInteraction: false,
                stopOnMouseEnter: true
            })
        );
    }
    
    const embla = EmblaCarousel(container, {
        align: 'center',
        containScroll: false,
        slidesToScroll: 1,
        loop: true,
        skipSnaps: false,
    }, plugins);

    const setVisualEffects = () => {
        const selectedIndex = embla.selectedScrollSnap();
        
        embla.slideNodes().forEach((slideNode, index) => {
            if (index === selectedIndex) {
                slideNode.classList.add('is-active');
            } else {
                slideNode.classList.remove('is-active');
            }
        });
    };

    const dotsContainer = document.getElementById(id + '-dots');

    // Dots
    const createDots = () => {
        if (!dotsContainer) return;
        const scrollSnapList = embla.scrollSnapList();
        const totalDots = scrollSnapList.length;

        dotsContainer.innerHTML = '';
        
        for (let i = 0; i < totalDots; i++) {
            const dot = document.createElement('button');
            dot.className = 'embla__dot';
            dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
            if (i === 0) dot.classList.add('is-selected');

            dot.addEventListener('click', () => {
                embla.scrollTo(i);
            });

            dotsContainer.appendChild(dot);
        }
    };

    const updateDots = () => {
        if (!dotsContainer) return;
        const dots = dotsContainer.querySelectorAll('.embla__dot');
        const selectedIndex = embla.selectedScrollSnap();

        dots.forEach((dot, index) => {
            dot.classList.toggle('is-selected', index === selectedIndex);
        });
    };

    createDots();
    embla.on('select', updateDots);
    embla.on('select', setVisualEffects);
    embla.on('scroll', setVisualEffects);
    embla.on('reInit', createDots);
    embla.on('reInit', setVisualEffects);
    updateDots();
    setVisualEffects();
}
