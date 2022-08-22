console.log("Hello World !");

let menu1 = document.querySelector(".menu1");
let menu2 = document.querySelector(".menu2");
let menu3 = document.querySelector(".menu3");

let bgImage = document.getElementById('image');

menu1.addEventListener('click',()=>{
    bgImage.style.backgroundImage = "url(includes/images/image1.png)"
    menu1.classList.toggle("active");
    menu2.classList.remove('active');
    menu3.classList.remove('active');
})
menu2.addEventListener('click',()=>{
    bgImage.style.backgroundImage = "url(includes/images/image2.png)"
    menu2.classList.toggle("active");
    menu1.classList.remove("active");
    menu3.classList.remove("active");
})
menu3.addEventListener('click',()=>{
    bgImage.style.backgroundImage = "url(includes/images/image3.png)"
    menu3.classList.toggle("active");
    menu1.classList.remove("active");
    menu2.classList.remove("active");
})

