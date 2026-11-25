<?php /* Template Name: ライフスタイル */ ?>
<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Life Style</h1>
                <h2 class="heroCatch__lead">ライフスタイル</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="contents">
        <div class="container">
            <div class="columnGrid columnGrid--2col">
                <div class="itemLife is-type1">
                    <a href="<?php echo home_url("lifestyle/couple"); ?>">
                        <p class="itemLife__title">小さな家で<br>ちょっぴり贅沢に暮らす</p>
                        <p class="itemLife__lead">共働き夫婦<span>の家</span></p>
                    </a>
                </div>
                <div class="itemLife is-type2">
                    <a href="<?php echo home_url("lifestyle/adult"); ?>">
                        <p class="itemLife__title">息子と<br>老後を快適に暮らす</p>
                        <p class="itemLife__lead">大人親子<span>の家</span></p>
                    </a>
                </div>
                <div class="itemLife is-type3">
                    <a href="<?php echo home_url("lifestyle/single"); ?>">
                        <p class="itemLife__title">自立する<br>シングルマザーが楽しむ</p>
                        <p class="itemLife__lead">子育て充実<span>の家</span></p>
                    </a>
                </div>
                <div class="itemLife is-type4">
                    <a href="<?php echo home_url("lifestyle/singlestoryhouse"); ?>">
                        <p class="itemLife__title">老後の生活を楽しむ<br>ちょっと贅沢な</p>
                        <p class="itemLife__lead">平屋<span>の家</span></p>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>