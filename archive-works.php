<?php get_header(); ?>
<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Works</h1>
                <h2 class="heroCatch__lead">施工事例</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">
    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'works',
        'posts_per_page' => 9,
		'paged' => $paged,
    );

    $works_query = new WP_Query($args);
    ?>
    <section class="section">
        <?php if ($works_query->have_posts()) : ?>
            <div class="container">
                <div class="works__list">
                    <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="works__item">
                            <div class="works__thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'works-plan');

                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    $term_name = $term->name;
                                    $term_id = $term->term_id;

                                    $back_color = get_field('works_plan_color', 'term_' . $term_id);

                                    if ($back_color) {
                                        echo '<span class="works__plan" style="background-color:' . esc_html($back_color) . ';">' . esc_html($term_name) . '</span>';
                                    } else {
                                        echo '<span class="works__plan" style="background-color: #f5a455;">' . esc_html($term_name) . '</span>';
                                    }
                                }
                            }
                            ?>

                            <h2 class=" works__title">
                                <?php the_title(); ?>
                            </h2>
                        </a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        <?php else : ?>
            <p class="container fallbackText">準備中です</p>
        <?php endif; ?>
    </section>

    <div class="pageNav">
        <?php
        $GLOBALS['wp_query']->max_num_pages = $works_query->max_num_pages;
        $pagination = get_the_posts_pagination(array(
            'base' => '?paged=%#%',
            'format' => '?paged=%#%',
            'prev_text' => '<div class="pageNav__prev"></div>',
            'next_text' => '<div class="pageNav__next"></div>',
        ));
        echo $pagination;
        ?>
    </div>

    <section class="section">
        <div class="container">
            <div class="banner__area">
                <?php echo get_template_part('./includes/part-banner'); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>