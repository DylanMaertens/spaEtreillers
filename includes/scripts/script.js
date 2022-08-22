console.log("Hello World !");

let menu1 = document.querySelector(".menu1");
let menu2 = document.querySelector(".menu2");
let menu3 = document.querySelector(".menu3");

menu1.addEventListener('click',()=>{
    menu1.classList.toggle("active");
    menu2.classList.remove('active');
    menu3.classList.remove('active');
})
menu2.addEventListener('click',()=>{
    menu2.classList.toggle("active");
    menu1.classList.remove("active");
    menu3.classList.remove("active");
})
menu3.addEventListener('click',()=>{
    menu3.classList.toggle("active");
    menu1.classList.remove("active");
    menu2.classList.remove("active");
})
