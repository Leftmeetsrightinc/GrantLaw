window.onload = function () {
    var showMenu = document.getElementsByClassName('open-menu');
    var navMenu = document.getElementsByClassName('mobile-menu');

    showMenu[0].addEventListener('click', function () {
        if (navMenu[0].classList.contains('open')) {
            navMenu[0].classList.remove('open');
        }
        else {
            navMenu[0].className += " open";
        }
    });
};
