<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/event/hero_title.svg" alt="イベント"></h1>
                <h2 class="heroCatch__lead">イベント</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main event">
    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="contents">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $status           = get_field('status');

                    if ($status == 'before') {
                        $status_text = '開催前';
                    } elseif ($status == 'session') {
                        $status_text = '開催中';
                    } elseif ($status == 'ended') {
                        $status_text = '開催終了';
                    }
                    ?>

                    <div class="status">
                        <?php $status = get_field('status'); ?>
                        <p class="status__label is-<?php echo esc_attr($status); ?>">
                            <?php echo esc_html($status_text); ?>
                        </p>
                    </div>

                    <div class="singleHead">
                        <hgroup>
                            <h1 class="singleHead__title"><?php the_title(); ?></h1>
                        </hgroup>
                    </div>

                    <div class="thumbnail for-event">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <?php //if ($status === 'session') : ?>
                        <!-- <div class="visitor">
                            <div class="button">
                                <a href="#contact-form"><span>来場予約はこちら</span></a>
                            </div>
                        </div> -->
                    <?php //endif; ?>

                    <div class="singleMain">
                        <?php the_content(); ?>
                    </div>

                    <?php //if ($status === 'session') : ?>
                        <!-- <div class="visitor">
                            <div class="button">
                                <a href="#contact-form"><span>来場予約はこちら</span></a>
                            </div>
                        </div> -->
                    <?php //endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="formSection" id="contact-form">
        <hgroup>
            <h4 class="form__title">Form</h4>
            <p class="form__lead">イベント参加申し込みフォーム</p>
        </hgroup>
        <p class="form__subtitle">下記フォームに必要項目をご入力ください。<br>※必須項目は必ずご記入ください。</p>
        <?php echo do_shortcode('[contact-form-7 id="89ed648" title="イベントフォーム"]'); ?>
    </section>
</main>

<?php get_footer(); ?>