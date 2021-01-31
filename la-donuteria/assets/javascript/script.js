function off() {
    document.getElementById("overlay").style.display = "none";
  }

  
// navigation menu click function
function myFunction() {
  var x = document.getElementById("menu-main-navigation");
  if (x.style.display === "grid") {
    x.style.display = "none";
  } else {
    x.style.display = "grid";
  }
}

// menu items

// function toggleFunction() {
//   var x = document.getElementById("toggleDonuts");
//   if (x.style.display === "none") {
//     x.style.display = "grid";
//   } else {
//     x.style.display = "none";
//   }
// }


// function toggleFunction2() {
//   var x = document.getElementById("toggleVegan");
//   if (x.style.display === "none") {
//     x.style.display = "grid";
//   } else {
//     x.style.display = "none";
//   }
// }

// function toggleFunction3() {
//   var x = document.getElementById("toggleDrinks");
//   if (x.style.display === "none") {
//     x.style.display = "grid";
//   } else {
//     x.style.display = "none";
//   }
// }



function menuItems(evt, menuItem) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(menuItem).style.display = "grid";
  evt.currentTarget.className += " active";
}