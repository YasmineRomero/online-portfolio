// For Dropdown Navigation \\

var c = false;

function showPortfolio() {
	var b = document.getElementById('hide-portfolio');
    if (c) {
        b.style.display = "none";
        c = false;
    } else {
        b.style.display = "block";
        c = true;
    }
}

// Form Validation \\

function validatePhone() {

	var ph = document.forms[0].phoneNumber.value;
	
	if (ph.length < 10) {
		alert("Please put in your full phone number.");
	}
    
    else if (ph.length > 10) {
        alert("Please put in a valid phone number.");
    }
}

// Slideshow - Resume Sections \\

var slideNumber = 1;

function resumeVariableAdd(n) {
    resumeDisplaySlide(slideNumber += n);
}

 function currentSlide(n) {
    resumeDisplaySlide(slideNumber = n);
}

function resumeDisplaySlide(n) {
    var i;
    var x = document.getElementsByClassName("resume-section");
    
    if (n > x.length) {
        slideNumber = 1;
    }    
    if (n < 1) {
        slideNumber = x.length;
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideNumber-1].style.display = "block";
}

// Slideshow - Letters of Reccomendation \\

var lettersSlideNumber = 1;

function letterVariableAdd(a) {
    letterDisplaySlide(lettersSlideNumber += a);
}

 function letterCurrentSlide(a) {
    letterDisplaySlide(lettersSlideNumber = a);
}

function letterDisplaySlide(a) {
    var i;
    var x = document.getElementsByClassName("letters");
    
    if (a > x.length) {
        lettersSlideNumber = 1;
    }    
    if (a < 1) {
        lettersSlideNumber = x.length;
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[lettersSlideNumber-1].style.display = "block";
}