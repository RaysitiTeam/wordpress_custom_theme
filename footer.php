    <footer>
        <nav>
            <?php
            wp_nav_menu($arg=array(
                'menu_class' => 'footer-navigation',
                'theme_location' => 'footer'
            ));
        ?>
        </nav>
    </footer>    
    <script src="<?php bloginfo('template_url')?>/assets/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/assets/js/bootstrap.min.js"></script>    
    <?php wp_footer();?>
</body>
</html>