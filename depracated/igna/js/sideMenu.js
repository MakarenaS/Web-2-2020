let botonOpenNav = document.getElementById('buttonOpenNav');
botonOpenNav.addEventListener('click',openNav);

let botonCloseNav = document.getElementById('buttonCloseNav');
botonCloseNav.addEventListener('click',closeNav);



//   SECOND OPTION - PUSH

// https://www.w3schools.com/howto/howto_js_sidenav.asp

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("main").style.width = "80vw";
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("main").style.width = "100vw";
  }