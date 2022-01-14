var imgContainer = document.getElementById("full-img");
var fullImg = document.getElementById("fullImg");

document.addEventListener("click", function(event) {
    if(event.target == imgContainer){
        imgContainer.style.display = "none";
    }
    
});

function openFullImg(link){
    imgContainer.style.display = "flex";
    fullImg.src = link; 
}