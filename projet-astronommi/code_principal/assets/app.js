$(document).ready(function () {

  //Code Javascript pour faire le Parallax
  var parallax = $('#parallax');

  $(window).scroll(function () {
    let offset = $(window).scrollTop();
    $(parallax).css('background-position-y', offset * 0.5 + 'px');
  })

  // Animation bouton du menu
  var menuBtn = $('.menu-btn');
  var menuOpen = false;
  $(menuBtn).on('click', function () {
    if (!menuOpen) {
      $(this).attr().addClass('open');
      menuOpen = true;
    } else {
      $(this).attr().removeClass('open');
      menuOpen = false;
    }
  });

  // Formulaire
  var nom = null;
  var prenom = null;
  var courriel = null;
  $("#nom_utilisateur, #prenom_utilisateur, #courriel").on('keyup', function () {

    nom = $("#nom_utilisateur").val().length;
    console.log(nom)
    if (nom == 0) {
      $('#nom_utilisateur').css({ "background-color": "rgba(187, 130, 130, 0.65)" });
    } else {
      $("#nom_utilisateur").css({ "background-color": "rgba(148, 189, 123, 0.65)" });
    }
    prenom = $("#prenom_utilisateur").val().length;
    if (prenom == 0) {
      $('#prenom_utilisateur').css({ "background-color": "rgba(187, 130, 130, 0.65)" });
    } else {
      $("#prenom_utilisateur").css({ "background-color": "rgba(148, 189, 123, 0.65)" });
    }
    courriel = $("#courriel").val().length;
    if (courriel == 0) {
      $('#courriel').css({ "background-color": "rgba(187, 130, 130, 0.65)" });
    } else {
      $("#courriel").css({ "background-color": "rgba(148, 189, 123, 0.65)" });
    }
  })
})
