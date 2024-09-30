const hamburgerBtn = document.querySelector(".hamburger");
const menu = document.querySelector("#menu");
const navbar = document.querySelector("#navbar");
const navLinks = document.querySelector("#navlinks");
const body = document.querySelector("body");

const hamburgerHandler = () => {
    hamburgerBtn.classList.toggle("is-active");
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
    body.classList.toggle("overflow-hidden");
    navbar.classList.add("nav-color");
    navbar.classList.remove("nav-color--transparent");
};

const navbarOnScroll = () => {
    let currentScrollPosition = window.scrollY;

    if (currentScrollPosition >= 50) {
        navbar.classList.add("nav-color");
        navbar.classList.remove("nav-color--transparent");
    } else {
        navbar.classList.remove("nav-color");
        navbar.classList.add("nav-color--transparent");
    }
};

let lastScrollPosition = window.scrollY;

const checkScrollPosition = () => {
    let currentScrollPosition = window.scrollY;


    if (currentScrollPosition !== lastScrollPosition) {
        navbarOnScroll();
        lastScrollPosition = currentScrollPosition;
    }

    
    requestAnimationFrame(checkScrollPosition);
};

// Start the scroll position check loop
requestAnimationFrame(checkScrollPosition);
hamburgerBtn.addEventListener("click", hamburgerHandler);
