@if(env('APP_ENV') == 'local')
    <script src="{{ asset('js/all.js') }}"></script>
@else
    <link rel="stylesheet" href="{{ elixir('js/all.js') }}">
@endif


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
    
        
        $('#menu a[data-file="true"]').on('click', function (e) {
            e.preventDefault();
            
            var index = $(this).index();

            $(this).parent('.list-group').find('a.active').removeClass('active');
            $(this).addClass('active');
        
            $('#html-content').hide().siblings('#pdf-content').show();
            $('#pdf-content').html('<h3>' + $(this).text() + '</h3><iframe class="iframe" src="' + $(this).attr('href') + '"></iframe>');
        
        })
        
    });
</script>