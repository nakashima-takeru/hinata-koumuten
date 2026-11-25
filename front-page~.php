<?php  /* Template Name: トップページ */ ?>
<?php get_header(); ?>

<main class="top">
    <section class="mainvisual js-headerTransitionArea">
        <div class="mainvisual__inner">
            <div class="mainvisualCatch">
                <div class="mainvisualCatch__title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mainvisual_catch.png" alt="月々2万円台からの家づくり">
                </div>
                <h1 class="mainvisualCatch__lead">
                    <span class="mainvisualCatch__word"><span>パターンオーダーだからこそできる</span></span>
                    <span class="mainvisualCatch__word"><span>コストを抑えた理想の住まい</span></span>
                </h1>
            </div>
        </div>

        <div class="mainvisual__award">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/logo_award.png" alt="宮崎注文住宅コミュニティランキング第1位">
        </div>
    </section>

    <div class="js-logoTransitionArea">
        <div class="container kagoshimaBanner">
            <a>
                <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri() . '/assets/images/top/kagoshima-store-banner-sp.webp'); ?>" type="image/webp" media="(max-width: 550px)" />
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/top/kagoshima-store-banner.webp'); ?>" alt="鹿児島初出店12月OPEN" width="1080" height="360" loading="lazy">
                </picture>
            </a>
        </div>
        <section class="concept">
            <div class="container">
                <div class="headingType1">
                    <hgroup>
                        <h2 class="headingType1__title"><span>Concept</span></h2>
                        <h3 class="headingType1__word">私たちの家づくり</h3>
                    </hgroup>
                </div>
                <div class="concept__area">
                    <div class="concept__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/img_concept.png" alt="">
                    </div>
                    <div class="conceptBox">
                        <h4 class="conceptBox__title"><span>ひなた工務店で、</span><br><span>リーズナブルかつスピーディに</span><br><span>マイホームの夢を実現</span></h4>
                        <p class="conceptBox__text">私たちは、家だけではなく、<br>これからの人生に訪れる大切なイベントやご家族との素敵な時間、<br>趣味を充実させていただきたい、<br>そんな想いから、ひなた工務店を立ち上げました。<br>マイホームの夢も、あなたの理想のライフスタイルも<br>ひなた工務店で一緒に叶えましょう。</p>
                        <?php /*
                        <a class="buttonRight" href="<?php echo home_url("concept"); ?>">コンセプト</a>
                        */ ?>
                    </div>
                </div>
                <ul class="conceptPattern">
                    <li class="conceptPattern__list"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/text_concept1.png" alt="パターンオーダー住宅"></li>
                    <li class="conceptPattern__list"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/text_concept2.png" alt="分かりやすいパッケージ価格"></li>
                    <li class="conceptPattern__list"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/text_concept3.png" alt="充実した標準設備"></li>
                    <li class="conceptPattern__list"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/text_concept4.png" alt="高断熱高気密・安心の耐震性"></li>
                </ul>
            </div>
        </section>

        <?php /*
        <section class="lifeStyle">
            <div class="headingType1">
                <hgroup>
                    <h2 class="headingType1__title"><span>Lifestyle</span></h2>
                    <h3 class="headingType1__word">ライフスタイル一覧</h3>
                </hgroup>
            </div>

            <div class="lifeStyleList container columnGrid columnGrid--2col">
                <div class="lifeStyleList__item is-type1">
                    <a href="<?php echo home_url("lifestyle/couple"); ?>">
                        <p class="lifeStyleList__title">小さな家で<br>ちょっぴり贅沢に暮らす</p>
                        <p class="lifeStyleList__lead">共働き夫婦<span>の家</span></p>
                    </a>
                </div>
                <div class="lifeStyleList__item is-type2">
                    <a href="<?php echo home_url("lifestyle/adult"); ?>">
                        <p class="lifeStyleList__title">息子と<br>老後を快適に暮らす</p>
                        <p class="lifeStyleList__lead">大人親子<span>の家</span></p>
                    </a>
                </div>
                <div class="lifeStyleList__item is-type3">
                    <a href="<?php echo home_url("lifestyle/single"); ?>">
                        <p class="lifeStyleList__title">自立する<br>シングルマザーが楽しむ</p>
                        <p class="lifeStyleList__lead">子育て充実<span>の家</span></p>
                    </a>
                </div>
                <div class="lifeStyleList__item is-type4">
                    <a href="<?php echo home_url("lifestyle/singlestoryhouse"); ?>">
                        <p class="lifeStyleList__title">老後の生活を楽しむ<br>ちょっと贅沢な</p>
                        <p class="lifeStyleList__lead">平屋<span>の家</span></p>
                    </a>
                </div>
            </div>
        </section>
        */ ?>

        <section class="event">
            <div class="headingType1 event__title">
                <hgroup>
                    <h2 class="headingType1__title"><span>Event & Tour</span></h2>
                    <h3 class="headingType1__word">イベント・見学会</h3>
                </hgroup>
            </div>
            <div class="event__inner container">
                <div class="eventList">
                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                    $args = array(
                        'post_type' => 'event',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'paged' => $paged,
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php
                            $post_id = get_the_ID();
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
                            ?>
                            <div class="itemEvent">
                                <a href="<?php the_permalink(""); ?>">
                                    <div class="itemEventThumbanil">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <p class="itemEvent__priod">
                                        <?php if (!empty($start_date_format) && !empty($finish_date_format)): ?>
                                            <?php echo esc_html($start_date_format . " ～ " . $finish_date_format); ?>
                                        <?php endif; ?>
                                        <?php if (!empty($specific_dates)): ?>
                                            <span class="extraDates">
                                                <?php if (empty($finish_date_format) && !empty($start_date_format)): ?>
                                                    <?php echo $start_date->format('n月j日 (') . $weekdays[date('w', $start_date->getTimestamp())] . ')'; ?>
                                                    <?php if (!empty($specific_dates)): echo ',';
                                                    endif; ?>
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
                                    <p class="itemEvent__title"><?php the_title(); ?></p>
                                    <p class="itemEvent__address"><?php echo esc_html($address); ?></p>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p class="fallbackText">開催中のイベントはありません</p>
                    <?php endif; ?>
                </div>
                <a class="buttonRight eventList__button" href="<?php echo home_url("event"); ?>">イベント一覧へ</a>
            </div>
        </section>

        <?php /*
        <div class="banner container">
            <?php echo get_template_part('./includes/part-banner'); ?>
        </div>
		*/ ?>

        <?php /*
        <section class="estate">
            <div class="estate__inner container">
                <div class="estateHead">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/illust_estate-title.png" alt=""></span>
                    <h2 class="estateHead__title">自社土地<br />建売情報</h2>
                    <a class="estateHead__button" href="<?php echo home_url("estate"); ?>">
                        <span>
                            自社土地・<br />建売情報一覧へ
                        </span>
                    </a>
                </div>

                <div class="swiper estate__list js-carousel">
                    <div class="swiper-wrapper">
                        <?php
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $estate_query = new WP_Query(array(
                            'post_type' => 'estate',
                            'posts_per_page' => 6,
                        ));

                        if ($estate_query->have_posts()) :
                            while ($estate_query->have_posts()) : $estate_query->the_post();
                        ?>
                                <?php
                                $address = get_field('estate_address');
                                $price = get_field('estate_price');

                                $post_date = get_the_date('U');
                                $current_time = current_time('timestamp');
                                $one_month_ago = strtotime('-1 month', $current_time);

                                $thumbnail_class = '';
                                if ($post_date > $one_month_ago) {
                                    $thumbnail_class .= 'estate__thumbnail--new';
                                }
                                ?>
                                <a href="<?php the_permalink(); ?>" class="estate__item swiper-slide">
                                    <div class="estate__thumbnail <?php echo esc_attr($thumbnail_class); ?>">
                                        <?php echo get_the_post_thumbnail(); ?>
                                    </div>
                                    <p class="estate__title"><?php echo  get_the_title(); ?></p>
                                    <p class="estate__address"><?php echo esc_html($address); ?></p>
                                    <p class="estate__price">
                                        <span>価格</span>
                                        <span><?php echo esc_html($price); ?></span>
                                        <span>万円</span>
                                    </p>
                                </a>

                            <?php endwhile; ?>
                        <?php elseif (!have_posts()) : ?>
                            <?php wp_reset_postdata(); ?>
                            <p class="fallbackText">現在準備中です</p>
                        <?php endif; ?>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <!-- <p class="fallbackText">ただいま準備中です。</p> -->
            </div>
        </section>

        <section class="works">
            <div class="works__inner container">
                <div class="worksHead">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/illust_model-title.png" alt=""></span>
                    <h2 class="estateHead__title">モデルハウス</h2>
                    <a class="worksHead__button" href="<?php echo home_url("modelhouse"); ?>">
                        <span>
                            モデルハウス<br />一覧へ
                        </span>
                    </a>
                </div>

                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => 9,
                );

                $works_query = new WP_Query($args);
                ?>
                <div class="works__list swiper js-carousel">
                    <div class="swiper-wrapper">
                        <?php if ($works_query->have_posts()) : ?>
                            <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="works__item swiper-slide">
                                    <div class="works__thumbnail">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h2 class="works__title">
                                        <?php the_title(); ?>
                                    </h2>
                                    <p class="works__address">
                                        <?php echo get_field('works_address'); ?>
                                    </p>
                                </a>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p>施工事例はありません。</p>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>
        */ ?>

        <section class="consul">
            <div class="consul__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg_housingConsulting.png" alt="" width="1366" height="529" loading="lazy" />
            </div>

            <div class="consul__illust">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/illust_housingConsulting01.png" alt="" loading="lazy" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/illust_housingConsulting02.png" alt="" loading="lazy" />
            </div>

            <div class="container consul__container">
                <div class="consul__borderTop">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/border_consul.svg" alt="">
                </div>

                <h2 class="consul__title">家づくり無料相談会開催中</h2>
                <p class="consul__text">
                    ひなた工務店では、資金計画や住宅ローン相談会を無料で開催しています。<br />
                    私たちには年収200万円台でも住宅ローン審査に通過するなど、<br />
                    多くの実績があります。是非一度ご相談ください！<br />
                </p>

                <a href="<?php echo home_url("form-visitor"); ?>" class="buttonRight consul__button">
                    来場WEB予約
                </a>
            </div>
        </section>

        <div class="articles">
            <div class="container articles__container">
                <section class="news">
                    <div class="article__heading">
                        <img class="article__headingIcon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_news.png" alt="">
                        <h2 class="article__headingTitle">お知らせ</h2>
                        <a class="article__headingLink" href="<?php echo home_url('/news'); ?>" class="article__link">
                            お知らせ一覧
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_chevron-right_orange.svg" alt="">
                        </a>
                    </div>

                    <div class="article__list">
                        <?php
                        $args = array(
                            'posts_per_page' => 3,
                        );

                        $news_query = new WP_Query($args);

                        if ($news_query->have_posts()) :
                            while ($news_query->have_posts()) : $news_query->the_post();
                        ?>
                                <a href="<?php the_permalink(); ?>" class="newsList__item">
                                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="newsList__date">
                                        <?php echo get_the_date('Y/m/d'); ?>
                                    </time>
                                    <h3 class="newsList__title"><?php the_title(); ?></h3>
                                </a>
                        <?php endwhile;
                            wp_reset_postdata();
                        else: echo '新着情報はありません。';
                        endif; ?>
                    </div>
                </section>
                <!-- <?php
                        $args = array('post_type' => 'blog', 'posts_per_page' => 3);
                        $blog_query = new WP_Query($args);
                        ?>
                <section class="blog">
                    <div class="article__heading">
                        <img class="article__headingIcon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_blog.png" alt="">
                        <h2 class="article__headingTitle">スタッフブログ</h2>
                        <a class="article__headingLink" class="article__link" href="<?php echo home_url("/blog"); ?>">
                            ブログ一覧
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_chevron-right_orange.svg" alt="">
                        </a>
                    </div>

                    <div class="article__list">
						<?php if ($blog_query->have_posts()): ?>
						<?php while ($blog_query->have_posts()): $blog_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="newsList__item">
                                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="newsList__date">
                                        <?php echo get_the_date('Y/m/d'); ?>
                                    </time>
                                    <h3 class="newsList__title"><?php echo get_the_title(); ?></h3>
                                </a>
						<?php endwhile;
                            wp_reset_postdata();
                        else: echo 'ブログはありません。';
                        endif; ?>
                    </div>
                </section> -->
            </div>
        </div>

        <section class="cardLink">
            <div class="cardLink__container container">
                <a href="<?php echo home_url('company'); ?>" class="cardLink__item">
                    <div class="cardLink__text">
                        <hgroup class="cardLink__titleGroup">
                            <h2 class="cardLink__title--jp">Company</h2>
                            <p class="cardLink__title--en">会社概要</p>
                        </hgroup>
                    </div>
                    <div class="cardLink__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/illust_company.png" alt="">
                    </div>
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_chevron-right_black.svg" alt="">
                    </span>
                </a>

                <a href="<?php echo home_url('staff'); ?>" class="cardLink__item">
                    <div class="cardLink__text">
                        <hgroup class="cardLink__titleGroup">
                            <h2 class="cardLink__title--jp">Staff</h2>
                            <p class="cardLink__title--en">スタッフ紹介</p>
                        </hgroup>
                    </div>
                    <div class="cardLink__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/illust_staff.png" alt="">
                    </div>
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_chevron-right_black.svg" alt="">
                    </span>
                </a>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
</body>

</html>