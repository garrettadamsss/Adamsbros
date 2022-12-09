//expand photo function
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

//load more function
const loadMore = document.querySelector("#loadMore");
let currentIndex = 0; 
const imageArray = document.getElementsByClassName("pic");
loadMore.addEventListener('click', function(e) {
    
    for(var i = currentIndex; i < imageArray.length-1 && i < currentIndex + 6; i++){
        imageArray[i].style.display = "block";
    }
    currentIndex += 6; 
    if(currentIndex >= imageArray.length){
        loadMore.style.display = 'none';
    }
});

