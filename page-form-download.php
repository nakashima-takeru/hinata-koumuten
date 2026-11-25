<?php /* Template Name: お問い合わせ・カタログ請求 */ ?>
<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Contact & Catalog</h1>
                <h2 class="heroCatch__lead">お問い合わせ・カタログ請求</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="catalog">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="catalogHead">
        <div class="container">
            <h2 class="catalogHead__title"><span>人気のカタログが今すぐ簡単に</span></h2>
            <h3 class="catalogHead__title"><span>いつでもどこでもごらんいただけます</span></h3>
            <p class="catalogHead__word">スマホはもちろん、PC、タブレットから人気のカタログを無料でご覧いただけます。<br>理想の家づくりの参考にしてください。</p>
            <div class="catalogHead__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalog/frame-pc.png" alt="PC画像" width="740" height="451">
                <ul class="catalogHead__img-inner">
                    <?php the_content(); ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="catalogAbout">
        <div class="container">
            <div class="heading">
                <h2 class="heading__title"><span>Catalog</span></h2>
            </div>
            <div class="catalogAbout__column">
                <div class="catalogAboutBox">
                    <div class="catalogAboutBox__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalog/catalog-about_img_1.png" alt="建物外観">
                    </div>
                    <p class="catalogAboutBox__title">ひなた工務店ってどんな会社？</p>
                    <p class="catalogAboutBox__text">お客様満足度98点！<br>株式会社ピースホームを母体とする<br>ブランドの魅力・メリットをご紹介</p>
                </div>
                <div class="catalogAboutBox">
                    <div class="catalogAboutBox__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalog/catalog-about_img_2.png" alt="部屋の内装1">
                    </div>
                    <p class="catalogAboutBox__title">選ばれている３つの理由って？</p>
                    <p class="catalogAboutBox__text">低価格・高性能・安心の保証/アフターメンテナンスの３つのポイントをご紹介</p>
                </div>
                <div class="catalogAboutBox">
                    <div class="catalogAboutBox__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalog/catalog-about_img_3.png" alt="部屋の内装2">
                    </div>
                    <p class="catalogAboutBox__title">どんなお家が建てられるの？</p>
                    <p class="catalogAboutBox__text">2人暮らしにちょうどいい住まいから、子育てしやすいお家まで。ご予算やライフスタイルに合わせて選べる大きさ・住まいのタイプ・内装テイスト等を分かりやすくご紹介します。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="catalogForm">
        <div class="container">
            <div class="heading">
                <h2 class="heading__title"><span>Download</span></h2>
            </div>
            <p class="catalogForm__word">下記フォームに必要項目をご入力ください<br><span>「*」の 必須項目</span>は必ずご入力ください。</p>
            <div class="catalogForm__area">
                <?php echo do_shortcode('[contact-form-7 id="18ebb13" title="お問い合わせ・カタログ請求"]'); ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="banner__area">
                <?php echo get_template_part('./includes/part-banner'); ?>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>