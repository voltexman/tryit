import EmblaCarousel from "embla-carousel";
import Autoplay from "embla-carousel-autoplay";
import PhotoSwipeLightbox from "photoswipe/lightbox";
import "photoswipe/style.css";

export function initializeFeedbackCarousel(id) {
    const container = document.getElementById(id);
    if (!container) return;

    const emblaContainer = container.querySelector(".embla__viewport");
    if (!emblaContainer) return;

    const plugins = [
        Autoplay({ delay: 5000, stopOnInteraction: false, stopOnMouseEnter: true })
    ];

    const embla = EmblaCarousel(
        emblaContainer,
        {
            align: "start",
            loop: true,
            skipSnaps: false,
        },
        plugins
    );

    const prevBtn = container.querySelector(".embla__prev");
    const nextBtn = container.querySelector(".embla__next");

    if (prevBtn) prevBtn.addEventListener("click", () => embla.scrollPrev());
    if (nextBtn) nextBtn.addEventListener("click", () => embla.scrollNext());
}

export function initializeCarousel(id, itemsPerView, autoplayEnabled = true) {
    const container = document.getElementById(id);
    if (!container) return;

    const links = container.querySelectorAll("a[data-pswp]");
    links.forEach((link) => {
        const img = new Image();
        img.src = link.href;
        img.onload = () => {
            link.setAttribute("data-pswp-width", img.width);
            link.setAttribute("data-pswp-height", img.height);
        };
    });

    const lightbox = new PhotoSwipeLightbox({
        gallery: "#" + id,
        children: "a[data-pswp]",
        pswpModule: () => import("photoswipe"),
    });
    lightbox.init();

    const plugins = [];
    if (autoplayEnabled) {
        plugins.push(Autoplay({ delay: 5000, stopOnInteraction: false }));
    }

    const embla = EmblaCarousel(
        container,
        {
            align: "center",
            loop: true,
            duration: 30,
            skipSnaps: false,
        },
        plugins,
    );

    const updateActiveClasses = () => {
        const selectedSnap = embla.selectedScrollSnap();
        const slides = embla.slideNodes();

        slides.forEach((slide, index) => {
            if (index === selectedSnap) {
                slide.classList.add("is-active");
            } else {
                slide.classList.remove("is-active");
            }
        });
    };

    const prevBtn = container.parentElement.querySelector(".embla__prev");
    const nextBtn = container.parentElement.querySelector(".embla__next");

    if (prevBtn) prevBtn.addEventListener("click", () => embla.scrollPrev());
    if (nextBtn) nextBtn.addEventListener("click", () => embla.scrollNext());

    embla.on("select", updateActiveClasses);
    embla.on("init", updateActiveClasses);
    embla.on("reInit", updateActiveClasses);

    updateActiveClasses();

    setTimeout(() => embla.reInit(), 200);
}

export function initializeGallery(id) {
    const container = document.getElementById(id);
    if (!container) return;

    const links = container.querySelectorAll("a[data-pswp]");
    links.forEach((link) => {
        if (link.getAttribute("data-pswp-width")) return;

        const img = new Image();
        img.src = link.href;
        img.onload = () => {
            link.setAttribute("data-pswp-width", img.width);
            link.setAttribute("data-pswp-height", img.height);
        };
    });

    const lightbox = new PhotoSwipeLightbox({
        gallery: "#" + id,
        children: "a[data-pswp]",
        pswpModule: () => import("photoswipe"),
        paddingFn: (viewportSize) => {
            return {
                top: 30,
                bottom: 100,
                left: 30,
                right: 30,
            };
        },
    });

    lightbox.on("uiRegister", function () {
        lightbox.pswp.ui.registerElement({
            name: "custom-caption",
            order: 9,
            isResource: false,
            appendTo: "root",
            onInit: (el, pswp) => {
                pswp.on("change", () => {
                    const currSlideElement = pswp.currSlide.data.element;
                    let captionHTML = "";
                    if (currSlideElement) {
                        const title =
                            currSlideElement.getAttribute("data-pswp-title");
                        const desc = currSlideElement.getAttribute(
                            "data-pswp-description",
                        );

                        if (title && title !== "null" && title !== "") {
                            captionHTML += `<div class="pswp__custom-caption-title">${title}</div>`;
                        }
                        if (desc && desc !== "null" && desc !== "") {
                            captionHTML += `<div class="pswp__custom-caption-desc">${desc}</div>`;
                        }
                    }
                    el.innerHTML = captionHTML || "";
                    el.style.display = captionHTML ? "flex" : "none";
                });
            },
        });
    });

    lightbox.init();
}
