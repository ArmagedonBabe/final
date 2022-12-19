function change1(){window.location.href = 'subPages/about.php';}
function change2(){window.location.href = 'subPages/history.php';}
function change3(){window.location.href = 'subPages/entertainment.php';}
function change4(){window.location.href = 'subPages/people.php';}
function change5(){window.location.href = 'subPages/nature.php';}
function change6(){window.location.href = 'subPages/essential.php';}

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

function mode() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}
