import { gsap } from "gsap";

document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector("[data-theme-toggle]");

    if (!toggle) {
        return;
    }

    const storageKey = "afitech-theme";
    const lightIcon = toggle.querySelector('[data-theme-icon="light"]');
    const darkIcon = toggle.querySelector('[data-theme-icon="dark"]');

    const getTheme = () =>
        document.documentElement.classList.contains("dark") ? "dark" : "light";

    const setTheme = (theme, persist = true) => {
        const isDark = theme === "dark";

        document.documentElement.classList.toggle("dark", isDark);
        document.documentElement.dataset.theme = theme;

        lightIcon?.classList.toggle("hidden", isDark);
        darkIcon?.classList.toggle("hidden", !isDark);

        toggle.setAttribute(
            "aria-label",
            isDark ? "Aktifkan light mode" : "Aktifkan dark mode",
        );

        if (persist) {
            localStorage.setItem(storageKey, theme);
        }
    };

    setTheme(getTheme(), false);

    toggle.addEventListener("click", () => {
        const nextTheme = getTheme() === "dark" ? "light" : "dark";

        setTheme(nextTheme);

        gsap.fromTo(
            toggle,
            { rotate: -8, scale: 0.92 },
            { rotate: 0, scale: 1, duration: 0.28, ease: "back.out(2)" },
        );
    });
});
