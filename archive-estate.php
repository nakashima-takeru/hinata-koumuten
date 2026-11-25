<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Estate</h1>
                <h2 class="heroCatch__lead">自社土地・建売情報</h2>
            </hgroup>
        </div>
    </div>
</section>
<main class="main">
    <?php echo get_template_part('./includes/part-breadcrumb'); ?>
    <div class="container">
        <div class="estate">
            <div class="estate__list">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $estate_query = new WP_Query(array(
                    'post_type' => 'estate',
                    'posts_per_page' => 9,
                ));

                if ($estate_query->have_posts()) : ?>
                    <?php while ($estate_query->have_posts()) : $estate_query->the_post(); ?>
                        <?php
                        $address = get_field('estate_address');
                        $school_district = get_field('estate_school_district');
                        $land_area = get_field('estate_land_area');
                        $building_area = get_field('estate_building_area');
                        $trafic = get_field('estate_traffic');
                        $price = get_field('estate_price');
                        $area = get_field('estate_area');

                        $post_date = get_the_date('U');
                        $current_time = current_time('timestamp');
                        $one_month_ago = strtotime('-1 month', $current_time);

                        $thumbnail_class = '';
                        if ($post_date > $one_month_ago) {
                            $thumbnail_class .= 'estate__thumbnail--new';
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="estate__item">
                            <div class="estate__thumbnail <?php echo esc_attr($thumbnail_class); ?>">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <p class="estate__title"><?php the_title(); ?></p>
                            <div class="estate__info">
                                <p class="estate__infoRow">
                                    <span>所在地</span>
                                    <span><?php echo $address; ?></span>
                                </p>
                                <p class="estate__infoRow">
                                    <span>学校区</span>
                                    <span><?php echo $school_district; ?></span>
                                </p>
                                <p class="estate__infoRow">
                                    <span>土地面積</span>
                                    <span><?php echo $land_area; ?></span>
                                </p>
                                <p class="estate__infoRow">
                                    <span>建物面積</span>
                                    <span><?php echo $building_area; ?></span>
                                </p>
                                <p class="estate__infoRow">
                                    <span>交通</span>
                                    <span><?php echo $trafic; ?></span>
                                </p>
                                <p class="estate__infoRow estate__infoRow--price">
                                    <span>価格</span>
                                    <span class="estate__price">
                                        <?php echo $price; ?>
                                        <span class="estate__priceUnit">万円</span>
                                    </span>
                                </p>
                            </div>
                            <span class="estate__link">詳細を見る</span>
                        </a>
                    <?php endwhile; ?>
                <?php elseif (!have_posts()) : ?>
            </div>
            <p class="container fallbackText">準備中です</p>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
    </div>

    <div class="pageNav">
        <?php
        $GLOBALS['wp_query']->max_num_pages = $estate_query->max_num_pages;
        $pagination = get_the_posts_pagination(array(
            'base' => '?paged=%#%',
            'format' => '?paged=%#%',
            'prev_text' => '<div class="pageNav__prev"></div>',
            'next_text' => '<div class="pageNav__next"></div>',
        ));
        echo $pagination;
        ?>
    </div>
</main>
<?php get_footer(); ?>