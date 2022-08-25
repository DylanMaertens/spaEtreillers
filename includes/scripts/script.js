console.log("Hello World !");

let menu1 = document.querySelector(".menu1");
let menu2 = document.querySelector(".menu2");
let menu3 = document.querySelector(".menu3");
let contactBtn = document.querySelector('#contactBtn');
let fermerFormBtn = document.querySelector('#fermerFormBtn');
let contactForm = document.querySelector('#contactForm');
let bgImage = document.getElementById('image');

menu1.addEventListener('click',()=>{
    if(menu1.classList.value == 'menu1'){
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
    if(menu2.classList.value == 'menu2'){
        bgImage.style.backgroundImage = "url(includes/images/image2.png)";
        menu2.classList.add("active");
        menu1.classList.remove("active");
        menu3.classList.remove("active");
    }else{
        bgImage.style.backgroundImage = "url(includes/images/imageDefaut.jpg)";
        menu2.classList.remove("active");
    }
})

menu3.addEventListener('click',()=>{
    if(menu3.classList.value == 'menu3'){
        bgImage.style.backgroundImage = "url(includes/images/image3.png)";
        menu2.classList.remove("active");
        menu1.classList.remove("active");
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