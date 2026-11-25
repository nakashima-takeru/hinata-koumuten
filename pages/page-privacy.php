<?php /* Template Name: プライバシーポリシー */ ?>
<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Privacy Policy</h1>
                <h2 class="heroCatch__lead">プライバシーポリシー</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="contents">
        <div class="container">
            <div class="privacyMain">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>