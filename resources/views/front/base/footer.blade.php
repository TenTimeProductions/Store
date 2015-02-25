
<script src="/front/js/jquery-2.1.1.js"></script>
<script src="/front/js/semantic.js"></script>

<!-- New Menu -->
<script src="/front/js/jquery.mobile.custom.min.js"></script>
<script src="/front/js/main.js"></script> <!-- Resource jQuery -->

<script>
    $('.special.cards .image').dimmer({
        on: 'hover'
    });

    $(document).on('click', '.sub-menu-item', function(e){
        var subMenu = $(this).data('menu');
        //$('.show-subMenu').removeClass("show-subMenu");

        $('#'+ subMenu).parent().toggleClass("subMenu-open");
        $('#'+ subMenu).toggleClass("show-subMenu");
    });
    $(document).on('click', '.sub-menu-product', function(e){
        var subMenu = $(this).data('menu');
        if($(this).hasClass('show-subMenu')){
            $('.show-subMenu').removeClass('show-subMenu');
        } else {
            $('#'+ subMenu).parent().toggleClass("subMenu-open");
            $('#'+ subMenu).toggleClass("show-subMenu");
        }
    });

</script>