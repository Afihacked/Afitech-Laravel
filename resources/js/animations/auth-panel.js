document.addEventListener("DOMContentLoaded", () => {
    const shell = document.querySelector("[data-auth-shell]");

    if (!shell) {
        return;
    }

    const formPanels = {
        login: shell.querySelector('[data-auth-panel="login-form"]'),
        register: shell.querySelector('[data-auth-panel="register-form"]'),
    };

    const welcomePanels = {
        login: shell.querySelector('[data-auth-welcome="login"]'),
        register: shell.querySelector('[data-auth-welcome="register"]'),
    };

    const firstField = {
        login: formPanels.login?.querySelector("input:not([type='hidden'])"),
        register: formPanels.register?.querySelector("input:not([type='hidden'])"),
    };

    const disableForm = (panel, disabled) => {
        panel
            ?.querySelectorAll("a, input, button, select, textarea")
            .forEach((control) => {
                if ("disabled" in control) {
                    control.disabled = disabled;
                }

                if (disabled) {
                    control.setAttribute("tabindex", "-1");
                    control.setAttribute("aria-disabled", "true");
                    return;
                }

                control.removeAttribute("tabindex");
                control.removeAttribute("aria-disabled");
            });
    };

    const setWelcomeState = (mode) => {
        Object.entries(welcomePanels).forEach(([key, panel]) => {
            const isActive = key === mode;

            panel?.setAttribute("aria-hidden", String(!isActive));
            panel?.querySelectorAll("button").forEach((button) => {
                button.disabled = !isActive;

                if (isActive) {
                    button.removeAttribute("tabindex");
                    return;
                }

                button.setAttribute("tabindex", "-1");
            });
        });
    };

    const replaceModeInUrl = (mode) => {
        if (window.location.pathname !== "/auth") {
            return;
        }

        const url = new URL(window.location.href);
        url.searchParams.set("mode", mode);
        window.history.replaceState({}, "", `${url.pathname}${url.search}${url.hash}`);
    };

    const setMode = (mode, options = {}) => {
        const nextMode = mode === "register" ? "register" : "login";
        const isRegister = nextMode === "register";

        shell.dataset.mode = nextMode;
        shell.classList.toggle("is-register", isRegister);

        Object.entries(formPanels).forEach(([key, panel]) => {
            const isActive = key === nextMode;

            panel?.setAttribute("aria-hidden", String(!isActive));
            disableForm(panel, !isActive);
        });

        setWelcomeState(nextMode);

        if (options.updateUrl) {
            replaceModeInUrl(nextMode);
        }

        if (options.focus) {
            window.setTimeout(() => {
                firstField[nextMode]?.focus({ preventScroll: true });
            }, 360);
        }
    };

    shell.querySelectorAll("[data-auth-target]").forEach((button) => {
        button.addEventListener("click", () => {
            setMode(button.dataset.authTarget, {
                focus: true,
                updateUrl: true,
            });
        });
    });

    setMode(shell.dataset.mode);
});
