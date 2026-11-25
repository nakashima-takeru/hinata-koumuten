<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Blog</h1>
                <h2 class="heroCatch__lead">ブログ</h2>
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
            $args = array(
                'post_type' => 'blog',
                'paged' => $paged,
                'post_status' => 'publish',
                'posts_per_page' => 10,
            );
            $blog_query = new WP_Query($args);
            ?>
            <?php if ($blog_query->have_posts()) : ?>
                <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <div class="postCard">
                        <a href="<?php the_permalink(""); ?>">
                            <p class="postCard__date"><?php the_time('Y/m/d'); ?></p>
                            <p class="postCard__title"><?php the_title(""); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
			<?php else : ?>
                <p class="container fallbackText">準備中です</p>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>



</main>

<?php get_footer(); ?>