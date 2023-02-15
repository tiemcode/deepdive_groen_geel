const btn = document.querySelector(".mobile-menu-button");
const burger = document.querySelector(".burger")
const links = document.querySelectorAll(".link");
const menu = document.querySelector(".mobile-menu");
const nav = document.querySelector('.nav-bar');

btn.addEventListener("click", () => {
    menu.classList.toggle("h-0");
    menu.classList.toggle("h-auto");
    menu.classList.toggle("overflow-hidden");
    nav.classList.toggle("nav-bg");
    burger.classList.toggle("toggle");
});

links.forEach(link => {
    link.addEventListener("click", () => {
        menu.classList.toggle("h-0");
        menu.classList.toggle("h-auto");
        menu.classList.toggle("overflow-hidden");
        nav.classList.remove("nav-bg");
        burger.classList.toggle("toggle");
    })
});
