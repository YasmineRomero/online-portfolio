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

// Form Validation \\

function validateEmail() {
    var email = document.forms[0][0].value;
    
    if (email == "") {
        alert("Please put in an e-mail.");
        return false;
    }
    else if (email.search("@") !== 0) {
        alert("Please put in a valid e-mail.");
        return false;
    }
}