$(document).ready(function () {

    $('.accordion').on('click', function () {
        this.classList.toggle('is-open')
        var content = this.nextElementSibling;
        if (content.style.maxHeight != 0) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            // this.style.height = this.scrollHeight + "px";
        }

    });

    var filterArray = {
        'stage': true,
        'alternance': true,
        'cdd': true,
        'cdi': true
    }

    $('input.type_contrat').on('click', function () {
        var thisClass = $(this).val();
        if ($(this).is(':checked')) {
            $('.' + thisClass).show(400);
            filterArray[$(this).val()] = true
        } else {
            $('.' + thisClass).hide(400);
            filterArray[$(this).val()] = false;
        }
    })

    $('input.domaine').on('click', function () {
        var thisClass = $(this).val();
        if (filterArray.stage == true) {
            afficheDomaine($(this),'.stage',thisClass)
        }
        if (filterArray.alternance == true) {
            afficheDomaine($(this),'.alternance',thisClass)
        }
        if (filterArray.cdd == true) {
            afficheDomaine($(this),'.cdd',thisClass)
        }
        if (filterArray.cdi == true) {
            afficheDomaine($(this),'.cdi',thisClass)
        }
    })
    
    function afficheDomaine(thisCheckbox,contrat, domaine){
        if (thisCheckbox.is(':checked')) {
            $(contrat+'.' + domaine).show(400);
        } else {
            $(contrat+'.' + domaine).hide(400);

        }
    }
    

    $('#offre_tri').on('change', function () {
        $('.offres').css('flex-direction', $(this).find(':selected').val())
    })

});