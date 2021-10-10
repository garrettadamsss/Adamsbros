//default setting
var slideIndex = 1;
showSlides(slideIndex);

//next and previous controls
function plusSlides(n){
    slideIndex += n
    showSlides(slideIndex);
}

// dots controls 
function currentSlide(n){
    slideIndex = n
    showSlides(slideIndex); 
}

//slideIndex is the actual number of the position, not the index
function showSlides(n){
    var slides = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("dot");
    if(n > slides.length){
        slideIndex = 1; 
    }
    if(n < 1){
        slideIndex = slides.length; 
    }
    for(let i = 0; i  < slides.length; i++){
        slides[i].style.display = "none";
    }
    for(let i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace(" active", ""); 
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active"; 
}
