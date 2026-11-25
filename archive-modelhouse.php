<?php /* Template Name: モデルハウス */ ?>
<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">ModelHouse</h1>
                <h2 class="heroCatch__lead">モデルハウス</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main modelhouse">
    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="section">
        <div class="container">
            <div class="stepHeading">
                <p class="stepHeading__title"><span>ひなた工務店のモデルハウスとは</span></p>
                <p class="stepHeading__text">ひなた工務店のモデルハウスは総合展示場ではわかりにくいリアルサイズな暮らしをイメージしていただけます。豪華な装飾やオプションは採用していません。等身大の住まいをぜひご覧ください。これからのお家づくりにぜひお役立てください。</p>
            </div>
            <div class="stepMain">
                <div class="stepMainBox">
                    <div class="stepMainBox__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modelhouse/step01_img.jpg" alt="" class="stepMainBox__img--thumbnail">
                        <span class="stepMainBox__img--number">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modelhouse/step01.png" alt="" class="">
                        </span>
                    </div>
                    <div class="stepMainBoxDeteils">
                        <p class="stepMainBoxDeteils__title"><span>気になる展示場をご予約</span></p>
                        <!-- <p class="stepMainBoxDeteils__text">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p> -->
                    </div>
                </div>
                <div class="stepMainBox">
                    <div class="stepMainBox__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modelhouse/step02_img.jpg" alt="" class="stepMainBox__img--thumbnail">
                        <span class="stepMainBox__img--number">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modelhouse/step02.png" alt="" class="">
                        </span>
                    </div>
                    <div class="stepMainBoxDeteils">
                        <p class="stepMainBoxDeteils__title"><span>リアルサイズに暮らしをイメージ</span></p>
                        <!-- <p class="stepMainBoxDeteils__text">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p> -->
                    </div>
                </div>
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


    <section class="section">
        <div class="container">
             
            <div class="event__list">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = array(
                    'post_type' => 'modelhouse',
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php
                        $catchphrase           = get_field('Catchphrase');
                        $place          = get_field('place');
                        ?>
                        <div class="itemEvent">
                            <a href="<?php the_permalink(""); ?>">
                                <div class="itemEventThumbanil">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <p class="itemEvent__title"><?php the_title(); ?></p>
                                <p class="itemEvent__address"><?php echo esc_html($catchphrase); ?></p>
                                <p class="itemEvent__priod"><?php echo esc_html($place); ?></p>
                                <p class="itemEvent__link">詳細を見る</p>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>準備中です</p>
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


</main>

<?php get_footer(); ?>