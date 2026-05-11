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
            if (item !== faqItem) {
                item.classList.remove("active");
                const otherPanel = item.querySelector(".faq-panel");
                if (otherPanel) {
                    otherPanel.style.maxHeight = null;
                }
            }
        });

        if (isActive) {
            faqItem.classList.remove("active");
            panel.style.maxHeight = null;
        } else {
            faqItem.classList.add("active");
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    };

    const searchInput = document.getElementById("cert-search");

    if (searchInput) {
        window.filterCategory = function (category, element) {
            document.querySelectorAll(".filter-btn").forEach((btn) => {
                btn.classList.remove("active");
            });
            element.classList.add("active");

            const cards = document.querySelectorAll(".cert-card");
            const searchVal = searchInput.value.toLowerCase().trim();

            cards.forEach((card) => {
                const matchesCategory =
                    category === "all" ||
                    card.getAttribute("data-category") === category;
                const matchesSearch =
                    !searchVal ||
                    card.getAttribute("data-tags").includes(searchVal) ||
                    card.innerText.toLowerCase().includes(searchVal);

                card.style.display =
                    matchesCategory && matchesSearch ? "flex" : "none";
            });
        };

        searchInput.addEventListener("input", function (e) {
            const searchVal = e.target.value.toLowerCase().trim();

            if (searchVal !== "") {
                const allBtn = document.querySelector(
                    '.filter-btn[onclick*="all"]',
                );
                if (allBtn && !allBtn.classList.contains("active")) {
                    document
                        .querySelectorAll(".filter-btn")
                        .forEach((btn) => btn.classList.remove("active"));
                    allBtn.classList.add("active");
                }
            }

            const activeFilterButton =
                document.querySelector(".filter-btn.active");
            const currentCategory = activeFilterButton
                ? activeFilterButton.textContent.toLowerCase()
                : "all";

            let categoryKey = "all";
            if (currentCategory.includes("nursing")) categoryKey = "nursing";
            else if (currentCategory.includes("assistant"))
                categoryKey = "assistant";
            else if (currentCategory.includes("pharmacy"))
                categoryKey = "pharmacy";

            const cards = document.querySelectorAll(".cert-card");
            cards.forEach((card) => {
                const matchesCategory =
                    categoryKey === "all" ||
                    card.getAttribute("data-category") === categoryKey;
                const matchesSearch =
                    !searchVal ||
                    card.getAttribute("data-tags").includes(searchVal) ||
                    card.innerText.toLowerCase().includes(searchVal);

                card.style.display =
                    matchesCategory && matchesSearch ? "flex" : "none";
            });
        });
    }
});
