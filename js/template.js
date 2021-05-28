function OpenMenu() {
    const menu = document.querySelector('#site-navigation');
    menu.classList.toggle('main-menu-open');
}

document.querySelector("#learn-more").addEventListener("click", function(e) {
    this.style.display = "none";
});



function noHover(element) {
    element.classList.remove('sans-menu-no-js');
}

const menuNoScript = document.querySelectorAll('.sans-menu-no-js');
menuNoScript.forEach(noHover);


function openCloseSubMenu(button) {
    subMenuSelected = button.nextElementSibling;
    subMenuSelected.classList.toggle('sub-menu-open');
    function findSubMenusOpen(element) {
        if (element !== subMenuSelected) {
            element.classList.remove('sub-menu-open');
            console.log(element.innerText);
        }
        
    }  
    let subMenusOpen = document.querySelectorAll('.sub-menu-open');
    subMenusOpen.forEach(findSubMenusOpen);
}

function switchParentToButton(element) {
    element.outerHTML = `<button data-link="${element.href}">${element.textContent}</button>`;
    let menuParentButton = document.querySelector('[data-link="' + element.href + '"]');
    menuParentButton.addEventListener("click", function() { 
        openCloseSubMenu(menuParentButton); 
    }, false);
};

const menuParentLinks = document.querySelectorAll('.menu-item-has-children > a');
menuParentLinks.forEach(switchParentToButton);

const mainMenuToggle = document.querySelector('#sans-menu-toggle');
mainMenuToggle.outerHTML = `<button id="sans-menu-toggle" onclick="OpenMenu();">Menu</button>`;