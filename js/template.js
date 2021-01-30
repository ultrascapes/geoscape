function OpenMenu() {
    const menu = document.querySelector('#site-navigation');
    const menuContent= document.querySelector('#site-navigation ul.menu');
    const menuToggle = document.querySelector('#sans-menu-toggle use');
    const menuHeight = menu.scrollHeight + 'px';
    if (menu.style.maxHeight){ 
        menu.style.maxHeight = null;
        menuContent.style.opacity = 0;
        menu.style.overflow = 'hidden';
        menuToggle.setAttribute("href", "#sans-menu-open");
    } else {
        menu.style.overflow = 'visible';
        menu.style.maxHeight = menuHeight;
        menuContent.style.opacity = 1;
        menuToggle.setAttribute("href", "#sans-menu-close");
    }
    
}

//element.addEventListener("click", function(){ alert("Hello World!"); });

document.querySelector("#learn-more").addEventListener("click", function(e) {

    this.style.display = "none";
});
