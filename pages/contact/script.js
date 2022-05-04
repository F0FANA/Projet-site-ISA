//navbar
/*let lastScrollTop = 0;
navbar = document.getElementById('navbar');

window.addEventListener('scroll', function(){
    const scrollTop = window.pageTOffset ||
    this.document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop){
        navbar.style.top="-50px";
    }else{
        navbar.style.top="0";
    }
    lastScrollTop = scrollTop; 
}); */

//TYPED

var typed = new Typed('.typed', {
    strings: ['Bonjour, je m appelle Clément Szewczyk. Je suis actuellement en classe préparatoire ADIMAKER, intégrée à l ISEN. C est une classe préparatoire orienté vers l apprentissage par projet et par soi-même. J ai effectué un bac générale spécialitées Maths, Sciences de l ingénieur. J ai obtenue la mention bien. Je suis passioné par l informatique. '],
    typeSpeed: 20,
    backSpeed: 0,
    loop: false
  });

//AOS

AOS.init();
