document.addEventListener("scroll", (e) => {
  if (pageYOffset > 50) {
    document.querySelector(".topmenu__menu").style.cssText = "padding: 5px 0; ";
    document.querySelector(".logo-w").style.cssText =
      "max-height: 60px; padding; 5px 0;";
    document.querySelector(".logo-text").style.cssText =
      "max-height: 60px; padding; 5px 0;";
    document.getElementById("topmenu").classList.add("fixed_menu");
  } else {
    document.querySelector(".topmenu__menu").style.cssText = "";
    document.querySelector(".logo-w").style.cssText = "";
    document.querySelector(".logo-text").style.cssText = "";
    document.getElementById("topmenu").classList.remove("fixed_menu");
  }
});

let mob_menu = document.querySelector(".mobile_menu");
mob_menu.addEventListener("click", () => {
  document.querySelector(".topmenu__menu").style.cssText = "display: block;"; 
    let sc=1;
    menu_links=document.querySelectorAll(".topmenu__menu-list-link");
    for(i=0;i<menu_links.length;i++){     
        menu_links[i].style.cssText =`display: block;transition: .5s;animation: slide-right2 .5s ease-in-out .1${sc}s;`;
      sc+=2;
    }
  
  document.querySelector(".topmenu__menu").style.cssText =
    "display: block;transition: .5s;animation: slide-right .3s ease-in-out;max-height: 80vh; overflow-y: auto;";
  document.querySelector(".topmenu__menu").classList.add("mobile-size");
  document.querySelector(".close").classList.remove("none");
});

document.addEventListener("DOMContentLoaded", function (event) {
  window.onresize = function () {
    let width = document.documentElement.clientWidth;
    if (width > 768) {
      document.querySelector(".topmenu__menu").style.cssText = "padding:0;";
    } else {
      document.querySelector(".topmenu__menu").style.cssText = "";
    }
    if (width > 768) {
      document.querySelector(".topmenu__menu").style.cssText = "";
      document.querySelector(".topmenu__menu").classList.remove("mobile-size");
    }
  };
});
document.querySelector(".close").addEventListener("click", () => {
  document.querySelector(".topmenu__menu").style.cssText =
    "display: block;transition: .5s;animation: slide-left .3s ease-in-out;";

  setTimeout(() => {
    document.querySelector(".topmenu__menu").style.cssText = "";
    document.querySelector(".close").classList.add("none");
    document.querySelector(".topmenu__menu").classList.remove("mobile-size");
  },200);
});
