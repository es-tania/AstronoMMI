$(document).ready(function () {

    // Fonction qui permet de faire apparaître le menu de droite
    console.log($("body").scrollLeft());
    $('.click-bouton').click(function () {
        $('.sidebar').toggleClass('active');
        $('button').toggleClass('active-2');
    });

    $("#icon-menu").click(function () {
        $(this).toggleClass("open");
    });

    // Fonction qui permet d'afficher les fiches en fonctions du sous-domaines

    var critere = {
        multimedia: "sousdom-6",
        presse: "sousdom-7",
        management: "sousdom-8",
    }

    $('.blocHorizontal a').on("click", function () {
        $('.titre-fiche-metier').css('visibility', 'hidden');
        $('.cartefiche').hide();
        var id = $(this).attr("id");
        var classFiche = critere[id];
        $("." + classFiche).css('visibility', 'visible');
        $("." + classFiche).css('display', 'flex');
    })
})

// Code pour l'overlay (la tablette apparait)

function on() {
    $('.overlay').css('display', 'block');
}

function off() {
    $('.overlay').css('display', 'none');
}