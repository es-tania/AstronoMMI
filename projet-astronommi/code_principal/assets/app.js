//Code Javascript pour faire le Parallax

var parallax = $('#parallax');

$(window).scroll(function(){
  let offset = $(window).scrollTop();
  $(parallax).css('background-position-y' , offset * 0.5 +'px');
})

// Animation bouton du menu
var menuBtn = $('.menu-btn');
var menuOpen = false;
$(menuBtn).on('click', function(){
  if(!menuOpen) {
    $(this).attr().addClass('open');
    menuOpen = true;
  } else {
    $(this).attr().removeClass('open');
    menuOpen = false;
  }
});

// Pour le formulaire essai 1
$(document).ready(function(){
  var nom = null;
  var prenom = null;
  var courriel = null;
$("#nom_utilisateur, #prenom_utilisateur, #courriel").on('keyup',function(){
       
  nom=$("#nom_utilisateur").val().length;
  console.log(nom)
  if(nom==0){
      $('#nom_utilisateur').css({"background-color":"#FFC0CB"});
  }else{
      $("#nom_utilisateur").css({"background-color":"#B0F2B6"});
  }
  prenom=$("#prenom_utilisateur").val().length;
  if(prenom==0){
      $('#prenom_utilisateur').css({"background-color":"#FFC0CB"});
  }else{
      $("#prenom_utilisateur").css({"background-color":"#B0F2B6"});
  }
  courriel=$("#courriel").val().length;
  if(courriel==0){
      $('#courriel').css({"background-color":"#FFC0CB"});
  }else{
      $("#courriel").css({"background-color":"#B0F2B6"});
  }
})
})



// Pour le formulaire essai 2

// $(document).ready(function () {

//   $('input#prenom_utilisateur').on("keyup", function () {
//     var prenom = $('input#prenom_utilisateur').val();

//     console.log(prenom.length);
//     if (prenom.length == 0) {
//         $(this).css({ "background-color": "pink" });
//     } else {
//         $(this).css({ "background-color": "green" });
//     }
//   })

//   $('input#courriel').on("keyup", function () {
//     var email = $('input#courriel').val();
//     if (email.length == 0) {
//         $(this).css({ "background-color": "pink" });
//     }
//     else {
//         $(this).css({ "background-color": "green" });
//     }
// })

// $('input#nom_utilisateur').on("keyup", function () {
//   var nom = $('input#nom_utilisateur').val();
//   if (nom.length == 0) {
//       $(this).css({ "background-color": "pink" });
//   }
//   else {
//       $(this).css({ "background-color": "green" });
//   }
// })


// })