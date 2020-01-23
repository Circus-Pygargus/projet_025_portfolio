//(function() {
 //   'use strict';

/* ############# BURGER & NAVBAR ################## */
var myBurger = document.querySelector('#my-burger-btn');
var myBurgerNavBar = document.querySelector('#my-burger-navbar');
var myBurgerNavbarItems = document.querySelectorAll('.my-burger-navbar-item');

/* ############### SCROLL ################ */
// var htmlSections = document.querySelectorAll('section');
// var sections = {};
// var colors = {};
// var i = 0;
// var bright = 'rgba(0, 0, 0, 1)';
// var dark = 'rgba(255, 255, 255, 1)';

/* ############# BURGER & NAVBAR ################## */
// click on burger
myBurger.addEventListener('click', function(){
    //this.classList.toggle('my-burger-is-active');
    if (!this.classList.contains('my-burger-is-active')) {
        if (this.classList.contains('my-burger-is-inactive')) {
            this.classList.remove('my-burger-is-inactive');
        }
        this.classList.add('my-burger-is-active');
        if (myBurgerNavBar.classList.contains('my-burger-navbar-is-inactive')) {
            myBurgerNavBar.classList.remove('my-burger-navbar-is-inactive');
        }
        myBurgerNavBar.classList.add('my-burger-navbar-is-active');
    }
    else {
        this.classList.remove('my-burger-is-active');
        this.classList.add('my-burger-is-inactive');
        myBurgerNavBar.classList.remove('my-burger-navbar-is-active');
        myBurgerNavBar.classList.add('my-burger-navbar-is-inactive');
    }
});
// click on a navbar link
for (let i = 0; i < myBurgerNavbarItems.length; i++) {
    myBurgerNavbarItems[i].addEventListener('click', function() {
        // launch animations to close burger
        myBurger.classList.remove('my-burger-is-active');
        myBurger.classList.add('my-burger-is-inactive');
        myBurgerNavBar.classList.remove('my-burger-navbar-is-active');
        myBurgerNavBar.classList.add('my-burger-navbar-is-inactive');
    });
}



/* ############### SCROLL ################ */
// Array.prototype.forEach(htmlSections, function(e) {
    // for (section of htmlSections) {
    //     sections[section.id] = section.offsetTop;
    //     if (sections[section.getAttribute('data-background-color') === 'bright']) {
    //         colors[section.id] = dark;
    //     }
    //     else if (sections[section.getAttribute('data-background-color') === 'dark']) {
    //         colors[section.id] = bright;
    //     }
    // };
//});

// window.onscroll = function() {
//     var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

//     for (i in sections) {
//         if (sections[i] <= scrollPosition) {
//             // ACTION
//             console.log('ici c\'est section No ' + i + '.');
//             myBurgerNavBar.style.backgroundColor = colors[i];
//             console.log(colors[i]);
//         }
//     }
// }


//})();

/* #################### SMOOTH SCROLL ###################### */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});