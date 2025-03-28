document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll(".star");
    const popup = document.querySelector(".feedback-popup");
    const submit = document.querySelector(".feedback-popup button");
    const feedbackText = document.querySelector(".feedback-popup textarea");
    const closePopup = () => popup.style.display = "none";

    stars.forEach((star, index) => {
        star.addEventListener("click", function () {
            stars.forEach((s, i) => {
                s.classList.toggle("selected", i <= index);
            });
            popup.style.display = "block";
        });
    });

    submit.addEventListener("click", function () {
        const feedbackLength = feedbackText.value.trim().split(/\s+/).length;
        alert(`Thank you for your ${feedbackLength} word(s) feedback`);
        closePopup();
    });

});

function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open")
    icon.classList.toggle("open")
}