const btnMobile =document.getElementById("btn-mobile");

function toggleMenu() {
    const ulResp =document.getElementById("ulResp");
    ulResp.classList.toggle("active");
}

btnMobile.addEventListener("click", toggleMenu);