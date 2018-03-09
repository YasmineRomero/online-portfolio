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