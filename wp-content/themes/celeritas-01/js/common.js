function search(){
    const list = document.querySelector(".nav-list");
    const searchField = document.querySelector(".search-field");
    const searchInput = document.querySelector(".search-field input");
    searchField.classList.toggle('active');
    list.classList.toggle("active")
    searchInput.focus()

    // Close search when clicking outside
    document.addEventListener("click", function closeSearch(event) {
        if (!searchField.contains(event.target) && !event.target.closest(".search-icon")) {
            searchField.classList.remove("active");
            list.classList.remove("active");
            document.removeEventListener("click", closeSearch); // Remove event listener after execution
        }
    });
}


function sideBarToggle(element){
    element.classList.toggle('active');
   const navList = document.querySelector('nav-list');
   navList.classList.toggle('active')
}