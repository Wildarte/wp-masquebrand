<footer id="footer">
    <div class="container">
        <div id="footer-content">
            <div id="copyright">
                &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.
            </div>
            <nav id="footer-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                ));
                ?>
            </nav>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
