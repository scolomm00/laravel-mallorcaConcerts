export let burgerButton = () => {

    let menuButton = document.getElementById("menuButton");
    let menuList = document.getElementById("menuList");
    
    menuButton.addEventListener("click", () => {
    
        menuButton.classList.toggle('active');
        menuList.classList.toggle('up');
    
    });
}
