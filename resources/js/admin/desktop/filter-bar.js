export let filterBar = () => {

    let filterBar = document.getElementById("filter-bar");
    let filterButton = document.getElementById("filter-button");

    if(filterBar){
        filterButton.addEventListener("click", () => {

            filterBar.classList.toggle("active");
    
        });
    }
}