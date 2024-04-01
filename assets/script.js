
document.addEventListener("DOMContentLoaded", function () {
    // Aguarda até que o DOM esteja completamente carregado

    // Obtém o botão de cadastro e a lista de cadastros pelo ID
    var btnMenu = document.querySelector(".btn-menu");
    var menuMobile = document.querySelector(".menu-mobile");

    // Adiciona um ouvinte de eventos para o clique do botão de cadastro
    
    btnMenu.addEventListener("click", function () {

        if (menuMobile.style.display == 'none'|| menuMobile.style.display === '') {
            menuMobile.style.display = 'flex';
        } else {
            menuMobile.style.display = 'none';
        }
    });
});