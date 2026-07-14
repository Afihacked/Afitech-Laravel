import { gsap } from "gsap";

const WA_NUMBER = "6285183250090";
const WA_NUMBER_RAW = "085183250090";

const createWhatsAppUrl = (message) => {
    const encodedMessage = encodeURIComponent(
        message.trim() || "Halo, saya ingin bertanya.",
    );
    return `https://wa.me/${WA_NUMBER}?text=${encodedMessage}`;
};

const getWhatsAppUrl = (message) => {
    if (/^\+?62/.test(WA_NUMBER_RAW) || /^0/.test(WA_NUMBER_RAW)) {
        return createWhatsAppUrl(message);
    }

    return createWhatsAppUrl(message);
};

const closeWidget = (overlay, modal) => {
    overlay.classList.add("hidden");
    overlay.setAttribute("aria-hidden", "true");
    modal.classList.remove("animate-slide-up");
};

const openWidget = (overlay, modal, input) => {
    overlay.classList.remove("hidden");
    overlay.setAttribute("aria-hidden", "false");
    modal.classList.add("animate-slide-up");
    input.focus();
};

const initWhatsAppWidget = () => {
    const trigger = document.querySelector("[data-whatsapp-open]");
    const overlay = document.querySelector("[data-whatsapp-overlay]");
    const close = document.querySelector("[data-whatsapp-close]");
    const send = document.querySelector("[data-whatsapp-send]");
    const input = document.querySelector("[data-whatsapp-input]");

    if (!trigger || !overlay || !close || !send || !input) {
        return;
    }

    gsap.to(trigger, {
        opacity: 1,
        y: 0,
        duration: 0.7,
        ease: "power3.out",
        delay: 0.2,
    });

    trigger.addEventListener("click", () =>
        openWidget(
            overlay,
            overlay.querySelector("[data-whatsapp-modal]"),
            input,
        ),
    );
    close.addEventListener("click", () =>
        closeWidget(overlay, overlay.querySelector("[data-whatsapp-modal]")),
    );

    overlay.addEventListener("click", (event) => {
        if (event.target === overlay) {
            closeWidget(
                overlay,
                overlay.querySelector("[data-whatsapp-modal]"),
            );
        }
    });

    send.addEventListener("click", () => {
        const message = input.value.trim();
        window.location.href = getWhatsAppUrl(message);
    });

    input.addEventListener("keydown", (event) => {
        if (event.key === "Enter" && !event.shiftKey) {
            event.preventDefault();
            send.click();
        }
    });
};

export default initWhatsAppWidget;
