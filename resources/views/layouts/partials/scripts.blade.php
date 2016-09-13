<script src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>

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
    
    
        $('.navmenu-nav .sidebar-menu-link a[data-file="true"]').on('click', function (e) {
            e.preventDefault();
            var index = $(this).parent('.sidebar-menu-link').index() - 7;
            
            $('.sidebar-menu-link.active').removeClass('active');
            $(this).parent('li').addClass('active');
            
            $('#menu').find('.list-group a.active').removeClass('active');
            $('#menu .list-group-item:eq(' + index + ')').addClass('active');
            
            $('#html-content').hide().siblings('#pdf-content').show();
            $('#pdf-content').html('<h3>'+ $(this).text() +'</h3><iframe class="iframe" src="'+ $(this).attr('href') +'"></iframe>');
            
        });
    
        
        $('#menu a[data-file="true"]').on('click', function (e) {
            e.preventDefault();
            
            var index = $(this).index();

            $(this).parent('.list-group').find('a.active').removeClass('active');
            $(this).addClass('active');
        
            $('.sidebar-menu-link.active').removeClass('active');
            $('.sidebar-menu-link:eq('+ index +')').addClass('active');
        
            $('#html-content').hide().siblings('#pdf-content').show();
            $('#pdf-content').html('<h3>' + $(this).text() + '</h3><iframe class="iframe" src="' + $(this).attr('href') + '"></iframe>');
        
        })
        
    });
</script>