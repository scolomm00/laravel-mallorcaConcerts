export let filterBar = () => {

    let filterBar = document.getElementById("filter-bar");
    let filterButton = document.getElementById("filter-button");
    let down = document.getElementById("down");

    if(filterBar){
        filterButton.addEventListener("click", () => {

            filterBar.classList.toggle("active");
            down.classList.toggle("active");
    
        });
    }
}