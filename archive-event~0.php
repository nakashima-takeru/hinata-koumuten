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
                        $status           = get_field('status');
                        $address          = get_field('address');
                        $event_start_date = get_field('event_start_date');
                        $event_last_date  = get_field('event_finish_date');
                        $start_date       = new DateTime($event_start_date);
                        $last_date        = new DateTime($event_last_date);

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
                                <p class="itemEvent__priod"><?php echo esc_html($start_date->format('Y年n月j日')); ?> ～ <?php echo esc_html($last_date->format('Y年n月j日')); ?></p>
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

    <section class="formSection">
        <hgroup>
            <h4 class="form__title">Form</h4>
            <p class="form__lead">イベント参加申し込みフォーム</p>
        </hgroup>
		<p class="form__subtitle">下記フォームに必要項目をご入力ください。<br>※必須項目は必ずご記入ください。</p>
        	<?php echo do_shortcode('[contact-form-7 id="89ed648" title="イベントフォーム"]'); ?>
    </section>

</main>

<?php get_footer(); ?>