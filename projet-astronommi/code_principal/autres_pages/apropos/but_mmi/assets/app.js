var captionLength = 0;
var caption = '';

$(document).ready(function () {
    captionEl = $('#caption');

    // On cache les blocs qu'on ne veut pas voir
    $('#passer, #passer2, #1, #2, .infos, .fleche ').hide();

    // Première action au clique
    $('#test-typing, #back').on('click', function () {
        $('#passer, .fleche, .infos, #caption .colonne').show();
        $('#passer2, #test-typing, #2 ').hide();
        caption = $('#1').html();
        type();
        return;
    });

    $('#passer').on('click',function(){
        $('#1').show();
        $('#caption').hide();
    });

    // Action au clique sur next
    $('#next').on('click', function(){
        $('#1, #colonne1, #colonne2, #passer').hide();
        $('#passer2, #caption').show();
        caption = $('#2').html();
        type();
        return;
    });

    $('#passer2').on('click',function(){
        $('#2').show();
        $('#caption').hide();
    });

    // Action au clic sur retour
    $('#back').on('click', function(){
        $('#colonne1, #colonne2, #passer, #caption').show();
    })

});

function type() {
    captionEl.html(caption.substr(0, captionLength++));
    if (captionLength < caption.length + 1) {
        setTimeout('type()', 5);
    } else {
        captionLength = 0;
        caption = '';
    }
}