(function($) {
    $(function() {
        var jcarousel = $('.jcarousel');

        jcarousel
            .on('jcarousel:create jcarousel:reload', function () {
                var element = $(this),
                    width = element.innerWidth();

                    if (width >= 600) {
                        width = width / 3;
                    } else if (width >= 350) {
                        width = width / 2;
                    }

                    element.jcarousel('items').css('width', width + 'px');
            })

            .on('jcarousel:createend', function(){
                console.log('yes');
                var element = $(this).parent();
                element.find('.jcarousel-control-prev')
                    .jcarouselControl({
                        target: '-=1'
                    });

                element.find('.jcarousel-control-next')
                    .jcarouselControl({
                        target: '+=1'
                    });

                element.find('.jcarousel-pagination')
                    .on('jcarouselpagination:active', 'a', function() {
                        $(this).addClass('active');
                    })
                    .on('jcarouselpagination:inactive', 'a', function() {
                        $(this).removeClass('active');
                    })
                    .on('click', function(e) {
                        e.preventDefault();
                    })
                    .jcarouselPagination({
                        perPage: 1,
                        item: function(page) {
                            return '<a href="#' + page + '">' + page + '</a>';
                        }
                    });
            })
    });
})(jQuery);
