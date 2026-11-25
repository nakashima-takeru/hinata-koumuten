<?php
/**
 * LP 鹿児島店：CTA「先行案内 受付中！」
 * ※ ひなた工務店とは？の下と、ページ後半の2か所で使用
 */
$lp_img = get_template_directory_uri() . '/assets/images/lp-kagoshima';
?>
<section class="lpCta">
    <div class="lpCta__body">
        <div class="lpCta__head">
            <p class="lpCta__label">
                <svg class="lpCta__slash" viewBox="0 0 16 24" aria-hidden="true"><line x1="0" y1="0" x2="16" y2="24" /></svg>
                先行案内 受付中！
                <svg class="lpCta__slash" viewBox="0 0 16 24" aria-hidden="true"><line x1="16" y1="0" x2="0" y2="24" /></svg>
            </p>
            <h2 class="lpCta__title">ひなた工務店 鹿児島店の情報を、<br>いち早くお届け。</h2>
        </div>
        <div class="lpCta__textWrap">
            <p class="lpCta__text">ひなた工務店 鹿児島店の情報を、いち早くお届け。<br>ご登録いただいた方へ、家づくりの資料をお送りし、<br class="lpPc">オープン日や見学のご案内を順次お届けします。</p>
            <p class="lpCta__note">※オープン日は決まり次第お知らせします。<br>※来店日時のご予約は、受付開始後に承ります。</p>
        </div>
        <a class="lpButton lpButton--white" href="#reserve">パンフレット・<br class="lpSp">オープン情報を受け取る</a>
    </div>
    <div class="lpCta__graphic">
        <img src="<?php echo $lp_img; ?>/cta_illust.webp" alt="" width="435" height="267" loading="lazy">
    </div>
</section>
