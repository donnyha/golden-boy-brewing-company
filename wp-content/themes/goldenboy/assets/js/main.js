(function () {
  let prevScrollpos = window.scrollY;
  
  window.onscroll = function() {
    const currentScrollPos = window.scrollY;

    if (prevScrollpos > currentScrollPos) {
      document.getElementById("nav-desktop").style.top = "0";
    } else {
      document.getElementById("nav-desktop").style.top = "-10rem";
    }

    prevScrollpos = currentScrollPos;
  }
})();