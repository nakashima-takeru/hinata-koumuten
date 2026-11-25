<?php echo get_template_part("includes/part-footer"); ?>



<!-- GSAP & Animation JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/CSSRulePlugin.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/anime.js?<?php echo date("Ymd-Hi"); ?>"></script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js?<?php echo date("Ymd-Hi"); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/works.js?<?php echo date("Ymd-Hi"); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js?<?php echo date("Ymd-Hi"); ?>"></script>

<?php if (is_page("catalog") || is_singular("estate")) : ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/page-catalog-form.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php endif; ?>

<?php if (function_exists('wpcf7_contact_form')): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/form.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php endif; ?>

<?php wp_footer(); ?>

<!-- KASIKA TRACKING CODE -->
<script type="text/javascript" src="//panda.kasika.io/tag-manager/?pid=353805404E74454C5DC26DE7108E31EE"></script>
<!-- KASIKA TRACKING CODE -->
</body>

</html>