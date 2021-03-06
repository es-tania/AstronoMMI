$(document).ready(function(){

    if ($(".check").prop("checked") != "false") {
        $(".check").trigger("click")
    }

    // Domaine :

    var critere = {
        // Domaine
        audio: "dom-1",
        dev: "dom-2",
        art: "dom-3",
        com: "dom-4",
        // Niveau d'accès
        bac2: "bac-1",
        bac3: "bac-2",
        bac5: "bac-3",
        // Salaire
        1500: "salaire-1",
        2000: "salaire-2",
        2500: "salaire-3",
        3000: "salaire-4",
        3500: "salaire-5",
        droit: "salaire-6",
        // Statut :
        artisan: "statut-1",
        intermittent: "statut-2",
        salarie: "statut-3",
        independant: "statut-4"
    }

    function afficherTout() {
        $(".fiche").show();
    }

    function cacherFiche(id) {
        var classFiche = critere[id];
        $("." + classFiche).hide();
        // Cacher les sous-domaine
    }

    $('input[type="checkbox"]').on("click", function () {
            if ($(this).prop("checked") == false) {
                // Cacher les fiches puisque la case est décochée
                var id = $(this).attr("id");
                cacherFiche(id);
                var classFiche = critere[id];
            } else {
                afficherTout();
                $('input[type="checkbox"]:not(:checked)').each(function () {
                    var id = $(this).attr("id");
                    cacherFiche(id);
                });
            };

    });
});