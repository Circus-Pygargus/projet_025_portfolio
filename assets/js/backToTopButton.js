/* ############### VARIABLES ############### */
// the button to scroll up
var backToTopButton = document.querySelector('#backToTopButton');
// the place to be scrolled to
// var placeToScrollTo = document.querySelector('#my-burger-btn-div');
var placeToScrollTo = document.querySelector('body');



/* ############### EVENTS ############### */

backToTopButton.addEventListener('click', function(e) {
    backToTopFunction();
});



/* ############### FUNCTIONS ############### */

// When the user scrolls down from the top of the page, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction () {
    // console.log('scrollTop = ' + document.body.scrollTop + ' ou ' + document.documentElement.scrollTop);
    //Here we can choose the nbr of px to scroll before button is shown    
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        // backToTopButton.style.right = ((window.outerWidth - window.innerWidth) / 2) + 30;
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the page
function backToTopFunction () {
    // document.body.scrollTop = "0";
    // document.documentElement.scrollTop = 0;
    placeToScrollTo.scrollIntoView({
        behavior: 'smooth'
    });
}

/* Pour coller le bouton dans la zone d'affichage plut�t que dans la bande fonc�e, 
on pourrait utiliser inner et outer, par exemple :
document.getElementById("backToTopButton").style.right = 
    ((window.outerWidth - window.innerWidth) / 2) + 30;

*/