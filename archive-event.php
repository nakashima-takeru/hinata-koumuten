<?php /* Template Name: イベント */ ?>
<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Event</h1>
                <h2 class="heroCatch__lead">イベント</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main event">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="section">
        <div class="container">
            <div class="event__list">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = array(
                    'post_type' => 'event',
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php
                        $post_id = get_the_ID();
                        $status           = get_field('status');
                        $address          = get_field('address');
                        $event_start_date = get_field('event_start_date');
                        $event_last_date  = get_field('event_finish_date');
                        $start_date       = new DateTime($event_start_date);
                        $start_date_format = empty($event_start_date) ? "" : $start_date->format('n月j日');
                        $last_date        = new DateTime($event_last_date);
                        $finish_date_format = empty($event_last_date) ? "" : $last_date->format('n月j日');

                        $specific_dates_array = (array) get_post_meta($post_id, 'event_specific_dates', true);

                        $weekdays = ['日', '月', '火', '水', '木', '金', '土'];
                        $specific_dates = array_column($specific_dates_array, 'event_individual_date');                       
                        $specific_dates = array_map(function ($date) use ($weekdays) {
                            $timestamp = strtotime($date);
                            return date('m月d日', $timestamp) . ' (' . $weekdays[date('w', $timestamp)] . ')';
                        }, $specific_dates);

                        if ($status == 'before') {
                            $status_text = '開催前';
                        } elseif ($status == 'session') {
                            $status_text = '開催中';
                        } elseif ($status == 'ended') {
                            $status_text = '開催終了';
                        }
                        ?>
                        <div class="itemEvent">
                            <a href="<?php the_permalink(""); ?>">
                                <div class="itemEventThumbanil">
                                    <?php the_post_thumbnail(); ?>
                                    <p class="itemEventThumbanil__status is-<?php echo esc_attr($status); ?>">
                                        <?php echo esc_html($status_text); ?>
                                    </p>
                                </div>
                                <p class="itemEvent__title"><?php the_title(); ?></p>
                                <p class="itemEvent__address"><?php echo esc_html($address); ?></p>
                                <p class="itemEvent__priod">
                                    <?php if (!empty($start_date_format) && !empty($finish_date_format)): ?>
                                        <?php echo esc_html($start_date_format . " ～ " . $finish_date_format); ?>
                                    <?php endif; ?>
                                    <?php if (!empty($specific_dates)): ?>
                                        <span class="extraDates">
                                            <?php if (empty($finish_date_format) && !empty($start_date_format)): ?>
                                                <?php echo $start_date->format('n月j日 (') . $weekdays[date('w', $start_date->getTimestamp())] . ')'; ?>
                                                <?php if (!empty($specific_dates)): echo ','; endif; ?>
                                            <?php endif; ?>
                                            <?php foreach ($specific_dates as $index => $single_date): ?>
                                                <span style="display: inline-block">
                                                    <?php echo esc_html($single_date); ?>
                                                    <?php if ($index + 1 < count($specific_dates)): echo ",";
                                                    endif; ?>
                                                    </span>
                                                <?php endforeach; ?>
                                                </span>
                                            <?php endif; ?>
                                </p>
                                <p class="itemEvent__link">詳細を見る</p>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="fallbackText">開催中のイベントはありません</p>
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