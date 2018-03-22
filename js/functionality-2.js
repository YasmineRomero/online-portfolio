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

// Form Validation (work on l8r) \\

function validateEmail() {
    var email = document.forms[0][0].value;
}

// Slideshow \\

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

 function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    
    if (n > x.length) {
        slideIndex = 1;
    }    
    if (n < 1) {
        slideIndex = x.length;
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("slide-red", "");
    }
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += "slide-red";
}