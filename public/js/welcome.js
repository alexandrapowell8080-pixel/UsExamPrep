document.addEventListener("DOMContentLoaded", function () {
    const wrapper = document.getElementById("dynamic-wrapper");
    const rotators = document.querySelectorAll(".dynamic-rotating-text");

    if (rotators.length > 0) {
        let activeIdx = 0;

        rotators[activeIdx].classList.add("is-in");
        wrapper.style.width = rotators[activeIdx].offsetWidth + "px";

        setInterval(() => {
            const current = rotators[activeIdx];
            const nextIdx = (activeIdx + 1) % rotators.length;
            const next = rotators[nextIdx];

            current.classList.remove("is-in");
            current.classList.add("is-out");

            next.classList.remove("is-out");
            void next.offsetWidth;
            next.classList.add("is-in");

            wrapper.style.width = next.offsetWidth + "px";

            activeIdx = nextIdx;
        }, 2000);
    }

    window.toggleFaq = function (button) {
        const faqItem = button.parentElement.parentElement;
        const panel = button.nextElementSibling;

        const isActive = faqItem.classList.contains("active");

        document.querySelectorAll(".faq-item").forEach((item) => {
            item.classList.remove("active");
            item.querySelector(".faq-panel").style.maxHeight = null;
        });

        if (!isActive) {
            faqItem.classList.add("active");
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    };
});
