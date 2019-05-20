/* Set the width of the side navigation to 250px and the right margin of the page content to 50% */
function openNav() {
  if ( document.body.clientWidth <= 767) {
    document.getElementById("mySidenav").style.width = "150%";
    document.getElementById("mySidenav").classList.add('open');
  } else if ( document.body.clientWidth >= 768 && document.body.clientWidth <= 1023){
    document.getElementById("mySidenav").style.width = "156.5%";
    document.getElementById("mySidenav").classList.add('open');
  } else {
    document.getElementById("mySidenav").style.width = "50%";
    document.getElementById("mySidenav").classList.add('open');
  }
}
  
  /* Set the width of the side navigation to 0 and the right margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("mySidenav").classList.remove('open');
  }