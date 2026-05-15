import { initializeCarousel, initializeFeedbackCarousel, initializeGallery } from "./carousel";
import { animate, stagger, set, splitText, createTimeline } from "animejs";
import flatpickr from "flatpickr";

window.initializeCarousel = initializeCarousel;
window.initializeFeedbackCarousel = initializeFeedbackCarousel;
window.initializeGallery = initializeGallery;
window.flatpickr = flatpickr;

import.meta.glob(["../images/**", "../videos/**", "../fonts/**"], {
    eager: true,
});

window.animateFeatures = (container) => {
    if (!container) return;

    const featureItems = container.querySelectorAll(".feature-animate-item");
    if (featureItems.length === 0) return;

    // Сховати елементи відразу
    set(featureItems, { opacity: 0, translateY: 40 });

    const observer = new IntersectionObserver(
        (entries) => {
            if (entries[0].isIntersecting) {
                animate(featureItems, {
                    translateY: [40, 0],
                    opacity: [0, 1],
                    delay: stagger(200),
                    duration: 1000,
                    ease: "outQuart",
                });
                observer.unobserve(container);
            }
        },
        { threshold: 0.1 },
    );

    observer.observe(container);
};

window.animateFaq = (container) => {
    if (!container) return;

    const faqItems = container.querySelectorAll(".faq-animate-item");
    if (faqItems.length === 0) return;

    // Сховати елементи відразу засобами бібліотеки
    set(faqItems, { opacity: 0, translateY: 30 });

    const observer = new IntersectionObserver(
        (entries) => {
            if (entries[0].isIntersecting) {
                animate(faqItems, {
                    translateY: [30, 0],
                    opacity: [0, 1],
                    delay: stagger(200),
                    duration: 800,
                    ease: "outQuart",
                });
                observer.unobserve(container);
            }
        },
        { threshold: 0.1 },
    );

    observer.observe(container);
};

window.animateBlog = (container) => {
    if (!container) return;

    const blogItems = container.querySelectorAll(".blog-animate-item");
    if (blogItems.length === 0) return;

    // Set initial state immediately
    set(blogItems, {
        opacity: 0,
        translateY: 40,
        scale: 0.98,
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animate(blogItems, {
                        translateY: [40, 0],
                        scale: [0.98, 1],
                        opacity: [0, 1],
                        delay: stagger(200),
                        duration: 800,
                        ease: "outQuart",
                    });
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1 },
    );

    observer.observe(container);
};

window.animateCta = (container) => {
    if (!container) return;

    // Автоматично розбиваємо текст на окремі <span>
    const split = splitText(container.querySelector("#cta-headline"), {
        words: true,
    });
    const wordSpans = split.words;

    const playWrapper = container.querySelector("#cta-play-wrapper");
    const starsBlock = container.querySelector("#cta-stars-block");
    const logoBg = container.querySelector("#cta-logo-bg");

    // Задаємо початковий стан усіх елементів перед анімацією
    set(wordSpans, { opacity: 0, translateY: 20 });
    set(playWrapper, { opacity: 0, scale: 0.5 });
    set(starsBlock, { opacity: 0, translateX: -20 });
    set(logoBg, { opacity: 0, translateY: 100 });

    // Створюємо таймлайн та визначаємо дефолтні налаштування для дітей (v4 інваріант)
    const tl = createTimeline({
        autoplay: false, // Запускаємо лише тоді, коли блок з'явиться на екрані
        defaults: {
            ease: "outQuart",
            duration: 1000,
        },
    });

    // Будуємо ланцюжок послідовності
    tl.add(wordSpans, {
        opacity: 1,
        translateY: 0,
        delay: stagger(150), // Почергова поява слів
    })
        .add(
            playWrapper,
            {
                opacity: 1,
                scale: 1,
                duration: 1000,
                ease: "outElastic(1, .6)",
            },
            "-=800",
        ) // Почнеться на 400мс раніше, ніж закінчиться попередня анімація тексту
        .add(
            starsBlock,
            {
                opacity: 1,
                translateX: 0,
            },
            "-=400",
        ) // Зірки з'являються паралельно з кнопкою
        .add(
            logoBg,
            {
                opacity: 1,
                translateY: 0,
                duration: 1200,
            },
            "-=200",
        ); // Фоновий логотип плавно завершує композицію

    // Ініціалізуємо IntersectionObserver для тригеру анімації
    const observer = new IntersectionObserver(
        ([entry]) => {
            if (entry.isIntersecting) {
                tl.play(); // Вмикаємо весь таймлайн
                observer.unobserve(container); // Вимикаємо обсервер
            }
        },
        { threshold: 0.1 },
    );

    observer.observe(container);
};
