<?php /* Template Name: フォーム送信ページ*/ ?>
<?php get_header(); ?>
<main class="complete">
    <?php echo get_template_part('./includes/part-breadcrumb'); ?>
    <h1 class="thankyou">Thank You</h1>
    <p class="thankyou__lead">お問い合わせが完了しました</p>
    <p class="thankyou__text">お問い合わせいただきありがとうございます。<br>担当者より改めてご連絡させていただきますので<br>今しばらくお待ちください。</p>
    <a class="buttonLeft prevButton" href="<?php echo home_url("/"); ?>">TOPページに戻る</a>
</main>

<?php get_footer(); ?>