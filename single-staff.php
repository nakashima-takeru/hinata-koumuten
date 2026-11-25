<?php get_header(); ?>
<?php
$staff_img = get_field('profile_img');
$staff_name = get_field('name');
$staff_occupation = get_field('occupation');
$staff_introduction = get_field('introduction');
$staff_thoughts = get_field('thoughts_');
?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Staff</h1>
                <h2 class="heroCatch__lead">スタッフ紹介</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="section">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="container container992">
                    <div class="staffHeaad">
                        <div class="staffHead__thumbnail">
                            <img src="<?php echo $staff_img; ?>" alt="">
                        </div>
                        <div class="staffHeadBox">
                            <div class="staffHeadBox__inner">
                                <p class="staffHeadBox__name"><?php the_title(); ?><span><?php echo $staff_occupation; ?></span></p>
                                <p class="staffHeadBox__en"><?php echo $staff_name; ?></p>
                                <p class="staffHeadBox__text"><?php echo $staff_introduction; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="staffBody">
                        <h3 class="staffBody__title">お家づくりへの想い</h3>
                        <p class="staffBody__text"><?php echo $staff_thoughts; ?></p>
                    </div>
                    <div class="staff__more">
                        <a href="<?php echo home_url("staff"); ?>" class="buttonMore__orange">一覧に戻る</a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
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