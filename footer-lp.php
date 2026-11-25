<?php /* 共通フッター（他ページと同じ）※ 追従の予約ボタン（fixButton__links）はLPでは非表示 */ ?>
<?php get_template_part('includes/part-footer', null, ['show_fix_links' => false]); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lp-kagoshima.js?<?php echo date("Ymd-Hi"); ?>"></script>

<!-- 来場予約フォーム -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/page-catalog-form.js?<?php echo date("Ymd-Hi"); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/form.js?<?php echo date("Ymd-Hi"); ?>"></script>

<?php wp_footer(); ?>

<!-- KASIKA TRACKING CODE -->
<script type="text/javascript" src="//panda.kasika.io/tag-manager/?pid=353805404E74454C5DC26DE7108E31EE"></script>
<!-- KASIKA TRACKING CODE -->
</body>

</html>
