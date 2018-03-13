// For Dropdown Navigation \\

var c = false;

function showPortfolio() {
    if (c) {
        document.getElementById('hide-portfolio').style.display = "none";
        c = false;
    } else {
        document.getElementById('hide-portfolio').style.display = "block";
        c = true;
    }

}


// Index: Scroll to Introduction \\

var reveal = document.getElementById("index-parallax");
reveal.scrollIntoView();


// Form Validation \\


// Slideshow \\



function slideShow(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slides[slideIndex-1].style.display = "block"; 
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function changeSlide(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}




// > "plusSlide(1)"
// < "plusSlide(-1)"