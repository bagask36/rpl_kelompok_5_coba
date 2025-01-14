/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* Menu show */
if(navToggle){
   navToggle.addEventListener('click', () =>{
      navMenu.classList.add('show-menu')
   })
}

/* Menu hidden */
if(navClose){
   navClose.addEventListener('click', () =>{
      navMenu.classList.remove('show-menu')
   })
}

window.addEventListener('scroll', function() {
   const navbar = document.querySelector('.navbar');
   if (window.scrollY > 0) {
     navbar.classList.add('scrolled');
   } else {
     navbar.classList.remove('scrolled');
   }
 });
 