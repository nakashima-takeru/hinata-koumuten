<!DOCTYPE html>
<html lang="ja">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KXX2WLVL');</script>
<!-- End Google Tag Manager -->	
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WFM1TJCMNT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WFM1TJCMNT');
</script>
	
	<!-- Meta Content -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<title><?php wp_title('|', true, 'right');
			bloginfo('name'); ?></title>
	<meta name="description" content="宮崎でローコスト住宅を建てるひなた工務店。月々2万円台からの家づくり。">
	<meta name="keywords" content="">
	<meta name="robots" content="index, follow">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/common/ogp.png">
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:description" content="宮崎でローコスト住宅を建てるひなた工務店。月々2万円台からの家づくり。">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="<?php echo esc_url(home_url('/')); ?>">
	<link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">

	<!-- Favicon -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico" sizes="256x256" />

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Sacramento&display=swap" rel="stylesheet">

	<!-- CSS Relations -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/base/reset.css?<?php echo date("Ymd-Hi"); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/base/variables.css?<?php echo date("Ymd-Hi"); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/base/swiper-bundle.min.css?<?php echo date("Ymd-Hi"); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/base/common.css?<?php echo date("Ymd-Hi"); ?>">

	<!-- compornent -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/components/hero.css?<?php echo date("Ymd-Hi"); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/components/breadcrumb.css?<?php echo date("Ymd-Hi"); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/components/post.css?<?php echo date("Ymd-Hi"); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/components/button.css?<?php echo date("Ymd-Hi"); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/components/heading.css?<?php echo date("Ymd-Hi"); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/components/header.css?<?php echo date("Ymd-Hi"); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/components/footer.css?<?php echo date("Ymd-Hi"); ?>">

	<?php if (is_home() || is_front_page()) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.top.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_page("lineup")) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.lineup.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_page("company")) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.company.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_page("lifestyle") || is_page("couple") || is_page("adult") || is_page("single") || is_page('singlestoryhouse')) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.lifestyle.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_page("shop")) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.shop.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_category("news")) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.news.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_page("privacypolicy")) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.privacy.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_page("form-visitor")) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.form-visitor.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_page("concept")) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.concept.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_page("catalog")) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.catalog.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_archive("")) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/archive.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_singular("estate")) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/page.catalog.css?<?php echo date("Ymd-Hi"); ?>">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/single.css?<?php echo date("Ymd-Hi"); ?>">
	<?php elseif (is_single()) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/single.css?<?php echo date("Ymd-Hi"); ?>">
	<?php endif; ?>

	<?php /* Include on pages with CF7 form */ ?>
	<?php if (function_exists('wpcf7_contact_form') || is_page('form-complete')): ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/components/form.css?<?php echo date("Ymd-Hi"); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KXX2WLVL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
	
	<?php echo get_template_part('./includes/part-header'); ?>