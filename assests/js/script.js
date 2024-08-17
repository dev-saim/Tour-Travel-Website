let menu = document.querySelector('#menu-bars');
let user = document.querySelector('#user-btn');
let dropdown = document.querySelector('.sub-menu');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
  user.classList.remove('fa-times');
  dropdown.classList.remove('active');
};

user.onclick = () =>{
  user.classList.toggle('fa-times');
  dropdown.classList.toggle('active');
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
}

window.onscroll = () =>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
  user.classList.remove('fa-times');
  dropdown.classList.remove('active');
};

window.onresize = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    user.classList.remove('fa-times');
    dropdown.classList.remove('active');
};
var swiper = new Swiper(".home-slider", {
  loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});