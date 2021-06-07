document.addEventListener('DOMContentLoaded', function(){
    eventListeners();

});

function eventListeners() {
    const menuMovil = document.querySelector('.menu-movil');

    menuMovil.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

}