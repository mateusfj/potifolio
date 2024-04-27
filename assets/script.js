

var btnMenu = document.querySelector(".btn-menu");
var menuMobile = document.querySelector(".menu-mobile");
let cabecalho = document.querySelector(".cabecalho")
let cabecalhoBorda = document.querySelector(".cabecalhoBorda")
let linkMobile = document.querySelectorAll(".menu-mobile a")


btnMenu.addEventListener("click", () => {

    if (menuMobile.style.display == 'none' || menuMobile.style.display === '') {
        menuMobile.style.display = 'flex';
    } else {
        menuMobile.style.display = 'none';
    }
});

window.addEventListener('scroll', () => {
    if (scrollY > 163) {
        cabecalho.style.borderBottom = '1px solid black';

    } else {
        cabecalho.style.borderBottom = 'none';
    }
})



linkMobile.forEach( link => {
    link.addEventListener("click", () => {
        menuMobile.style.display = 'none';
    })
})
