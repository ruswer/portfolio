// My projects kategoriylar buyicha ajratish
document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".filter-btn");
    const projects = document.querySelectorAll(".project");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const activeButton = document.querySelector(".filter-btn.active");
            if (activeButton) {
                activeButton.classList.remove("active", "bg-blue-500", "text-white");
                activeButton.classList.add("bg-gray-200", "text-gray-700");
            }

            this.classList.add("active", "bg-blue-500", "text-white");
            this.classList.remove("bg-gray-200", "text-gray-700");

            const filter = this.getAttribute("data-filter");

            projects.forEach(project => {
                project.style.display = (filter === "all" || project.getAttribute("data-category") === filter) ? "block" : "none";
            });
        });
    });
});

// Scroll to top
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
};

scrollToTopBtn.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
};

// Hamburger menyuni ochish/yashirish
const hamburgerButton = document.getElementById('hamburger-button');
const mobileMenu = document.getElementById('mobile-menu');

hamburgerButton.addEventListener('click', () => {
    const isExpanded = hamburgerButton.getAttribute("aria-expanded") === "true";
    hamburgerButton.setAttribute("aria-expanded", !isExpanded);
    mobileMenu.classList.toggle('hidden');
});

document.addEventListener("click", (event) => {
    if (!mobileMenu.contains(event.target) && !hamburgerButton.contains(event.target)) {
        mobileMenu.classList.add("hidden");
    }
});

