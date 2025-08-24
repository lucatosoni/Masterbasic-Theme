// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event){


 //wait until images, links, fonts, stylesheets, and js is loaded
 window.addEventListener("load", function(e){

  //custom GSAP code goes here
  // This tween will rotate an element with a class of .my-element
   gsap.from('.slide-up', {
    opacity: 0,
    y: 100,
    duration: 1,
    ease: 'power2.out',
    stagger: 0.05
   })

  }, false);

});
