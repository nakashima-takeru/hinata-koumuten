<?php /* Template Name: 来場Web予約 */ ?>
<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Visitor reservation</h1>
                <h2 class="heroCatch__lead">来場WEB予約</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">
    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <div class="banner container">
        <div class="banner__area">
            <?php echo get_template_part('./includes/part-banner'); ?>
        </div>
    </div>

    <section class="top">
        <div class="top__inner container">
            <p class="top__catch">
                月々2万円台からの<br />家づくりを叶える<br />ひなた工務店が新オープン！
            </p>

            <p class="top__lead">
                樹脂サッシや太陽光標準搭載など、性能にも妥協はありません。<br />
                予算を抑えながらも性能には妥協したくない方、ひなた工務店で理想のマイホームを実現しましょう。
            </p>

            <div class="top__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-visitor/img_top.png" alt="家を購入するときの不安が並べられた画像">
            </div>

            <p class="top__catch top__catch--bottom">
                ご安心ください！<br />
                経験豊富なひなた工務店のスタッフが、無料でご相談を承ります。
            </p>
        </div>
    </section>

    <section class="merit">
        <div class="merit__inner container">
            <div class="heading">
                <h2 class="heading__title"><span>Merit</span></h2>
            </div>

            <div class="meritList">
                <div class="meritList__item">
                    <div class="meritList__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-visitor/img_merit1.png" alt="">
                    </div>
                    <h2 class="meritList__title">見れて・触れて・実感できる</h2>
                    <p class="meritList__text">
                        予約制なのでお待たせすることはありません。お客様のご都合に合わせてお越しください。
                    </p>
                </div>
                <div class="meritList__item">
                    <div class="meritList__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-visitor/img_merit2.png" alt="">
                    </div>
                    <h2 class="meritList__title">お子様がいても安心</h2>
                    <p class="meritList__text">
                        キッズスペースがございますので安心してお家づくりのご相談ができます。
                    </p>
                </div>
                <div class="meritList__item">
                    <div class="meritList__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-visitor/img_merit3.png" alt="">
                    </div>
                    <h2 class="meritList__title">なんでも相談してください</h2>
                    <p class="meritList__text">
                        住みたいエリアの土地、ローンの組み方など、なんでもご相談してください。<br />
                        まずは自分だけ聞きにこられてもOK!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="flow">
        <div class="flow__inner container">
            <div class="heading">
                <h2 class="heading__title"><span>Flow</span></h2>
            </div>

            <div class="flowList">
                <div class="flowList__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-visitor/img_flow1.png" alt="">
                </div>
                <div class="flowList__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-visitor/img_flow2.png" alt="">
                </div>
                <div class="flowList__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-visitor/img_flow3.png" alt="">
                </div>
                <div class="flowList__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-visitor/img_flow4.png" alt="">
                </div>
                <div class="flowList__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/form-visitor/img_flow5.png" alt="">
                </div>
            </div>

        </div>
    </section>

    <?php /*
    <section class="event">
        <div class="container">
            <div class="event__list">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = array(
                    'post_type' => 'event',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
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
                    <p class="fallbackText">現在開催中のイベントはありません</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    */ ?>

    <section class="formSection">
        <hgroup>
            <h4 class="form__title">Form</h4>
            <p class="form__lead">イベント参加申し込みフォーム</p>
        </hgroup>
        <p class="form__subtitle">下記フォームに必要項目をご入力ください。<br>※必須項目は必ずご記入ください。</p>
		<?php echo do_shortcode('[contact-form-7 id="e5b0c6b" title="店舗訪問フォーム"]'); ?>
    </section>
</main>

<?php get_footer(); ?>