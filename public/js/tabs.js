/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/scripts/tabs.js ***!
  \***********************************/
//tabs1
tab1 = document.querySelectorAll(".tabs1");
tab1_tabs = document.querySelectorAll(".services__description");
tab1_active = "active-tab";

for (i = 0; i < tab1.length; i++) {
  tab1[i].addEventListener("click", function (e) {
    id0 = e.target.id;
    id = parseFloat(id0.substr(1, 1)) - 1;
    tabs_1(tab1, tab1_tabs, id, tab1.length, tab1_active);
  });
} //tabs2


arr_work = document.querySelectorAll(".work-circle");
work_active = "active-block";
tab2 = document.querySelectorAll(".circle-gray");
tab2_tabs = document.querySelectorAll(".work-tab");
tab2_active = "active";

for (q = 0; q < tab2.length; q++) {
  tab2[q].addEventListener("click", function (e) {
    id1 = e.target.id;
    id2 = parseFloat(id1.substr(1, 1)) - 1;
    tabs_1(tab2, tab2_tabs, id2, tab2.length, tab2_active, arr_work, work_active);
    console.log(e.target.id);
  });
} // function


function tabs_1(arr1, arr2, num, amount, active, dop_arr, dop_active) {
  for (i = 0; i < amount; i++) {
    if (i != num) {
      if (dop_arr && dop_active) {
        dop_arr[i].classList.remove(dop_active);
      }

      arr1[i].classList.remove(active);
      arr2[i].classList.remove("none");
      arr2[i].classList.add("none");
    } else {
      if (dop_arr && dop_active) {
        dop_arr[i].classList.add(dop_active);
      }

      arr1[i].classList.remove(active);
      arr1[i].classList.add(active);
      arr2[i].classList.remove("none");
    }
  }
} // tabs3


all = document.querySelectorAll(".project-description");
shop = document.querySelectorAll(".shop");
landing = document.querySelectorAll(".landing");
multipage = document.querySelectorAll(".multipage");
tab3 = document.querySelectorAll(".project-tabs-block");
tab3_tabs = document.querySelectorAll(".project-description");
tab3_active = "active-project-block";

for (i = 0; i < tab3.length; i++) {
  tab3[i].addEventListener("click", function (e) {
    id0 = e.target.id;

    switch (id0) {
      case "all":
        id = 0;
        break;

      case "shop":
        id = 1;
        break;

      case "landig":
        id = 2;
        break;

      case "multipage":
        id = 3;
        break;

      default:
        id = 0;
        break;
    }

    tabs_projects(tab3, id, tab3.length, tab3_active);
  });
}

function tabs_projects(arr1, num, amount, active) {
  for (i = 0; i < amount; i++) {
    if (i != num) {
      arr1[i].classList.remove(active);
    } else {
      arr1[i].classList.remove(active);
      arr1[i].classList.add(active);
    }
  }

  if (num == 0) {
    for (z = 0; z < all.length; z++) {
      all[z].classList.remove("none");
    }
  }

  if (num == 1) {
    for (z = 0; z < all.length; z++) {
      all[z].classList.remove("none");
      all[z].classList.add("none");
    }

    for (z = 0; z < shop.length; z++) {
      shop[z].classList.remove("none");
    }
  }

  if (num == 2) {
    for (z = 0; z < all.length; z++) {
      all[z].classList.remove("none");
      all[z].classList.add("none");
    }

    for (z = 0; z < landing.length; z++) {
      landing[z].classList.remove("none");
    }
  }

  if (num == 3) {
    for (z = 0; z < all.length; z++) {
      all[z].classList.remove("none");
      all[z].classList.add("none");
    }

    for (z = 0; z < multipage.length; z++) {
      multipage[z].classList.remove("none");
    }
  }
}
/******/ })()
;