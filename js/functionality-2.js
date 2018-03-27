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
    x[slideIndex-1].style.display = "block";
}