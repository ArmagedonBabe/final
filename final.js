function change1(){window.location.href = 'subPages/about.html';}
function change2(){window.location.href = 'subPages/history.html';}
function change3(){window.location.href = 'subPages/entertainment.html';}
function change4(){window.location.href = 'subPages/people.html';}
function change5(){window.location.href = 'subPages/nature.html';}
function change6(){window.location.href = 'subPages/essential.html';}

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

