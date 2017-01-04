$(function () {
    // $(window).on('load', function () {
    //     var htmlHeight = $('.html-content').height();
    //
    //     if (htmlHeight > 800) {
    //         $('html, body').animate({
    //             scrollTop: $("#menu").offset().top - 200
    //         }, 1500);
    //     }
    // });

    $('#page-navbar').affix({
        offset: {
            top: $('.top-row').height()
        }
    });

    var $carousel = $('.carousel-container');
    var $affixElement = $('#menu');
    // Function to handle affix width and classes in affix menu on page loading, scrolling or resizing
    function affix() {
        // Fit affix width to its parent's width
        $affixElement.width($affixElement.parent().width());
    }

    // Call to function on DOM ready
    affix();
    // Call on scroll or resize
    $(window).on('scroll resize', function () {
        affix();
    });


    $affixElement.affix({
        offset: {
            top   : function () {
                return (this.top = $carousel.offset().top + $carousel.height())
            },
            bottom: function () {
                return (this.bottom = $('.page-footer-wrapper').height());
            }
        }
    });





    $('#menu a[data-file="true"]').on('click', function (e) {
        e.preventDefault();

        var index = $(this).index();

        $('#menu a.active').removeClass('active');
        $(this).siblings('a').removeClass('active');

        $(this).addClass('active');

        $('#html-content').hide().siblings('#pdf-content').show();
        $('#pdf-content').html('<h3>' + $(this).text() + '</h3><iframe class="iframe" src="' + $(this).attr('href') + '"></iframe>');

    });


    $.validator.setDefaults({
        highlight     : function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight   : function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement  : 'span',
        errorClass    : 'help-block',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $('#message-form').validate({
        rules        : {
            name : 'required',
            email: {
                required: true,
                email   : true
            }
        },
        messages     : {
            name : "Please provide your name",
            email: {
                required: "Please provide an email address",
                email   : "The email address provided is not valid"
            }
        },
        submitHandler: function (e) {
            var form      = $(e),
                formData  = form.serialize(),
                url       = form.attr('action'),
                method    = form.attr('method'),
                formModal = $('#messageModal');

            $.ajax({
                url       : url,
                data      : formData,
                type      : method,
                dataType  : 'json',
                beforeSend: function () {
                    $('.alert').remove();
                },
                error     : function (data, status, errors) {
                    if (data.status === 422) {
                        //process validation errors here.
                        $errors = data.responseJSON; //this will get the errors response data.
                        //show them somewhere in the markup
                        //e.g
                        errorsHtml = '<div class="alert alert-danger"><ul class="list-unstyled">';

                        $.each($errors, function (key, value) {
                            errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></di>';

                        $('#message-form .modal-body').prepend(errorsHtml);

                    } else {
                        form.trigger('reset');
                        $('#message-form .modal-body').prepend('<div class="alert alert-danger">Your request could not processed at this time!</div>')
                    }
                },
                success   : function (data) {
                    formModal.modal('toggle');
                    form.trigger('reset');

                    $('.html-content').prepend('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button> <strong>Success!</strong> '+ data.message +'!</div>');

                    $("html, body").animate({scrollTop: $('.html-content').offset().top - $('.carousel').height()}, "slow");
                }
            });
        }
    });

});