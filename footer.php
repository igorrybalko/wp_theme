<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-md-offset-2 col-xs-12 logobotwr">
                <div class="logo-foot"></div>
            </div>
            <div class="col-md-2 col-xs-12 slinkwr">
                <div class="flinks">
                    <a class="slink slink-1" href="#" target="_blank"></a>
                    <a class="slink slink-2" href="#" target="_blank"></a>
                    <a class="slink slink-3" href="#" target="_blank"></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 fmenuwr">
                <div class="foot-menu">
                    <?php wp_nav_menu( array('theme_location'  => 'bottom')); ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 finfowr">
                <div class="foot-info">
                    <?php dynamic_sidebar( 'footer-text' );?>
                </div>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>