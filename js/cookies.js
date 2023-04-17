$(document).ready(function() {
    if (localStorage.getItem('cookie-banner-dismissed') == 'true') {
        $('.cookie-banner').hide();
    }else{
        $('.cookie-banner').show();
    }

    $('#accept-cookies-btn').click(function() {
        localStorage.setItem('cookie-banner-dismissed', 'true');
        $('.cookie-banner').slideUp();
    });

});