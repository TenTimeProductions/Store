
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
        if($('.sub-').parent().hasClass("subMenu-open")){

        }
        $('#'+ subMenu).parent().toggleClass("subMenu-open");
        $('#'+ subMenu).toggleClass("show-subMenu");
    });
</script>