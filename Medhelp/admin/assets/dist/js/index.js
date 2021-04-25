var sideBar = document.querySelector("#resp-bar");
var brandImg = document.querySelector(".brand-image");

sideBar.onclick = function() {
    if (window.innerWidth > 992) {
        brandImg.classList.toggle("brand-img-cropped");
    }
}

if (active) {
    active.classList.add("active");
}
if (activeParent) {
    activeParent.classList.add("active");
}

window.onresize = function() {
    if (window.innerWidth < 992) {
        brandImg.classList.remove("brand-img-cropped");
    }
}
