//Code Javascript pour faire le Parallax
var parallax = document.getElementById("parallax")

window.addEventListener("scroll", function () {
    let offset = window.pageYOffset;
    //console.log('Offset:'+offset)
    //console.log('offset * 0.7'+ offset * 0.7)
    parallax.style.backgroundPositionY = offset * 0.5 + "px";
})

// Animation bouton du menu
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});