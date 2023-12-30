<?php 
wp_enqueue_style('footer', get_template_directory_uri() . '/assets/style/footer.css');
?>

</main>
<footer class="nastylashy-footer" id="footer" role="contentinfo">
    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'nastylashy'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
    <div class="footer-links">
        <a href="/datenschutz" title="Datenschutzerklärung">Datenschutz</a>
        <a href="/impressum" title="Impressum">Impressum</a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
