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

var r_btns = document.querySelectorAll(".rooster-btn");
var r_lists = document.querySelectorAll(".rooster-list");

var roosters = document.querySelectorAll(".rooster");

var r_1 = document.querySelector(".bar-rooster");
var r_2 = document.querySelector(".schoonmaak-rooster");
var r_3 = document.querySelector(".training-rooster");

var r_single = [r_1, r_2, r_3]

for (let i = 0; i < r_lists.length; i++) {
    r_lists[i].addEventListener("click", () => {
        r_lists.forEach(list => {
            list.classList.add("hidden");
        });
        roosters.forEach(rooster => {
            rooster.classList.add("hidden");
        });
        r_single[i].classList.remove("hidden");
    })
}

var r_list1 = document.querySelector(".rooster-l1");
var r_list2 = document.querySelector(".rooster-l2");
var r_list3 = document.querySelector(".rooster-l3");

var r_list_single = [r_list1, r_list2, r_list3]

for (let i = 0; i < r_btns.length; i++) {
    r_btns[i].addEventListener("click", () => {
        if (r_lists[i].classList.contains("hidden")) {
            r_lists.forEach(list => {
                list.classList.add("hidden");
            });
            r_list_single[i].classList.remove("hidden");
        } else {
            r_list_single[i].classList.add("hidden")
        }
    })

}

