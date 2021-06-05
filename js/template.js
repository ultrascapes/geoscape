function OpenMenu() {
    const menu = document.querySelector('#site-navigation');
    const menuButton = document.querySelector('#sans-menu-toggle');
    menuButton.classList.toggle('menu-toggle-open');
    menu.classList.toggle('main-menu-open');
}

if (document.querySelector("#learn-more") !== null) {
    document.querySelector("#learn-more").addEventListener("click", function(e) {
        this.style.display = "none";
    });
}

function noHover(element) {
    element.classList.remove('sans-menu-no-js');
}

const menuNoScript = document.querySelectorAll('.sans-menu-no-js');
menuNoScript.forEach(noHover);


function openCloseSubMenu(button) {
    button.classList.toggle('child-menu-open');
    subMenuSelected = button.nextElementSibling;
    subMenuSelected.classList.toggle('sub-menu-open');
    function findSubMenusOpen(element) {
        if (element !== subMenuSelected) {
            element.classList.remove('sub-menu-open');
            element.previousElementSibling.classList.toggle('child-menu-open');
        }
        
    }  
    let subMenusOpen = document.querySelectorAll('.sub-menu-open');
    subMenusOpen.forEach(findSubMenusOpen);
}

function switchParentToButton(element) {
    element.outerHTML = `<button class="sans-menu-parent" data-link="${element.href}">${element.textContent}</button>`;
    let menuParentButton = document.querySelector('[data-link="' + element.href + '"]');
    menuParentButton.addEventListener("click", function() { 
        openCloseSubMenu(menuParentButton); 
    }, false);
};

const menuParentLinks = document.querySelectorAll('.menu-item-has-children > a');
menuParentLinks.forEach(switchParentToButton);

const mainMenuToggle = document.querySelector('#sans-menu-toggle');
mainMenuToggle.outerHTML = `<button id="sans-menu-toggle" onclick="OpenMenu();">Menu</button>`;
