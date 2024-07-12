document.addEventListener('DOMContentLoaded', function() {
    var openMenu = document.getElementById('open-menu');
    var mainMenu = document.getElementById('main-menu');
    var closeMenuButton = mainMenu.querySelector('.close-menu-button');
    var menuIcon = document.getElementById('menu-icon');
    var header = document.getElementById('main-header');
    var siteLogo = document.getElementById('site-logo');
    var is404Page = document.body.classList.contains('error-404');

    var menuOpenSVG = esgiIcons.menuOpen;
    var menuCloseSVG = esgiIcons.menuClose;
    var logoSVG = esgiIcons.logo;
    var originalLogo = esgiIcons.originalLogo;

    function toggleMenu() {
        console.log('toggleMenu called');
        if (mainMenu.classList.contains('active')) {
            mainMenu.classList.remove('active');
            console.log('Menu hidden');
            menuIcon.innerHTML = menuOpenSVG;
            if (!is404Page) {
                header.style.backgroundColor = '';
                siteLogo.innerHTML = originalLogo;
            }
        } else {
            mainMenu.classList.add('active');
            console.log('Menu shown');
            menuIcon.innerHTML = menuCloseSVG;
            header.style.backgroundColor = 'rgba(5, 10, 58, 1)';
            if (!is404Page) {
                siteLogo.innerHTML = logoSVG;
            }
        }
    }

    openMenu.onclick = toggleMenu;
    if (closeMenuButton) {
        closeMenuButton.onclick = toggleMenu;
    }

    var menuLinks = mainMenu.querySelectorAll('a');
    menuLinks.forEach(function(link) {
        link.addEventListener('click', function () {
            if (mainMenu.classList.contains('active')) {
                toggleMenu();
            }
        });
    });
});
