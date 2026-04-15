import { animate, createTimeline, onScroll, stagger } from "animejs";

createTimeline()
    .add(".caption", {
        x: [-100, 0],
        opacity: [0, 1],
        duration: 2000,
        ease: "outBounce",
        delay: stagger(250),
        autoplay: onScroll({ target: ".caption" }),
    })
    .add("ul li", {
        scale: [0.75, 1],
        opacity: [0, 1],
        delay: stagger(250),
        ease: "outElastic",
    })
    .init();

animate("table tr", {
    scale: [0.9, 1],
    opacity: [0, 1],
    duration: 2500,
    delay: stagger(250),
    ease: "outElastic",
    autoplay: onScroll({ target: "table" }),
});

animate(".services-menu .menu-item", {
    x: ["-100%", 0],
    opacity: [0, 1],
    delay: stagger(250),
    autoplay: onScroll({ target: ".services-menu" }),
});

createTimeline({
    autoplay: onScroll({ target: ".consultation" }),
})
    .add(".consultation", {
        scale: [0.5, 1],
        opacity: [0, 1],
        duration: 1500,
        ease: "outElastic",
    })
    .add(
        ".consultation .title",
        {
            y: [-40, 0],
            opacity: [0, 1],
            duration: 1000,
        },
        "-=250"
    )
    .add(
        ".consultation .phone",
        {
            x: [-40, 0],
            opacity: [0, 1],
            duration: 1000,
        },
        "-=500"
    )
    .add(
        ".consultation .email",
        {
            y: [40, 0],
            opacity: [0, 1],
            duration: 1000,
        },
        "-=500"
    )
    .add(
        ".consultation .order",
        {
            scale: [0, 1],
            opacity: [0, 1],
            duration: 1500,
            ease: "outElastic",
        },
        "-=500"
    )
    .add(
        ".consultation img.thumbs-up",
        {
            opacity: [0, 1],
            duration: 2500,
            ease: "linear",
        },
        "-=2250"
    )
    .init();
