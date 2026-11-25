<?php /* Template Name: 店舗一覧 */ ?>
<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Shop List</h1>
                <h2 class="heroCatch__lead">店舗一覧</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main shop">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="contents">
        <div class="container">
            <?php the_content(); ?>
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