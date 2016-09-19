$(function () {
    $('#page-navbar').affix({
        offset: {
            top: $('.top-row').height()
        }
    });

    $('#menu').affix({
        offset: {
            top   : function () {
                return (this.top = $('.carousel-container').offset().top + $('.carousel-container').outerHeight(true))
            },
            bottom: function () {
                $('.page-footer').outerHeight(true);
            }
        }
    });


    $('#menu a[data-file="true"]').on('click', function (e) {
        e.preventDefault();

        var index = $(this).index();

        $(this).parent('.list-group').find('a.active').removeClass('active');
        $(this).addClass('active');

        $('#html-content').hide().siblings('#pdf-content').show();
        $('#pdf-content').html('<h3>' + $(this).text() + '</h3><iframe class="iframe" src="' + $(this).attr('href') + '"></iframe>');

    });

});