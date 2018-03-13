


//isotope
$( document ).ready(function() {
    var $container = $('.isotope');
    // filter buttons
    $('#filters button').click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( !$this.hasClass('is-checked') ) {
            $this.parents('#options').find('.is-checked').removeClass('is-checked');
            $this.addClass('is-checked');
        }
        var selector = $this.attr('data-filter');
        $container.isotope({  itemSelector: '.grid-item', filter: selector });
        return false;
    });
});


$('.go-anchor').click(function () {
    $('html, body').animate({
        scrollTop: $('.home-block-welcome').offset().top -60
    }, 800);
});





















