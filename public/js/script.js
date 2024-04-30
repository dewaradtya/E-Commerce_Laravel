// responsive navbar
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const navbarContent = document.getElementById("navbarContent");
    const mobileMenu = document.getElementById("mobileMenu");

    mobileMenuBtn.addEventListener("click", function () {
        navbarContent.classList.toggle("hidden");
        mobileMenu.classList.toggle("hidden");
    });
});

document.getElementById("mobileMenuBtn").addEventListener("click", function () {
    var navbarContent = document.getElementById("navbarContent");
    navbarContent.classList.toggle("hidden");
});