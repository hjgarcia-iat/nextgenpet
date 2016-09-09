<script src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>

<script>
    $(function () {
        $('#page-navbar').affix({
            offset: {
                top: $('.top-row').height()
            }
        });
    
        $('#menu').affix({
            offset: {
                top: 543
            }
        });
    
    
        $('a[data-file="true"]').on('click', function (e) {
            e.preventDefault();
            
            $(this).parent('.list-group').find('a.active').removeClass('active');
            $(this).addClass('active');
            
            $('#html-content').hide().siblings('#pdf-content').show();
            
            $('#pdf-content').html('<h3>'+ $(this).text() +'</h3><iframe class="iframe" src="'+ $(this).attr('href') +'"></iframe>');
            
        })
        
    });
</script>