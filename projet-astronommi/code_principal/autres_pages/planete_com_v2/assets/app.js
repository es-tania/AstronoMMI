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
        decor: "sousdom-1",
        image: "sousdom-2",
        son: "sousdom-3",
        direction: "sousdom-4",
        texte: "sousdom-5",
    }

    $('.blocHorizontal a').on("click", function(){
        $('.titre-fiche-metier').css('visibility', 'hidden');
        $('.cartefiche').hide();
        var id = $(this).attr("id");
        var classFiche = critere[id];
        $("."+classFiche).css('visibility', 'visible');
        $("."+classFiche).css('display', 'flex');
    })

    // $('#son').on("click", function () {
    //     $('.titre-fiche-metier').css('visibility', 'hidden');
    //     $('.cartefiche').hide();
    //     $('.titre-3').css('visibility', 'visible');
    //     $('.sousdom-3').css('display', 'flex');
    // })

    // $('#image').on("click", function () {
    //     $('.titre-fiche-metier').css('visibility', 'hidden');
    //     $('.cartefiche').hide();
    //     $('.titre-2').css('visibility', 'visible');
    //     $('.sousdom-2').css('display', 'flex');
    // })

    // $('#decor').on("click", function () {
    //     $('.titre-fiche-metier').css('visibility', 'hidden');
    //     $('.cartefiche').hide();
    //     $('.titre-1').css('visibility', 'visible');
    //     $('.sousdom-1').css('display', 'flex');
    // })

    // $('#texte').on("click", function () {
    //     $('.titre-fiche-metier').css('visibility', 'hidden');
    //     $('.cartefiche').hide();
    //     $('.titre-5').css('visibility', 'visible');
    //     $('.sousdom-5').css('display', 'flex');
    // })

    // $('#direction').on("click", function () {
    //     $('.titre-fiche-metier').css('visibility', 'hidden');
    //     $('.cartefiche').hide();
    //     $('.titre-4').css('visibility', 'visible');
    //     $('.sousdom-4').css('display', 'flex');
    // })
})

// Code pour l'overlay (la tablette apparait)

function on() {
    $('.overlay').css('display', 'block');
}

function off() {
    $('.overlay').css('display', 'none');
}