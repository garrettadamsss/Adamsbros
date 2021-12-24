var menuList = document.getElementById("navbar");

function toggleMenu(){
    if(menuList.style.display == ""){
        menuList.style.display = "block";
    } else {
        menuList.style.display = "";
    }
}
