$(document).ready(function() {
    $('#js-main-slider').pogoSlider({
        autoplayTimeout: 8000,
    }).data('plugin_pogoSlider');
    var transitionDemoOpts = {
        displayProgess: false,
        generateNav: false,
        generateButtons: false
    }

    $(".navbar li a").on('click', function(event) {
        if (this.hash !== "") {
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function() {
                window.location.hash = hash;
            });
        }
    });

    $('#play-video').click(function() {
        $('#video').get(0).play();
    });

});