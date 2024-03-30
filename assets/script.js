
document.addEventListener("DOMContentLoaded", function () {
    // Aguarda até que o DOM esteja completamente carregado

    // Obtém o botão de cadastro e a lista de cadastros pelo ID
    var btnMenu = document.querySelector(".btn-menu");
    var menuDesktop = document.querySelector(".menu-desktop");

    // Adiciona um ouvinte de eventos para o clique do botão de cadastro
    
    btnMenu.addEventListener("click", function () {

        if (menuDesktop.style.display == 'none'|| menuDesktop.style.display === '') {
            menuDesktop.style.display = 'block';
        } else {
            menuDesktop.style.display = 'none';
        }
    });
});