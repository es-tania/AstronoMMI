var captionLength = 0;
var caption = '';

$(document).ready(function () {
    captionEl = $('#caption');

    // On cache les blocs qu'on ne veut pas voir
    $('#passer, #passer2, #1, #2, .infos, .fleche ').css('display', 'none');

    // Première action au clique
    $('#test-typing, #back').on('click', function () {
        $('#passer, .fleche, .infos, #caption .colonne').css('display', 'block');
        $('#passer2, #test-typing, #2 ').css('display', 'none');
        caption = $('#1').html();
        type();
        return;
    });

    $('#passer').on('click',function(){
        $('#1').css('display','block');
        $('#caption').css('display','none');
    });

    // Action au clique sur next
    $('#next').on('click', function(){
        $('#1, #colonne1, #colonne2, #passer').css('display', 'none');
        $('#passer2, #caption').css('display', 'block');
        caption = $('#2').html();
        type();
        return;
    });

    $('#passer2').on('click',function(){
        $('#2').css('display','block');
        $('#caption').css('display','none');
    });

    // Action au clic sur retour
    $('#back').on('click', function(){
        $('#colonne1, #colonne2, #passer, #caption').css('display', 'block');
    })

});

function type() {
    captionEl.html(caption.substr(0, captionLength++));
    if (captionLength < caption.length + 1) {
        setTimeout('type()', 2);
    } else {
        captionLength = 0;
        caption = '';
    }
}