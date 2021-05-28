var captionLength = 0;
var caption = '';

$(document).ready(function() {
    captionEl = $('#caption');
    
    $('#test-typing').on('click',function(){
        $('#passer').css('display','block');
        $('#test-typing').css('display','none');
        testTypingEffect();
        return;
    });

    $('#passer').css('display','none');

    
    $('#passer').on('click',function(){
        $('#texte').css('visibility','visible');
        $('#caption').css('display','none');
    });

});

function testTypingEffect() {
    caption = $('#texte').html();
    type();
}

function type() {
    captionEl.html(caption.substr(0, captionLength++));
    if(captionLength < caption.length+1) {
        setTimeout('type()', 50);
    } else {
        captionLength = 0;
        caption = '';
    }
}
