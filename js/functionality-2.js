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

// Slideshow \\

var slideNumber = 1;
displaySlide(slideNumber);

function variableAdd(n) {
    displaySlide(slideNumber += n);
}
 function currentDiv(n) {
    displaySlide(slideNumber = n);
}

function displaySlide(n) {
    var i;
    var x = document.getElementsByClassName("resumes");
    
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