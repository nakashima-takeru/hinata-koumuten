<?php /* Template Name: 会社案内 */ ?>
<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Company</h1>
                <h2 class="heroCatch__lead">会社案内</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="section message">
        <div class="container">
            <div class="heading">
                <h2 class="heading__title"><span>Top Message</span></h2>
            </div>
            <div class="message__area">
                <h3 class="message__title">代表メッセージ</h3>
                <div class="message__column">
                    <div class="messageBox">
                        <p class="messageBox__text">この度は数ある住宅会社の中からひなた工務店にご興味をお持ちいただきまして、本当にありがとうございます。</p>
                        <p class="messageBox__text">私は運営会社である株式会社ピースホームの代表をしております福留秀和と申します。ひなた工務店は私の地元である宮崎県を元気にしたい！という想いから生まれたブランド名です。コロナ禍以降、住宅資材の高騰は止まるところを知らず毎年、ご家族念願のマイホームを手に入れるハードルは上がり続けています。そんな中、高品質で安心して暮らせる住まいを1人でも多くの方々に提供することで、地元に恩返しをしたい！と日夜考え続けた中で完成したのが「ひなた工務店の家」です。<br>住宅設計を徹底的に合理化することで、無駄のないシンプルな外観と使い勝手の良い間取りが共存し、コストを抑えつつも決して大手ハウスメーカーの住宅に引けをとらない安心の性能と保証を強化しました。</p>
                        <p class="messageBox__text">地震大国日本において、日常的に生じるレベルの小さな揺れから数年〜数十年に一度の大きな地震から家と家族を守る制振金物も標準装備。また家計と環境に優しい太陽光発電システムを標準装備とし、高騰する電気料金の負担も長期間にわたって抑えることを目指しました。これまで20年以上にわたり、地元宮崎で家づくりに向き合ってきた中で積み上げてきた知恵とノウハウのすべてを注ぎ込み、マイホームをあきらめかけていた方々にもう一度、夢を手に入れる！というワクワクを感じてほしいと強く願っています。</p>
                        <p class="messageBox__text">先の見えない複雑な現代において、一筋の光となり、宮崎県から全国に元気を発信できるひなたになりたい！そんな強い想いと自信をもってご提案します。</p>
                    </div>
                    <div class="messageBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/ceo.jpg" alt="">
                        <p class="messageBox__name"><span>Peace Home 創業者</span><br>福留 秀和</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section outline">
        <div class="container">
            <div class="heading">
                <h2 class="heading__title"><span>Outline</span></h2>
            </div>
            <div class="outline__area">
                <dl class="outelineBox">
                    <dt class="outlineBox__title">商号</dt>
                    <dd class="outlineBox__word">株式会社ピースホーム</dt>
                </dl>
                <dl class="outelineBox">
                    <dt class="outlineBox__title">事業内容</dt>
                    <dd class="outlineBox__word">建築、設計、不動産業、保険代理店業</dt>
                </dl>
                <dl class="outelineBox">
                    <dt class="outlineBox__title">登録</dt>
                    <dd class="outlineBox__word">建設業許可番号 宮崎県知事許可(般-2)第12805号</dt>
                </dl>
                <dl class="outelineBox">
                    <dt class="outlineBox__title">設立年</dt>
                    <dd class="outlineBox__word">昭和57年4月</dt>
                </dl>
                <dl class="outelineBox">
                    <dt class="outlineBox__title">関連会社</dt>
                    <dd class="outlineBox__word">エコロ有限会社<br>有限会社リアルナンニチ</dt>
                </dl>
                <dl class="outelineBox">
                    <dt class="outlineBox__title">従業員数</dt>
                    <dd class="outlineBox__word">32名（令和5年4月1日）</dt>
                </dl>
                <dl class="outelineBox">
                    <dt class="outlineBox__title">本社</dt>
                    <dd class="outlineBox__word">宮崎県宮崎市江平西1丁目1-21</dt>
                </dl>
                <dl class="outelineBox">
                    <dt class="outlineBox__title">都城スタジオ</dt>
                    <dd class="outlineBox__word">宮崎県都城市上川東1-12-5</dt>
                </dl>
                <dl class="outelineBox">
                    <dt class="outlineBox__title">小林スタジオ</dt>
                    <dd class="outlineBox__word">宮崎県小林市細野466-8</dt>
                </dl>
            </div>
        </div>
    </section>

    <section class="section shoplist">
        <div class="container">
            <div class="heading">
                <h2 class="heading__title"><span>Shop List</span></h2>
            </div>
            <div class="shoplist__area">
                <dl class="shoplistBox">
                    <dt class="shoplistBox__title"><span>宮崎大橋店</span></dt>
                    <dd class="shoplistBox__word">
                        〒880-0022<br />宮崎県宮崎市大橋2丁目142-1<br />
                        電話　<a href="tel:0985-41-5233">0985-41-5233</a><br />
                        営業時間　9:30〜18:00<br />
                        定休日　火曜日・水曜日
                    </dd>
                </dl>
                <dl class="shoplistBox">
                    <dt class="shoplistBox__title"><span>都城上川東店</span></dt>
                    <dd class="shoplistBox__word">
                        〒885-0012<br />宮崎県都城市上川東3丁目8-1<br />
                        電話　<a href="tel:0986-36-8000">0986-36-8000</a><br />
                        営業時間　9:30〜18:00<br />
                        定休日　火曜日・水曜日
                    </dd>
                </dl>
            </div>
            <?php /*
            <div class="shoplist__more">
                <div class="buttonMore">
                    <a href="<?php echo home_url("shoplist"); ?>" class="buttonMore__orange">店舗一覧へ</a>
                </div>
            </div>
            */ ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>