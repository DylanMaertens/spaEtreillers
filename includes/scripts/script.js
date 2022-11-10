console.log("Hello World !");

let time = new Date();
window.addEventListener('DOMContentLoaded',()=>{
    console.log('loaded');
    
    let minute = time.getMinutes();
    let heure = time.getHours();
    let jour = time.getDay() + 6;
    let mois = time.getMonth() + 1;
    let annee = time.getFullYear();
    
    minute = (minute < 10) ? "0" + minute : minute;
    heure = (heure < 10) ? "0" + heure : heure;
    jour = (jour < 10) ? "0" + jour : jour;
    mois = (mois < 10) ? "0" + mois : mois;

    document.querySelector('#dateReservation').min = (annee + '-' + mois + '-' + jour + 'T' + heure + ':' + minute);
    document.querySelector('#dateReservation').value = (annee + '-' + mois + '-' + jour + 'T' + heure + ':' + minute);
})

let menu1 = document.querySelector("#menu1");
let menu2 = document.querySelector("#menu2");
let menu3 = document.querySelector("#menu3");
let contactBtn = document.querySelector('#contactBtn');
let fermerFormBtn = document.querySelector('#fermerFormBtn');
let contactForm = document.querySelector('#contactForm');
let bgImage = document.getElementById('image');


menu1.addEventListener('click',()=>{
    console.log("menu1");
    if(menu1.classList.value == 'menu'){
        bgImage.style.backgroundImage = "url(includes/images/image1.png)";
        menu1.classList.add("active");
        menu2.classList.remove('active');
        menu3.classList.remove('active');
    }else{
        bgImage.style.backgroundImage = "url(includes/images/imageDefaut.jpg)";
        menu1.classList.remove("active");
    }
})

menu2.addEventListener('click',()=>{
    if(menu2.classList.value == 'menu'){
        bgImage.style.backgroundImage = "url(includes/images/image2.png)";
        menu1.classList.remove("active");
        menu2.classList.add("active");
        menu3.classList.remove("active");
    }else{
        bgImage.style.backgroundImage = "url(includes/images/imageDefaut.jpg)";
        menu2.classList.remove("active");
    }
})

menu3.addEventListener('click',()=>{
    if(menu3.classList.value == 'menu'){
        bgImage.style.backgroundImage = "url(includes/images/image3.png)";
        menu1.classList.remove("active");
        menu2.classList.remove("active");
        menu3.classList.add("active");
    }else{
        bgImage.style.backgroundImage = "url(includes/images/imageDefaut.jpg)";
        menu3.classList.remove("active");
    }
})

contactBtn.addEventListener('click',()=>{
    console.log('Contact');
    if(contactForm.style.display == 'block'){
        contactForm.style.display = "none";
    }else{
        contactForm.style.display = "block";
    }
})

fermerFormBtn.addEventListener('click',()=>{
    contactForm.style.display = "none";
})

let reserve1 = document.querySelector('#reservation1');
let reserve2 = document.querySelector('#reservation2');
let reserve3 = document.querySelector('#reservation3');
let prestationSelectionner = document.querySelector('#prestation');

reserve1.addEventListener('click',()=>{
    contactForm.style.display = "block";
    prestationSelectionner.value = "prestation 1"
})

reserve2.addEventListener('click',()=>{
    contactForm.style.display = "block";
    prestationSelectionner.value = "prestation 2"
})

reserve3.addEventListener('click',()=>{
    contactForm.style.display = "block";
    prestationSelectionner.value = "prestation 3"
})