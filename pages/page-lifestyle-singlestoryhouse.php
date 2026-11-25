<?php /* Template Name: 老後の生活を楽しむ ちょっと贅沢な 平屋の家 */ ?>
<?php get_header(); ?>
<?php
$outline = get_field('outline');
$recommend = get_field('recommend');
$recommend__point1 = $recommend['point_1'];
$recommend__point2 = $recommend['point_2'];
$recommend__point3 = $recommend['point_3'];
$recommend__point4 = $recommend['point_4'];
$banner = get_field('banner');
?>

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

    <div class="contents">

        <section class="mv">
            <div class="container mv__inner">
                <div class="mvCatch">
                    <h2 class="mvCatch__title">老後の生活を楽しむ<br>ちょっと贅沢な</h2>
                    <h3 class="mvCatch__word">平屋<span>の家</span></h3>
                </div>
                <div class="mvThumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lifestyle/lifestayle_img_4.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="section outline">
            <div class="container">
                <div class="heading">
                    <h2 class="heading__title"><span>Outline</span></h2>
                </div>
                <ul class="outline__list">
                    <?php if ($outline['point_1']) : ?>
                        <li><?php echo $outline['point_1']; ?></li>
                    <?php endif; ?>
                    <?php if ($outline['point_2']) : ?>
                        <li><?php echo $outline['point_2']; ?></li>
                    <?php endif; ?>
                    <?php if ($outline['point_3']) : ?>
                        <li><?php echo $outline['point_3']; ?></li>
                    <?php endif; ?>
                    <?php if ($outline['point_4']) : ?>
                        <li><?php echo $outline['point_4']; ?></li>
                    <?php endif; ?>
                    <?php if ($outline['point_5']) : ?>
                        <li><?php echo $outline['point_5']; ?></li>
                    <?php endif; ?>
                </ul>
                <div class="outline__area">
                    <div class="outlineDetails">
                        <dl class="outlineDetailsBox">
                            <dt class="outlineDetailsBox__title">プラン</dt>
                            <dd class="outlineDetailsBox__word"><?php echo $outline['plan']; ?></dd>
                        </dl>
                        <dl class="outlineDetailsBox">
                            <dt class="outlineDetailsBox__title">工法</dt>
                            <dd class="outlineDetailsBox__word"><?php echo $outline['method']; ?></dd>
                        </dl>
                    </div>
                    <div class="outlineDetails__thumbnail">
                        <img src="<?php echo $outline['floor']; ?>" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section recommend">
            <div class="container">
                <div class="heading">
                    <h2 class="heading__title"><span>Recommend</span></h2>
                </div>
                <div class="recommend__list">
                    <?php if ($recommend__point1) : ?>
                        <div class="itemRecommend">
                            <div class="itemRecommendHead">
                                <div class="itemRecommendHead__column">
                                    <p class="itemRecommendHead__number">1</p>
                                    <p class="itemRecommendHead__title"><?php echo $recommend__point1['title']; ?></p>
                                </div>
                                <p class="itemRecommendHead__text"><?php echo $recommend__point1['text']; ?></p>
                            </div>
                            <div class="itemRecommend__icon">
                                <img src="<?php echo $recommend__point1['icon']; ?>" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($recommend__point2) : ?>
                        <div class="itemRecommend">
                            <div class="itemRecommendHead">
                                <div class="itemRecommendHead__column">
                                    <p class="itemRecommendHead__number">2</p>
                                    <p class="itemRecommendHead__title"><?php echo $recommend__point2['title']; ?></p>
                                </div>
                                <p class="itemRecommendHead__text"><?php echo $recommend__point2['text']; ?></p>
                            </div>
                            <div class="itemRecommend__icon">
                                <img src="<?php echo $recommend__point2['icon']; ?>" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($recommend__point3) : ?>
                        <div class="itemRecommend">
                            <div class="itemRecommendHead">
                                <div class="itemRecommendHead__column">
                                    <p class="itemRecommendHead__number">3</p>
                                    <p class="itemRecommendHead__title"><?php echo $recommend__point3['title']; ?></p>
                                </div>
                                <p class="itemRecommendHead__text"><?php echo $recommend__point3['text']; ?></p>
                            </div>
                            <div class="itemRecommend__icon">
                                <img src="<?php echo $recommend__point3['icon']; ?>" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($recommend__point4) : ?>
                        <div class="itemRecommend">
                            <div class="itemRecommendHead">
                                <div class="itemRecommendHead__column">
                                    <p class="itemRecommendHead__number">4</p>
                                    <p class="itemRecommendHead__title"><?php echo $recommend__point4['title']; ?></p>
                                </div>
                                <p class="itemRecommendHead__text"><?php echo $recommend__point4['text']; ?></p>
                            </div>
                            <div class="itemRecommend__icon">
                                <img src="<?php echo $recommend__point4['icon']; ?>" alt="">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="recommend__more">
                    <div class="buttonMore">
                        <a href="<?php echo home_url("lifestyle"); ?>" class="buttonMore__orange">一覧に戻る</a>
                    </div>
                </div>
            </div>
        </section>

        <?php if ($banner) : ?>
            <section class="section banner">
                <div class="container">
                    <div class="banner__area">
                        <div class="banner__img">
                            <a href="<?php echo $banner['link']; ?>">
                                <img src="<?php echo $banner['img']; ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    </div>

</main>


<?php get_footer(); ?>