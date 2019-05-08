$(document).ready(() => {
    $('#nav-button').click(() => {
        if ($('#top-nav ul').css('display') == 'none')
            $('#top-nav ul').css({'display': 'block'});
        else
            $('#top-nav ul').css({'display': 'none'});
    });
});