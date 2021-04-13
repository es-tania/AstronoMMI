//Code Javascript pour faire le Parallax

var parallax = document.getElementById("parallax")

window.addEventListener("scroll", function () {
    let offset = window.pageYOffset;
    //console.log('Offset:'+offset)
    //console.log('offset * 0.7'+ offset * 0.7)
    parallax.style.backgroundPositionY = offset * 0.7 + "px";
})




// Code parallax étoile

document.querySelectorAll(".scene").forEach((elem) => {
    const modifier = elem.getAttribute("data-modifier");

    basicScroll
        .create({
            elem: elem,
            from: 0,
            to: 519,
            direct: true,
            props: {
                "--translateY": {
                    from: "0",
                    to: `${10 * modifier}px`
                }
            }
        })
        .start();
});