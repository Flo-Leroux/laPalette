$(document).ready(function (){

    /** COULEUR SITE WEB */
    ActualitesColor = getCookie('ActualitesColor');
    AssociationColor = getCookie('AssociationColor');
    FestivalColor = getCookie('FestivalColor');
    CagetteColor = getCookie('CagetteColor');
    AteliersColor = getCookie('AteliersColor');

    $('#publier_editeur').css('display', 'none');
    $('#vignette').css('display', 'none');

    v = $("#categorie_editeur").val();
    couleur_change(v);

    if(v == 'Festival'){
        $('#sous_categorie_festival').css('display', 'block');
    }else{
        $('#sous_categorie_festival').css('display', 'none');
    }

    if($('#titre_editeur').val() == ''){
        $('#titre').css('display', 'none');
    }else{
        $('#titre').css('display', 'inline-block');
    }

    $('#categorie_editeur').change(function () {
        v = $("#categorie_editeur").val();
        if (v == 'Festival') {
            $('#sous_categorie_festival').css('display', 'block');
        } else {
            $('#sous_categorie_festival').css('display', 'none');
        }
        couleur_change(v);
    });

    $('#titre_editeur').change(function(){
        if($('#titre_editeur').val() == ''){
            $('#titre').css('display', 'none');
        }else{
            $('#titre').css('display', 'inline-block');
            $('#titre').empty();
            $('#titre').append($('#titre_editeur').val());
        }
    });
});

function verif_champs(id){
    if($(id).val() == ''){
        $(id).css('border', '2px solid red');
    }else{
        $(id).css('border', 'none');
    }
    return false;
}

function previsu_vignette(){
    $('#vignette').attr('src', $("#vignette_editeur").val());
    if($('#vignette').css('display') == 'block'){
        $('#vignette').css('display', 'none');
        $('#bouton_previsu').empty();
        $('#bouton_previsu').append('Voir l\'image');
    }else{
        $('#vignette').css('display', 'block');
        $('#bouton_previsu').empty();
        $('#bouton_previsu').append('Cacher l\'image');
    }
}

function couleur_change(v){
    if(v == 'Festival'){
        $('.sous_menu_titre p').css('background-color', FestivalColor);
        $('.sous_menu_titre button').css('background-color', FestivalColor);
        $('#page #titre').css('background-color', FestivalColor);
    }else if( v == 'Association'){
        $('.sous_menu_titre p').css('background-color', AssociationColor);
        $('.sous_menu_titre button').css('background-color', AssociationColor);
        $('#page #titre').css('background-color', AssociationColor);
    }else if( v == 'Actualite') {
        $('.sous_menu_titre p').css('background-color', ActualitesColor);
        $('.sous_menu_titre button').css('background-color', ActualitesColor);
        $('#page #titre').css('background-color', ActualitesColor);
    }else if( v == 'Cagette'){
        $('.sous_menu_titre p').css('background-color', CagetteColor);
        $('.sous_menu_titre button').css('background-color', CagetteColor);
        $('#page #titre').css('background-color', CagetteColor);
    }else if( v == 'Ateliers'){
        $('.sous_menu_titre p').css('background-color', AteliersColor);
        $('.sous_menu_titre button').css('background-color', AteliersColor);
        $('#page #titre').css('background-color', AteliersColor);
    }
}

function getCookie(name){
    if(document.cookie.length == 0)
        return null;

    var regSepCookie = new RegExp('(; )', 'g');
    var cookies = document.cookie.split(regSepCookie);

    for(var i = 0; i < cookies.length; i++){
        var regInfo = new RegExp('=', 'g');
        var infos = cookies[i].split(regInfo);
        if(infos[0] == name){
            return unescape(infos[1]);
        }
    }
    return null;
}