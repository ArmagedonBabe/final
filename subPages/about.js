var lastScrollTop = 0;
navbar = document.getElementById("navbar");
window.addEventListener("scroll", function(){
  var scrollTop = window.pageXOffset || document
  .documentElement.scrollTop;
  if(scrollTop > lastScrollTop){
    navbar.style.top = "-80px";
  }else{
    navbar.style.top = "0";
  }
  lastScrollTop = scrollTop;
})

document.querySelectorAll('.mainPage img').forEach(image =>{
image.onclick = () =>{
  document.querySelector('.popup-image').style.display = 'block';
  document.querySelector('.popup-image img').src = image.getAttribute('src');
}

});
document.querySelector('.popup-image span').onclick = () =>{
  document.querySelector('.popup-image').style.display = 'none';
}
