<?php /* Template Name: スタッフ紹介 */ ?>
<?php get_header(); ?>
<?php
$staff_name = get_field('name');
$staff_occupation = get_field('occupation');
?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Staff List</h1>
                <h2 class="heroCatch__lead">スタッフ紹介</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="section staff">
        <div class="container">
            <div class="staff__area">
                <?php
                $args = array(
                    'post_type' => 'staff',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                    'orderby' => 'date'
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php
                        $staff_name = get_field('name');
                        $staff_occupation = get_field('occupation');
                        ?>
                        <div class="itemStaff">
                            <a href="<?php the_permalink(); ?>">
                                <div class="itemStaff__thumbanil">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <p class="itemStaff__name"><?php the_title(); ?></p>
                                <p class="itemStaff__en"><?php echo esc_html($staff_name); ?></p>
                                <p class="itemStaff__occupation"><?php echo esc_html($staff_occupation); ?></p>
                            </a>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <div class="pageNav">
                <?php
                $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
                $pagination = get_the_posts_pagination(array(
                    'base' => '?paged=%#%',
                    'format' => '?paged=%#%',
                    'prev_text' => '<div class="pageNav__prev"></div>',
                    'next_text' => '<div class="pageNav__next"></div>',
                ));
                echo $pagination;
                ?>
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