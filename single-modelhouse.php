<?php get_header(); ?>

<main class="main modelhouse">
    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <section class="modelhouseHead">
                <div class="container">
                    <h1 class="modelhouseHead__title"><?php the_title("") ?></h1>
					<div class="modelhouseHead__thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
            </section>

            <section class="modelhouseMain">
                <div class="container">
                    <?php the_content(""); ?>
                    <div class="modelhouseMain__more">
                        <a href="<?php echo home_url("modelhouse"); ?>" class="buttonMore">一覧に戻る</a>
                    </div>
                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

    <div class="banner container">
        <div class="banner__area">
            <?php echo get_template_part('./includes/part-banner'); ?>
        </div>
    </div>

    <section class="formSection">
        <hgroup>
            <h4 class="form__title">Form</h4>
            <p class="form__lead">モデルハウス参加申し込みフォーム</p>
        </hgroup>
        <p class="form__subtitle">下記フォームに必要項目をご入力ください。<br>※必須項目は必ずご記入ください。</p>
		<?php echo do_shortcode('[contact-form-7 id="c2b5b50" title="モデルハウスフォーム"]'); ?>
			<p class="form__subtitle">現在フォームは調整中です。<br>お時間をあけてお試しください。</p>
    </section>

</main>

<?php get_footer(); ?>