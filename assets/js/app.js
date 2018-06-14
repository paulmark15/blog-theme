

jQuery(document).ready(function($){

    $.ajax({
        type: 'GET',
        url: 'https://api.giphy.com/v1/gifs/random?api_key=YYD3m0vibEsL9OJ2YqTKadZN4BwiD2yx&tag=fail&rating=pg-13',
        async: true,
        success: function(data){
            $('#gif-wrapper').css({
                "background-image": 'url("' + data.data.image_original_url + '")'
            });
        }
    });

});