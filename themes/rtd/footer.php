<a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{"bottom": 15,"right": 15}' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
            <i class="hs-icon hs-icon-arrow-top"></i>
        </a>

    </main>
    <div class="u-outer-spaces-helper"></div>
    <footer>
        <p>© 2018 - Trust Online</p>
    </footer>

   <!-- JS Global Compulsory -->

    <script src="<?php bloginfo('template_directory');?>/vendor/jquery-migrate/jquery-migrate.min.js"></script>


    <script src="<?php bloginfo('template_directory');?>/vendor/popper.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?php bloginfo('template_directory');?>/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/chosen/chosen.jquery.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/image-select/src/ImageSelect.jquery.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/masonry/dist/masonry.pkgd.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/imagesloaded/imagesloaded.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/slick-carousel/slick/slick.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/appear.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/custombox/custombox.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/custombox/custombox.legacy.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/jquery.filer/js/jquery.filer.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/vendor/jquery.maskedinput/src/jquery.maskedinput.js"></script>
    <!-- JS Unify -->
    <script src="<?php bloginfo('template_directory');?>/js/hs.core.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/components/hs.header.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/helpers/hs.hamburgers.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/components/hs.scroll-nav.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/components/hs.go-to.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/components/hs.sticky-block.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/helpers/hs.height-calc.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/components/hs.carousel.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/components/hs.cubeportfolio.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/components/hs.modal-window.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/helpers/hs.focus-state.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/components/hs.file-attachement.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/components/hs.masked-input.js"></script>
    <!-- JS Custom -->
    <script src="<?php bloginfo('template_directory');?>/js/custom.js"></script>

    <script>
        $(document).on('ready', function () {
            // initialization of carousel
            $.HSCore.components.HSCarousel.init('.js-carousel');

            // Header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu plugin
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            $.HSCore.helpers.HSHeightCalc.init();
        });

        $(window).on('load', function () {
            // initialization of HSScrollNav
            $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
                duration: 700,
                over: $('.u-secondary-navigation')
            });

            // initialization of masonry.js
            $('.masonry-grid').imagesLoaded().then(function () {
                $('.masonry-grid').masonry({
                    // options
                    columnWidth: '.masonry-grid-sizer',
                    itemSelector: '.masonry-grid-item',
                    percentPosition: true
                });
            });

            // initialization of sticky blocks
            $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
        });
    </script>
   <?php wp_footer(); ?>
 </body>
</html>
