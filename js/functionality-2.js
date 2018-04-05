// For Dropdown Navigation \\

var c = false;

function showPortfolio() {
	var b = document.getElementById('hide-portfolio');
	var d = document.getElementsByClassName('portfolio');
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
		return false;
	}
	
	else if (isNaN(ph)) {
		alert("Please put in only numbers.");
		return false;
	}
}

// Slideshow - Portfolio Sections \\

var slideNumber = 1;
displaySlide(slideNumber);

function variableAdd(n) {
    displaySlide(slideNumber += n);
}

 function currentSlide(n) {
    displaySlide(slideNumber = n);
}

function displaySlide(n) {
    var i;
    var x = document.getElementsByClassName("letters");
    
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
displaySlide(lettersSlideNumber);

function lettersVariableAdd(n) {
    displaySlide(lettersSlideNumber += n);
}

 function letterCurrentSlide(n) {
    displaySlide(lettersSlideNumber = n);
}

function displaySlide(n) {
    var i;
    var x = document.getElementsByClassName("letters");
    
    if (n > x.length) {
        lettersSlideNumber = 1;
    }    
    if (n < 1) {
        lettersSlideNumber = x.length;
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[lettersSlideNumber-1].style.display = "block";
}