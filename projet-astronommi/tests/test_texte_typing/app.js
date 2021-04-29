var captionLength = 0;
var caption = '';

$(document).ready(function() {
    captionEl = $('#caption');
    
    $('#test-typing').on('click',function(){
        testTypingEffect();
        return;
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
