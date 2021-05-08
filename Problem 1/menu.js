const drop_btn = document.querySelector(".menu-icon");
const menu_full = document.querySelector(".menu-items");
const hamburger_one = document.querySelector("#one");
const hamburger_two = document.querySelector("#two");

drop_btn.onclick = (() => {
    menu_full.classList.toggle("show");
    hamburger_one.classList.toggle("show");
    hamburger_two.classList.toggle("show");
})

window.onload = function(){
    document.querySelector(".loader").style.opacity = "0";
    document.querySelector(".loader").style.zIndex = "-999";
}

