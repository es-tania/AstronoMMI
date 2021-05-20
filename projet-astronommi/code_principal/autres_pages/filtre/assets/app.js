$(document).ready(function () {

if($(".check").prop("checked")!="false"){
    $(".check").trigger("click")
}

$(".sousdom ").next().css({"enabled":"false","opacity":"0.5"})

// Domaine :

var critere = {
    audio:"dom-1",
    dev:"dom-2",
    art:"dom-3",
    com:"dom-4",
    bac2:"bac-1",
    bac3:"bac-2",
    bac5:"bac-3",
}

function afficherTout(){
    $(".fiche").show();
}

function cacherFiche(id){
    var classFiche = critere[id];
    $("."+classFiche).hide();
}

$('input[type="checkbox"]').on("click",function(){
    if($(this).prop("checked") == false){
        // Cacher les fiches puisque la case est décochée
        var id = $(this).attr("id");
        cacherFiche(id);
        // console.log("faux")
    }else{
        afficherTout();
        $('input[type="checkbox"]:not(:checked)').each(function(){
            var id = $(this).attr("id");
            cacherFiche(id);
            console.log($(this).attr("id"));
        })
        // console.log("vrai")
    }
});


// Sous domaine :

// $('#decor').on("click",function(){
//     $('.sousdom-1').toggle()    
// });

// $('#image').on("click",function(){
//     $('.sousdom-2').toggle()    
// });

// $('#montage').on("click",function(){
//     $('.sousdom-3').toggle()    
// });

// $('#direction').on("click",function(){
//     $('.sousdom-4').toggle()    
// });

// $('#texte').on("click",function(){
//     $('.sousdom-5').toggle()    
// });

// $('#multimedia').on("click",function(){
//     $('.sousdom-6').toggle()    
// });

// $('#presse').on("click",function(){
//     $('.sousdom-7').toggle()    
// });

// $('#management').on("click",function(){
//     $('.sousdom-8').toggle()    
// });

// Salaire :

// $('#1500').on("click",function(){
//     $('.salaire-1').toggle()    
// });

// $('#2000').on("click",function(){
//     $('.salaire-2').toggle()    
// });

// $('#2500').on("click",function(){
//     $('.salaire-3').toggle()    
// });

// $('#3000').on("click",function(){
//     $('.salaire-4').toggle()    
// });

// $('#3500').on("click",function(){
//     $('.salaire-5').toggle()    
// });

// $('#droit').on("click",function(){
//     $('.salaire-6').toggle()    
// });

// Statut :

// $('#artisan').on("click",function(){
//     $('.statut-1').toggle()    
// });

// $('#intermittent').on("click",function(){
//     $('.statut-2').toggle()    
// });

// $('#salarie').on("click",function(){
//     $('.statut-3').toggle()    
// });

// $('#independant').on("click",function(){
//     $('.statut-4').toggle()    
// });



});