const btnMobile =document.getElementById("btn-mobile");

function toggleMenu() {
    const menuResp =document.getElementById("menuResp");
    ulResp.classList.toggle("active");
}

btnMobile.addEventListener("click", toggleMenu);