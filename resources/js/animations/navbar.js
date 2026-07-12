import { gsap } from "gsap";

document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("navbar");
    const button = document.getElementById("mobile-menu-button");
    const menu = document.getElementById("mobile-menu");
    const lines = button?.querySelectorAll(".mobile-menu-line") ?? [];

    if (navbar) {
        window.addEventListener("scroll", () => {
            const active = window.scrollY > 20;

            gsap.to(navbar, {
                y: active ? -6 : 0,
                duration: 0.3,
                ease: "power2.out",
                overwrite: "auto",
            });
        });
    }

    if (!button || !menu) {
        return;
    }

    let isOpen = false;

    gsap.set(menu, {
        autoAlpha: 0,
        y: -12,
        scale: 0.96,
    });

    gsap.set(lines, {
        transformOrigin: "50% 50%",
    });

    const animateButton = (open) => {
        if (lines.length !== 3) {
            return;
        }

        gsap.to(lines[0], {
            y: open ? 4 : 0,
            rotate: open ? 45 : 0,
            duration: 0.22,
            ease: "power2.out",
        });

        gsap.to(lines[1], {
            opacity: open ? 0 : 1,
            duration: 0.18,
            ease: "power2.out",
        });

        gsap.to(lines[2], {
            y: open ? -4 : 0,
            rotate: open ? -45 : 0,
            duration: 0.22,
            ease: "power2.out",
        });
    };

    const openMenu = () => {
        isOpen = true;
        button.setAttribute("aria-expanded", "true");
        button.setAttribute("aria-label", "Tutup menu navigasi");
        menu.setAttribute("aria-hidden", "false");
        menu.classList.remove("hidden", "pointer-events-none");

        animateButton(true);

        gsap.fromTo(
            menu,
            { autoAlpha: 0, y: -12, scale: 0.96 },
            {
                autoAlpha: 1,
                y: 0,
                scale: 1,
                duration: 0.28,
                ease: "power3.out",
                overwrite: "auto",
            },
        );
    };

    const closeMenu = () => {
        isOpen = false;
        button.setAttribute("aria-expanded", "false");
        button.setAttribute("aria-label", "Buka menu navigasi");
        menu.setAttribute("aria-hidden", "true");

        animateButton(false);

        gsap.to(menu, {
            autoAlpha: 0,
            y: -12,
            scale: 0.96,
            duration: 0.22,
            ease: "power2.out",
            overwrite: "auto",
            onComplete: () => menu.classList.add("hidden", "pointer-events-none"),
        });
    };

    button.addEventListener("click", () => {
        if (isOpen) {
            closeMenu();
            return;
        }

        openMenu();
    });

    menu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", closeMenu);
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && isOpen) {
            closeMenu();
        }
    });

    document.addEventListener("click", (event) => {
        if (isOpen && !navbar?.contains(event.target)) {
            closeMenu();
        }
    });

    window.addEventListener("resize", () => {
        if (isOpen && window.innerWidth >= 768) {
            closeMenu();
        }
    });
});
