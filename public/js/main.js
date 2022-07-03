//-------------------------
// menu scroll
//-------------------------

window.addEventListener("scroll", function() {
    var header = document.querySelector("nav")
    header.classList.toggle("red",window.scrollY>0);

    
    var link = document.querySelectorAll('.nav-link');
    link.forEach((el) => {el.classList.toggle("whiteText",window.scrollY>0);});
    
    var logoP = document.querySelector('.logoR');
    logoP.classList.toggle("logoB",window.scrollY>0);



})


//-------------------------
// escritura titulo
//-------------------------


let app = document.getElementById('typewriter');

let typewriter = new Typewriter(app, {
    loop: true,
    delay: 75,
});

typewriter
    .pauseFor(2500)
    .typeString('Transporte para llegar')
    .pauseFor(200)
    .deleteChars(10)
    .start();


window.addEventListener("scroll", function (){
    var nav = document.querySelector("#nav")
    console.log(nav);
    nav.classList.toggle("sticky-top",window.scrollY > 0)
})
