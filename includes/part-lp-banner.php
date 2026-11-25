<?php
/**
 * LP 鹿児島店：来場予約特典バナー
 * ※ FV下とフォーム上の2か所で使用
 */
$lp_img = get_template_directory_uri() . '/assets/images/lp-kagoshima';
?>
<section class="lpBanner">
    <a class="lpBanner__link" href="">
        <picture>
            <source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/banner_gift_sp.webp" width="335" height="183">
            <img class="lpBanner__img" src="<?php echo $lp_img; ?>/banner_gift.webp" alt="オープン記念・ご来場予約特典 最大20,000円分 Amazonギフトカードプレゼント ※進呈条件がございます。詳細は予約フォームからご確認ください" width="800" height="254" loading="lazy">
        </picture>
    </a>
</section>
