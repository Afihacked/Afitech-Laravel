import { gsap } from "gsap";

document.addEventListener("DOMContentLoaded", () => {
    const button = document.querySelector("[data-back-to-top]");
    const progress = button?.querySelector("[data-scroll-progress]");

    if (!button || !progress) {
        return;
    }

    const radius = Number(progress.getAttribute("r"));
    const circumference = 2 * Math.PI * radius;
    let isVisible = false;

    gsap.set(progress, {
        strokeDasharray: circumference,
        strokeDashoffset: circumference,
    });

    const showButton = () => {
        if (isVisible) {
            return;
        }

        isVisible = true;
        button.classList.remove("pointer-events-none");

        gsap.to(button, {
            autoAlpha: 1,
            y: 0,
            scale: 1,
            duration: 0.3,
            ease: "power3.out",
            overwrite: "auto",
        });
    };

    const hideButton = () => {
        if (!isVisible) {
            return;
        }

        isVisible = false;

        gsap.to(button, {
            autoAlpha: 0,
            y: 16,
            scale: 0.94,
            duration: 0.24,
            ease: "power2.out",
            overwrite: "auto",
            onComplete: () => button.classList.add("pointer-events-none"),
        });
    };

    const updateProgress = () => {
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
        const scrollProgress = maxScroll > 0 ? window.scrollY / maxScroll : 0;

        progress.style.strokeDashoffset = String(
            circumference - circumference * scrollProgress,
        );

        if (window.scrollY > 420) {
            showButton();
        } else {
            hideButton();
        }
    };

    updateProgress();

    window.addEventListener("scroll", updateProgress, { passive: true });
    window.addEventListener("resize", updateProgress);

    button.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });

        gsap.fromTo(
            button,
            { scale: 0.92 },
            { scale: 1, duration: 0.32, ease: "back.out(2)" },
        );
    });
});
