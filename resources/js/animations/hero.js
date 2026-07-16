import { gsap } from "gsap";

document.addEventListener("DOMContentLoaded", () => {
    const hero = document.querySelector("[data-hero]");

    if (!hero) {
        return;
    }

    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;

    if (prefersReducedMotion) {
        gsap.set(
            ".hero-badge, .hero-title, .hero-description, .hero-actions, .hero-visual, .hero-card",
            { clearProps: "all", opacity: 1 },
        );

        return;
    }

    const isDesktop = window.matchMedia("(min-width: 1280px)").matches;
    const cards = isDesktop ? gsap.utils.toArray(".hero-card") : [];
    const cardInners = isDesktop ? gsap.utils.toArray(".hero-card-inner") : [];
    const networkLines = isDesktop ? gsap.utils.toArray(".hero-network-line") : [];
    const networkNodes = isDesktop
        ? gsap.utils.toArray(".hero-network-nodes circle")
        : [];

    const startCardFloat = () => {
        if (!isDesktop) {
            return;
        }

        cards.forEach((card, index) => {
            gsap.to(card, {
                y: -10 - index * 0.8,
                duration: 2.8 + index * 0.25,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
                delay: index * 0.12,
            });
        });
    };

    const intro = gsap.timeline({
        defaults: { ease: "power3.out" },
        onComplete: startCardFloat,
    });

    intro
        .from(".hero-badge", { y: 24, opacity: 0, duration: 0.65 })
        .from(".hero-title", { y: 46, opacity: 0, duration: 0.9 }, "-=0.35")
        .from(
            ".hero-description",
            { y: 28, opacity: 0, duration: 0.75 },
            "-=0.45",
        )
        .from(
            ".hero-actions",
            { y: 22, opacity: 0, duration: 0.65 },
            "-=0.35",
        );

    if (!isDesktop) {
        return;
    }

    intro
        .from(
            ".hero-visual",
            { y: 34, opacity: 0, scale: 0.98, duration: 0.9 },
            "-=0.55",
        )
        .from(
            cards,
            {
                y: 28,
                opacity: 0,
                scale: 0.96,
                stagger: 0.08,
                duration: 0.7,
            },
            "-=0.45",
        );

    gsap.utils.toArray(".hero-orbit").forEach((orbit, index) => {
        gsap.to(orbit, {
            rotate: index % 2 === 0 ? 360 : -360,
            duration: 48 + index * 18,
            repeat: -1,
            ease: "none",
            transformOrigin: "50% 50%",
        });
    });

    gsap.to(".hero-core", {
        scale: 1.04,
        duration: 2.8,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
    });

    gsap.to(".hero-core-ring", {
        rotate: 360,
        duration: 36,
        repeat: -1,
        ease: "none",
    });

    gsap.to(".hero-ambient", {
        scale: 1.12,
        opacity: 0.72,
        duration: 3.4,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
    });

    networkLines.forEach((line, index) => {
        const length = line.getTotalLength();

        gsap.set(line, {
            strokeDasharray: length,
            strokeDashoffset: length,
        });

        gsap.to(line, {
            strokeDashoffset: 0,
            duration: 1.2,
            delay: 0.35 + index * 0.08,
            ease: "power2.out",
        });
    });

    gsap.to(networkNodes, {
        scale: 1.55,
        opacity: 0.7,
        duration: 1.8,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
        stagger: 0.12,
        transformOrigin: "50% 50%",
    });

    if (window.matchMedia("(pointer: fine)").matches) {
        hero.addEventListener("mousemove", (event) => {
            const bounds = hero.getBoundingClientRect();
            const x = (event.clientX - bounds.left) / bounds.width - 0.5;

            gsap.to(cardInners, {
                x: x * 18,
                rotateY: x * 4,
                duration: 0.8,
                ease: "power2.out",
                overwrite: "auto",
            });

            gsap.to(".hero-core", {
                x: x * 10,
                duration: 0.9,
                ease: "power2.out",
                overwrite: "auto",
            });
        });

        hero.addEventListener("mouseleave", () => {
            gsap.to(cardInners, {
                x: 0,
                rotateY: 0,
                duration: 0.8,
                ease: "power2.out",
                overwrite: "auto",
            });

            gsap.to(".hero-core", {
                x: 0,
                duration: 0.8,
                ease: "power2.out",
                overwrite: "auto",
            });
        });
    }
});
