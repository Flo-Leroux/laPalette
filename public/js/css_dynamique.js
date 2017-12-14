/**
 * Created by Flo Leroux on 06/03/2017.
 */

var t, v;
$(document).ready(function () {

    /** COULEUR SITE WEB */
    ActualitesColor = getCookie('ActualitesColor');
    AssociationColor = getCookie('AssociationColor');
    FestivalColor = getCookie('FestivalColor');
    CagetteColor = getCookie('CagetteColor');
    AteliersColor = getCookie('AteliersColor');

    Festival_HoverColor = getCookie('Festival_HoverColor');
    Cagette_HoverColor = getCookie('Cagette_HoverColor');

    Actualites_ExtraitColor = getCookie('Actualites_ExtraitColor');

    $('#menu #lapalette .fond').css('background-color', ActualitesColor);
    $('#menu #association .fond').css('background-color', AssociationColor);
    $('#menu #festival .fond').css('background-color', FestivalColor);
    $('#menu #cagette .fond').css('background-color', CagetteColor);
    $('#menu #ateliers .fond').css('background-color', AteliersColor);

    $('#menu #festival li').hover(function() {
        $(this).css('background-color', Festival_HoverColor);
        },function(){
        $(this).css('background-color', FestivalColor);
    });

    $('#menu #cagette li').hover(function() {
        $(this).css('background-color', Cagette_HoverColor);
    },function(){
        $(this).css('background-color', CagetteColor);
    });

    $('.titre_ajax').css('background-color', ActualitesColor);
    $('.suite_ajax').css('background-color', ActualitesColor);
    $('.extrait_ajax').css('background-color', Actualites_ExtraitColor);

    pageActive = $_GET('p');

    initColor(pageActive);

    initDimmension(pageActive);

    responsive_menu()
});

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

function $_GET(param) {
    var vars = {};
    window.location.href.replace( location.hash, '' ).replace(
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if ( param ) {
        return vars[param] ? vars[param] : null;
    }
    return vars;
}

function initColor(pageActive){
    if(pageActive == 'article' || pageActive == 'home' || pageActive == 'parametre'){
        $('#page #titre, #page h1, #page h2, #page h3, #page h4, #page h5, #page h6').css('background-color', ActualitesColor);
        $('#page strong, #page em, #page u, #page a').css('color', ActualitesColor);
        $('#menu #lapalette, #menu #association, #menu #festival, #menu #cagette, #menu #ateliers').css({'flex': '2', 'transition': 'all 1s ease-in-out', 'color': 'white'});
        $('#menu #lapalette').css({'flex': '3', 'transition': 'all 1s ease-in-out', 'color': 'white'});
        $('#menu #lapalette .fond').css({'width': '100%', 'top': '0', 'left': '0', 'transition': 'all 1s ease-in-out'});
        $('.sous_menu_titre button').css('background', ActualitesColor);
    }else if(pageActive == 'association'){
        $('#page #titre, #page h1, #page h2, #page h3, #page h4, #page h5, #page h6').css('background-color', AssociationColor);
        $('#page strong, #page em, #page u, #page a').css('color', AssociationColor);
        $('#menu #lapalette, #menu #association, #menu #festival, #menu #cagette, #menu #ateliers').css({'flex': '2', 'transition': 'all 1s ease-in-out', 'color': 'white'});
        $('#menu #association').css({'flex': '3', 'transition': 'all 1s ease-in-out', 'color': 'white'});
        $('#menu #association .fond').css({'width': '100%', 'top': '0', 'left': '0', 'transition': 'all 1s ease-in-out'});
    }else if(pageActive == 'naissance' || pageActive == 'valeurs' || pageActive == 'concept' || pageActive == 'prochaine' || pageActive == 'precedentes'){
        $('#page #titre, #page h1, #page h2, #page h3, #page h4, #page h5, #page h6').css('background-color', FestivalColor);
        $('#page strong, #page em, #page u, #page a').css('color', FestivalColor);
        $('#menu #lapalette, #menu #association, #menu #festival, #menu #cagette, #menu #ateliers').css({'flex': '2', 'transition': 'all 1s ease-in-out', 'color': 'white'});
        $('#menu #festival').css({'flex': '3', 'transition': 'all 1s ease-in-out', 'color': 'white'});
        $('#menu #festival .fond').css({'width': '100%', 'top': '0', 'left': '0', 'transition': 'all 1s ease-in-out'});
    }else if(pageActive == 'cagette'){
        $('#page #titre, #page h1, #page h2, #page h3, #page h4, #page h5, #page h6').css('background-color', CagetteColor);
        $('#page strong, #page em, #page u, #page a').css('color', CagetteColor);
        $('#menu #lapalette, #menu #association, #menu #festival, #menu #cagette, #menu #ateliers').css({'flex': '2', 'transition': 'all 1s ease-in-out', 'color': 'white'});
        $('#menu #cagette').css({'flex': '3', 'transition': 'all 1s ease-in-out', 'color': 'white'});
        $('#menu #cagette .fond').css({'width': '100%', 'top': '0', 'left': '0', 'transition': 'all 1s ease-in-out'});
    }else if(pageActive == 'ateliers'){
        $('#page #titre, #page h1, #page h2, #page h3, #page h4, #page h5, #page h6').css('background-color', AteliersColor);
        $('#page strong, #page em, #page u, #page a').css('color', AteliersColor);
        $('#menu #lapalette, #menu #association, #menu #festival, #menu #cagette, #menu #ateliers').css({'flex': '2', 'transition': 'all 1s ease-in-out', 'color': 'white'});
        $('#menu #ateliers').css({'flex': '3', 'transition': 'all 1s ease-in-out', 'color': 'white'});
        $('#menu #ateliers .fond').css({'width': '100%', 'top': '0', 'left': '0', 'transition': 'all 1s ease-in-out'});
    }else if(pageActive == 'login'){
        rand = Math.floor(Math.random() * (5 - 1 + 1)) + 1;
        if(rand == 1){color = ActualitesColor;}
        else if(rand == 2){color = AssociationColor;}
        else if(rand == 3){color = FestivalColor;}
        else if(rand == 4){color = CagetteColor;}
        else{color = AteliersColor;}
        $('#form_div form, #form_div button').css({'background-color': color});
    }
}

function initDimmension(pageActive){
    $('#menu #lapalette, #menu #association, #menu #festival, #menu #cagette, #menu #ateliers').hover(function(){
        $('#menu #lapalette, #menu #association, #menu #festival, #menu #cagette, #menu #ateliers').css({'flex': '2', 'transition': 'all 1s ease-in-out'});
        $(this).css({'flex': '3', 'transition': 'all 1s ease-in-out'});
    }, function(){
        $('#menu #lapalette, #menu #association, #menu #festival, #menu #cagette, #menu #ateliers').css({'flex': '2', 'transition': 'all 1s ease-in-out'});
        initColor(pageActive);
    });
}

function responsive_menu(){
    $('#menu #menu_icon').click(function(){
        if($('#menu #association, #menu #festival, #menu #cagette, #menu #ateliers').css('display') == 'none'){
            $('#menu #association, #menu #festival, #menu #cagette, #menu #ateliers').css({'display': 'block'});
        }else{
            $('#menu #association, #menu #festival, #menu #cagette, #menu #ateliers').css({'display': 'none'});
        }
    });
}