<?php /* Template Name: フォーム確認ページ */ ?>
<?php get_header(); ?>
<?php $form_shortcode = select_confirm_form_by_url_parameter(); ?>

<main>
    <section class="formSection">
        <hgroup>
            <h4 class="form__title">Form</h4>
            <p class="form__lead">イベント参加申し込みフォーム</p>
        </hgroup>
        <p class="form__subtitle">下記フォームに必要項目をご入力ください。<br>※必須項目は必ずご記入ください。</p>
        <ul class="form__steps--list">
            <li class="form__steps--item">
                <p>入力</p>
            </li>
            <li class="form__steps--item active">
                <p>確認</p>
            </li>
            <li class="form__steps--item">
                <p>送信</p>
            </li>
        </ul>
        <?php echo do_shortcode($form_shortcode); ?>
    </section>
</main>

<?php get_footer(); ?>