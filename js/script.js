let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

var swiper = new Swiper(".home-slide", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".reviews-slide", {
  loop: true,
  spaceBetween:20,
  autoHeight:true,
  grabCursor:true,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 1,
    },
  },
});

let loadMoreBtn= document.querySelector('.packages .load-more .btn');
let currentitem= 3;

loadMoreBtn.onclick = () => {
  let boxes = [...document.querySelectorAll('.packages .box-container .box')];
  for (var i = currentitem; i < currentitem + 3; i++){
    boxes[i].style.display ='inline-block';
  };
  currentitem += 3;
  if(currentitem >= boxes.length){
    loadMoreBtn.style.display = 'none';
  }
}