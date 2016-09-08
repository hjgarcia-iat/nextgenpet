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
    });
</script>