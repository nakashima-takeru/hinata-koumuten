<?php get_header(); ?>
<?php
$blocks_array = generate_blocks_array_for_page();
$gallery_block = get_lzb_block_field('photo-slider', $blocks_array, false);
?>
<main class="main estate">
  <?php echo get_template_part('./includes/part-breadcrumb'); ?>
  <div class="estateDetail">
    <div class="estateDetailHead container">
      <?php
      $post_date = get_the_date('U');
      $current_date = current_time('timestamp');

      $is_new = ($current_date - $post_date) <= (30 * DAY_IN_SECONDS);
      ?>

      <p class="estateDetailHead__area<?php if ($is_new) {
                                        echo ' new';
                                      } ?>">
        <span>
          <span class="estateDetailHead__areaIcon">
            <svg width="13" height="13" viewBox="0 0 13 13" fill="none">
              <mask id="mask0_3516_11592" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="13" height="13">
                <rect x="0.0214844" y="0.5" width="12" height="12" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_3516_11592)">
                <path d="M6.02148 6.5C6.29648 6.5 6.5319 6.40208 6.72773 6.20625C6.92357 6.01042 7.02148 5.775 7.02148 5.5C7.02148 5.225 6.92357 4.98958 6.72773 4.79375C6.5319 4.59792 6.29648 4.5 6.02148 4.5C5.74648 4.5 5.51107 4.59792 5.31523 4.79375C5.1194 4.98958 5.02148 5.225 5.02148 5.5C5.02148 5.775 5.1194 6.01042 5.31523 6.20625C5.51107 6.40208 5.74648 6.5 6.02148 6.5ZM6.02148 10.175C7.03815 9.24167 7.79232 8.39375 8.28398 7.63125C8.77565 6.86875 9.02148 6.19167 9.02148 5.6C9.02148 4.69167 8.7319 3.94792 8.15273 3.36875C7.57357 2.78958 6.86315 2.5 6.02148 2.5C5.17982 2.5 4.4694 2.78958 3.89023 3.36875C3.31107 3.94792 3.02148 4.69167 3.02148 5.6C3.02148 6.19167 3.26732 6.86875 3.75898 7.63125C4.25065 8.39375 5.00482 9.24167 6.02148 10.175ZM6.02148 11.5C4.67982 10.3583 3.67773 9.29792 3.01523 8.31875C2.35273 7.33958 2.02148 6.43333 2.02148 5.6C2.02148 4.35 2.42357 3.35417 3.22773 2.6125C4.0319 1.87083 4.96315 1.5 6.02148 1.5C7.07982 1.5 8.01107 1.87083 8.81523 2.6125C9.6194 3.35417 10.0215 4.35 10.0215 5.6C10.0215 6.43333 9.69023 7.33958 9.02773 8.31875C8.36523 9.29792 7.36315 10.3583 6.02148 11.5Z" fill="#1C1B1F" />
              </g>
            </svg>
          </span>
          <?php echo get_field('estate_area'); ?>
        </span>
      </p>
      <h2 class="estateDetailHead__title"><?php the_title(); ?></h2>
    </div>

    <div class="estateDetail__field container">
      <div class="estateDetail__table">
        <div class="estateDetail__tableRow">
          <span>価格</span>
          <span><?php echo get_field('estate_price'); ?></span>
        </div>
        <div class="estateDetail__tableRow">
          <span>所在地</span>
          <span><?php echo get_field('estate_address'); ?></span>
        </div>
        <div class="estateDetail__tableRow">
          <span>学区</span>
          <span><?php echo get_field('estate_school_district'); ?></span>
        </div>
        <div class="estateDetail__tableRow">
          <span>総区画数</span>
          <span><?php echo get_field('estate_sections'); ?></span>
        </div>
        <div class="estateDetail__tableRow">
          <span>販売区画数</span>
          <span><?php echo get_field('estate_sale_sections'); ?></span>
        </div>
        <div class="estateDetail__tableRow">
          <span>土地面積</span>
          <span><?php echo get_field('estate_land_area'); ?></span>
        </div>
        <div class="estateDetail__tableRow">
          <span>建物面積</span>
          <span><?php echo get_field('estate_building_area'); ?></span>
        </div>
      </div>

      <div class="estateDetail__thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>

    </div>

    <div class="estateContents__button container">
      <div class="visitor">
        <div class="button">
          <a href="<?php echo home_url("form-visitor"); ?>"><span>来場予約はこちら</span></a>
        </div>
      </div>
    </div>

    <!-- 物件イメージ -->
    <?php if (!empty($gallery_block)): ?>
      <?php $gallery_data = get_lzb_block_field('photo-slider-gallery', $gallery_block, false); ?>
      <div class="estateGallery">
        <div class="estateGallery__carousel">
          <div class="container">
            <hgroup class="worksArticle__galleryTitle">
              <h2 class="worksArticle__galleryTitle--jp">物件イメージ</h2>
              <p class="worksArticle__galleryTitle--en">Photo gallery</p>
            </hgroup>
          </div>
          <!-- Carousel  -->
          <div class="worksArticle__mainCarousel swiper js-worksCarousel">
            <div class="swiper-wrapper">
              <?php foreach ($gallery_data as $img): ?>
                <div class="swiper-slide">
                  <?php echo wp_get_attachment_image($img['id']); ?>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>

        <div class="worksArticle__thumbnail">
          <div class="worksArticle__carouselThumbnail swiper worksCarouselThumbnail">
            <div class="swiper-wrapper">
              <?php foreach ($gallery_data as $img): ?>
                <div class="swiper-slide">
                  <?php echo wp_get_attachment_image($img['id']); ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <!-- ブロックエディタコンテンツ -->
    <div class="estateContents container">
      <?php echo the_content(); ?>

      <div class="estateContents__button">
        <div class="visitor">
          <div class="button">
            <a href="<?php echo home_url("form-visitor"); ?>"><span>来場予約はこちら</span></a>
          </div>
        </div>
      </div>

    </div>
  </div>

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
    <?php echo do_shortcode('[contact-form-7 id="ecb65cc" title="自社土地・建売情報"]'); ?>
  </section>
</main>
<?php get_footer(); ?>