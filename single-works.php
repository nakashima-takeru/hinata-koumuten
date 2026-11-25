<?php get_header(); ?>
<?php
$blocks_array = generate_blocks_array_for_page();
$gallery_block = get_lzb_block_field('photo-slider', $blocks_array, false);
?>
<main class="worksArticle">
  <?php echo get_template_part('./includes/part-breadcrumb'); ?>

  <div class="container">
    <?php
    $post_id = get_the_ID();
    $terms = get_the_terms($post_id, 'works-plan');

    if ($terms && !is_wp_error($terms)) {
      echo '<ul class="worksPlanList">';
      foreach ($terms as $term) {
        $term_name = esc_html($term->name);
        $term_id = $term->term_id;

        $term_color = get_field('works_plan_color', 'term_' . $term_id);

        if ($term_color) {
          echo '<li class="worksPlan" style="background-color:' . esc_html($term_color) . ';">' . $term_name . '</li>';
        } else {
          echo '<li class="worksPlan">' . $term_name . '</li>';
        }
      }
      echo '</ul>';
    } else {
      echo '';
    }
    ?>

    <h1 class="worksTitle"><?php the_title(); ?></h1>
  </div>


  <div class="worksMainvisual">
    <?php
    $image = get_field('works_mainvisual');
    ?>
    <img src="<?php echo esc_url($image); ?>" alt="">
  </div>

  <?php if (!empty($gallery_block)): ?>
    <?php $gallery_data = get_lzb_block_field('photo-slider-gallery', $gallery_block, false); ?>
    <div class="worksGallery">
      <div class="worksArticle__carousel">
        <div class="container">
          <hgroup class="worksArticle__galleryTitle">
            <h2 class="worksArticle__galleryTitle--jp">フォトギャラリー</h2>
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

  <div class="worksContent container">
    <?php the_content(); ?>
  </div>

  <div class="container worksButtonWrapper">
    <a class="worksButton" href="<?php echo home_url('works'); ?>">
      <span class="worksButton__icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_chevron-left_orange.svg" alt="">
      </span>
      <span>
        一覧へ戻る
      </span>
    </a>
  </div>

  <section class="section">
    <div class="container">
      <?php echo get_template_part('./includes/part-banner'); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>