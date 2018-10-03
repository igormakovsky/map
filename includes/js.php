<!-- bower -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/isInViewport/lib/isInViewport.min.js"></script>
<script src="/bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="/bower_components/waypoints/lib/shortcuts/inview.min.js"></script>
<script src="/bower_components/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- greensock -->
<script src="/bower_components/gsap/src/minified/TweenMax.min.js"></script>
<script src="/bower_components/gsap/src/minified/utils/Draggable.min.js"></script>

<!-- custom -->
<script src="/js/drag.js"></script>
<script src="/js/navigation.js"></script>
<script src="/js/throwpropsplugin.min.js"></script>
<script src="/js/common.js"></script>
<script src="/js/custom.js"></script>

<!-- active menu page -->
<script>
    $(function() {
        $('.nav__<?=$id;?>').addClass('active');
        <?php if ($id == 'index'): ?>
        $('.header__logo').addClass('active');
        <?php endif; ?>
        $('.<?=$id;?>').addClass('active');
    });
</script>