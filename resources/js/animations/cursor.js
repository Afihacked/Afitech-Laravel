import { gsap } from "gsap";

document.addEventListener("DOMContentLoaded", () => {
    const isFinePointer = window.matchMedia("(pointer: fine)").matches;
    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;

    if (!isFinePointer || prefersReducedMotion) {
        return;
    }

    const cursor = document.createElement("div");
    const cursorDot = document.createElement("div");

    cursor.className = "mouse-cursor-ring";
    cursorDot.className = "mouse-cursor-dot";

    document.body.append(cursor, cursorDot);

    gsap.set([cursor, cursorDot], {
        xPercent: -50,
        yPercent: -50,
    });

    const moveRing = gsap.quickTo(cursor, "x", {
        duration: 0.35,
        ease: "power3.out",
    });
    const moveRingY = gsap.quickTo(cursor, "y", {
        duration: 0.35,
        ease: "power3.out",
    });
    const moveDot = gsap.quickTo(cursorDot, "x", {
        duration: 0.12,
        ease: "power2.out",
    });
    const moveDotY = gsap.quickTo(cursorDot, "y", {
        duration: 0.12,
        ease: "power2.out",
    });

    let hasMoved = false;

    window.addEventListener("mousemove", (event) => {
        if (!hasMoved) {
            hasMoved = true;
            document.body.classList.add("has-mouse-motion");
        }

        moveRing(event.clientX);
        moveRingY(event.clientY);
        moveDot(event.clientX);
        moveDotY(event.clientY);
    });

    const hoverTargets = document.querySelectorAll(
        "a, button, [data-cursor-hover]",
    );

    hoverTargets.forEach((target) => {
        target.addEventListener("mouseenter", () => {
            gsap.to(cursor, {
                scale: 1.75,
                borderColor: "rgb(6 182 212 / 0.55)",
                backgroundColor: "rgb(6 182 212 / 0.08)",
                duration: 0.22,
                ease: "power2.out",
            });

            gsap.to(cursorDot, {
                scale: 0.65,
                backgroundColor: "rgb(6 182 212)",
                duration: 0.22,
                ease: "power2.out",
            });
        });

        target.addEventListener("mouseleave", () => {
            gsap.to(cursor, {
                scale: 1,
                borderColor: "rgb(15 23 42 / 0.24)",
                backgroundColor: "rgb(255 255 255 / 0.1)",
                duration: 0.22,
                ease: "power2.out",
            });

            gsap.to(cursorDot, {
                scale: 1,
                backgroundColor: "rgb(15 23 42 / 0.42)",
                duration: 0.22,
                ease: "power2.out",
            });
        });
    });

    window.addEventListener("pointerdown", (event) => {
        if (event.pointerType === "touch") {
            return;
        }

        const ripple = document.createElement("span");

        ripple.className = "mouse-click-ripple";
        document.body.append(ripple);

        gsap.set(ripple, {
            x: event.clientX,
            y: event.clientY,
            xPercent: -50,
            yPercent: -50,
            scale: 0.2,
            opacity: 0.75,
        });

        gsap.timeline({
            onComplete: () => ripple.remove(),
        })
            .to(ripple, {
                scale: 2.4,
                opacity: 0,
                duration: 0.55,
                ease: "power3.out",
            })
            .to(
                cursorDot,
                {
                    scale: 1.9,
                    duration: 0.12,
                    ease: "power2.out",
                    yoyo: true,
                    repeat: 1,
                },
                0,
            )
            .to(
                cursor,
                {
                    scale: "+=0.18",
                    duration: 0.12,
                    ease: "power2.out",
                    yoyo: true,
                    repeat: 1,
                },
                0,
            );
    });
});
