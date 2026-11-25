<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">News</h1>
                <h2 class="heroCatch__lead">お知らせ</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="contents">
        <div class="container">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $news = new WP_Query(array(
                'post_type' => 'post',
                'paged' => $paged,
                'post_status' => 'publish',
                'posts_per_page' => 10,
            ));
            ?>
            <?php if ($news->have_posts()) : ?>
                <?php while ($news->have_posts()) : $news->the_post(); ?>
                    <div class="postCard">
                        <a href="<?php the_permalink(""); ?>">
                            <p class="postCard__date"><?php the_time('Y/m/d'); ?></p>
                            <p class="postCard__title"><?php the_title(""); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>