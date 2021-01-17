document.addEventListener("DOMContentLoaded", function() {
    currentSlide(1);//activating the slider by showing first img
});

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

function closeNavbar(){
    var openElements = document.getElementsByClassName("js-navbar--toggle");
    for (var i=0; i < openElements.length; i++){
        console.log(openElements[i]);
        openElements[i].style.display = "none";
    }
}

function openNavbar(){
    var openElements = document.getElementsByClassName("js-navbar--toggle");
    for (var i=0; i < openElements.length; i++){
        console.log(openElements[i]);
        openElements[i].style.display = "flex";
    }
}
