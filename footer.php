</main>

<!-- footer -->
<footer>
    <!-- desktop footer -->
    <div class="footer-grid">
        <img src="<?= get_template_directory_uri(); ?>/img/logo-liten.png" alt="Björkudden Discgolf Klubb logotyp.">
        <?php wp_nav_menu(array('theme_location' => 'footer'));?>
    </div>
    <!-- mobile footer -->
    <div class="footer-mobile">
    <?php wp_nav_menu(array('theme_location' => 'footer-mobile'));?>
    <p>Björkudden Discgolf klubb</p>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>