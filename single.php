<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">News</h1>
                <h2 class="heroCatch__lead">お知らせ</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="contents">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="singleHead">
                        <p class="singleHead__date"><?php the_time("Y/m/d"); ?></p>
                        <hgroup>
                            <h1 class="singleHead__title"><?php the_title("") ?></h1>
                        </hgroup>
                    </div>
                    <div class="singleThumbnail">
                        <?php the_post_thumbnail();; ?>
                    </div>
                    <div class="singleMain">
                        <?php the_content(); ?>
                    </div>
                    <div class="singleNavi">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>
                        <?php if ($prev_post) : ?>
                            <div class="singleNavi__link is-prev">
                                <a href="<?php echo get_permalink($prev_post->ID); ?>">前の記事</a>
                            </div>
                        <?php endif; ?>
                        <div class="singleNavi__link is-more">
                            <a href="<?php echo home_url("news"); ?>">一覧に戻る</a>
                        </div>
                        <?php if ($next_post) : ?>
                            <div class="singleNavi__link is-next">
                                <a href="<?php echo get_permalink($next_post->ID); ?>">次の記事</a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>