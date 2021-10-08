//default setting
let slideIndex = 1;
showSlide(slideIndex);

//next and previous controls
function moveSlides(n){
    slideIndex += n
    showSlide(slideIndex);
}
// dots controls 
function currentSlide(n){
    slideIndex = n
    showSlide(slideIndex); 
}
function showSlides(index){S
    var slides = document.getElementsByClassName("slides");
    
    if(index < slides.length){

    }
}
