//default setting
var slideIndex = 1;
showSlides(slideIndex);

setInterval(increaseIndex, 8000);
function increaseIndex(){
    slideIndex ++; 
    showSlides(slideIndex);
}

//next and previous controls
function plusSlides(n){
    slideIndex += n
    showSlides(slideIndex);
}

//slideIndex is the actual number of the position, not the index
function showSlides(n){
    var slides = document.getElementsByClassName("slides");

    if(n > slides.length){
        slideIndex = 1; 
    }
    if(n < 1){
        slideIndex = slides.length; 
    }
    for(let i = 0; i  < slides.length; i++){
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}
