<div class="container">
    <div class="footer-content">
        <p>© <?php echo date('Y'); ?> MijnBedrijf. Alle rechten voorbehouden.</p>
        <p>Thema gemaakt door <a href="https://github.com/166389" target="_blank">Chris Groen</a></p>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => false,
            'menu_class' => 'footer-menu',
            'fallback_cb' => false
        ));
        ?>
    </div>
</div>