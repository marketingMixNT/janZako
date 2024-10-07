window.addEventListener("scroll", function () {
    const mobileBottomNav = document.querySelector("#mobile-bottom-nav");
    
    if (mobileBottomNav) { 
        if (window.scrollY >= 300) {
            mobileBottomNav.classList.add("bottom-0");
            mobileBottomNav.classList.remove("-bottom-20");
        } else {
            mobileBottomNav.classList.remove("bottom-0");
            mobileBottomNav.classList.add("-bottom-20");
        }
    }
});
