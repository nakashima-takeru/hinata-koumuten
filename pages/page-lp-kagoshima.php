<?php /* Template Name: LP 鹿児島店 */ ?>
<?php get_header('lp'); ?>
<?php $lp_img = get_template_directory_uri() . '/assets/images/lp-kagoshima'; ?>

<main class="lpKagoshima">

    <!-- FV -->
    <section class="lpFv">
        <div class="lpFv__visual">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/fv_house_sp.webp" width="375" height="172">
                <img class="lpFv__house" src="<?php echo $lp_img; ?>/fv_house.webp" alt="ひなた工務店 鹿児島店のモデルハウス（二階建て・平屋）" width="1440" height="606" fetchpriority="high">
            </picture>
            <div class="lpFv__badge">
                <p class="lpFv__badgeMain">
                    <span class="lpFv__badgeNum"><img src="<?php echo $lp_img; ?>/fv_badge_num.svg" alt="2" width="30" height="52"></span>
                    <span class="lpFv__badgeText">
                        <span class="lpFv__badgeSub">店舗併設モデルハウスも</span>
                        <span class="lpFv__badgeLead">棟同時オープン</span>
                    </span>
                </p>
                <p class="lpFv__badgeNote">平屋・二階建てを<br class="lpSp">一度にご覧いただけます！</p>
            </div>
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/fv_house_roof_sp.webp" width="375" height="172">
                <img class="lpFv__roof" src="<?php echo $lp_img; ?>/fv_house_roof.webp" alt="" width="393" height="110" aria-hidden="true">
            </picture>
        </div>
        <div class="lpFv__bg" aria-hidden="true"></div>

        <div class="lpFv__content">
            <hgroup class="lpFv__head">
                <p class="lpFv__store">ひなた工務店 鹿児島店</p>
                <h1 class="lpFv__title">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/fv_title_sp.svg" width="343" height="38">
                        <img src="<?php echo $lp_img; ?>/fv_title.svg" alt="GRAND OPEN" width="899" height="93">
                    </picture>
                </h1>
                <p class="lpFv__date">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/fv_date_sp.svg" width="127" height="27">
                        <img src="<?php echo $lp_img; ?>/fv_date.svg" alt="2026.12" width="226" height="47">
                    </picture>
                </p>
            </hgroup>
            <p class="lpFv__copy">鹿児島のみなさん、はじめまして！<br>「いつかはマイホームを」<br>そんな気持ちを、ちょっとふくらませに来ませんか？</p>
            <a class="lpButton" href="#reserve">パンフレット・<br class="lpSp">オープン情報を受け取る</a>
        </div>
    </section>

    <!-- 来場予約特典バナー -->
    <?php get_template_part('includes/part-lp-banner'); ?>

    <!-- ひなた工務店とは？ -->
    <?php
    $about_slides = [
        // 左列（下から上へ流れる）
        'up'   => [['l1', 600, 800], ['l2', 600, 450], ['l3', 600, 400], ['l4', 600, 400], ['l5', 600, 600]],
        // 右列（上から下へ流れる）
        'down' => [['r1', 600, 400], ['r2', 600, 400], ['r3', 600, 800], ['r4', 600, 450], ['r5', 600, 400]],
    ];
    ?>
    <section class="lpAbout">
        <div class="lpAbout__body">
            <?php get_template_part('includes/part-lp-section-title', null, ['title' => 'ひなた工務店とは？']); ?>
            <div class="lpAbout__textWrap">
                <div class="lpAbout__text">
                    <p>株式会社ピースホーム<small class="lpAbout__mark">※</small>を母体に持つ、地域密着型の工務店です。</p>
                    <p>500棟を超えるノウハウを活かしつつ、<br>より<strong>価格を抑えた無駄のない設計を得意</strong>としています。</p>
                    <p>2024年10月より宮崎を拠点に住まいを提供しておりましたが、<br>この度、鹿児島にも新店舗をオープンいたしました！</p>
                    <p>鹿児島のみなさんの「こんな暮らしがしたい！」を、ぜひお聞かせください。</p>
                </div>
                <p class="lpAbout__note"><span>※</span><span>株式会社ピースホームは宮崎県で20年以上、「建築家とつくるデザイン性の高い注文住宅」を<br>手がけてきたハウスメーカーです。</span></p>
            </div>
        </div>
        <div class="lpAbout__slider" aria-hidden="true">
            <?php foreach ($about_slides as $dir => $slides) : ?>
                <div class="swiper lpAbout__swiper js-lpAboutSwiper" data-direction="<?php echo esc_attr($dir); ?>">
                    <div class="swiper-wrapper">
                        <?php foreach ($slides as [$name, $w, $h]) : ?>
                            <div class="swiper-slide lpAbout__slide">
                                <img src="<?php echo $lp_img; ?>/about_<?php echo $name; ?>.webp" alt="" width="<?php echo $w; ?>" height="<?php echo $h; ?>" loading="lazy">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ひなた工務店とは？の写真（SPのみ：2段の横スライダー。上段は右→左、下段は左→右に流れる） -->
    <div class="lpAboutSp lpSp" aria-hidden="true">
        <?php foreach (['left' => $about_slides['up'], 'right' => $about_slides['down']] as $dir => $slides) : ?>
            <div class="swiper lpAboutSp__swiper js-lpAboutSwiperSp" data-direction="<?php echo esc_attr($dir); ?>">
                <div class="swiper-wrapper">
                    <?php foreach ($slides as [$name, $w, $h]) : ?>
                        <div class="swiper-slide lpAboutSp__slide">
                            <img src="<?php echo $lp_img; ?>/about_<?php echo $name; ?>.webp" alt="" width="<?php echo $w; ?>" height="<?php echo $h; ?>" loading="lazy">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- CTA：先行案内 受付中！ -->
    <?php get_template_part('includes/part-lp-cta'); ?>

    <!-- ひなた工務店の強み -->
    <section class="lpStrength" id="strength">
        <div class="lpStrength__inner">
            <div class="lpStrength__intro">
                <?php get_template_part('includes/part-lp-section-title', null, ['title' => 'ひなた工務店の強み']); ?>
                <p class="lpStrength__catch">高い標準仕様が強みです。<br>価格と品質のバランス・納得感には自信があります！</p>
            </div>

            <div class="lpStrength__list">

                <!-- 1. ZEH -->
                <article class="lpStrCard">
                    <img class="lpStrCard__badge" src="<?php echo $lp_img; ?>/str_badge1.svg" alt="1" width="130" height="130">
                    <div class="lpStrCard__head">
                        <p class="lpStrCard__lead">使うエネルギーを減らして、<br class="lpSp">必要なエネルギーをつくる</p>
                        <div class="lpStrCard__titleRow">
                            <h3 class="lpStrCard__title">ZEH</h3>
                            <span class="lpStrCard__sub">（ゼッチ／ネット・ゼロ・エネルギーハウス）</span>
                        </div>
                    </div>
                    <div class="lpStrCard__block">
                        <h4 class="lpStrCard__h4">国が策定した未来基準の住宅</h4>
                        <p class="lpStrCard__text">ZEH（ゼッチ）とは「NET ZERO ENERGY HOUSE」の略で、住まいの「断熱性」と「省エネルギー性」を上げることと、太陽光発電などにより「エネルギーを創る」ハイレベルな省エネ＋創エネ住宅のことを言います。家庭で年間を通して使用する1次エネルギー消費量の収支をゼロとすることを目指した、国が策定した未来基準の住宅です。</p>
                    </div>
                    <picture><source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/str_zeh_sp.svg"><img class="lpStrCard__zeh" src="<?php echo $lp_img; ?>/str_zeh.svg" alt="一次エネルギー消費 −（断熱 ＋ 省エネ ＋ 創エネ）≦ 0（住まいの1年間の消費エネルギー）" width="950" height="218" loading="lazy"></picture>
                </article>

                <!-- 2. 太陽光 -->
                <article class="lpStrCard">
                    <img class="lpStrCard__badge" src="<?php echo $lp_img; ?>/str_badge2.svg" alt="2" width="130" height="130">
                    <div class="lpStrCard__head">
                        <p class="lpStrCard__lead">電力を自ら生み出すことで、<br class="lpSp">家計が楽になる</p>
                        <div class="lpStrCard__titleRow">
                            <h3 class="lpStrCard__title">太陽光</h3>
                            <span class="lpStrCard__tag">4.35kW搭載</span>
                            <span class="lpStrCard__sub">（Re.RISE-NBC 435）</span>
                        </div>
                    </div>
                    <h4 class="lpStrCard__h4">家計にやさしい、理由がある</h4>
                    <div class="lpStrSolar">
                        <div class="lpStrSolar__body">
                            <div class="lpStrCard__block lpStrCard__block--24">
                                <p class="lpStrCard__bar lpStrCard__bar--split"><span>維持コストを抑えた、</span><span>家計にやさしい標準仕様</span></p>
                                <p class="lpStrCard__text">高気密・高断熱の基本性能に加えて、太陽光発電システムも標準装備！<br>年々高騰する電気料金をおさえるだけでなく、自ら生み出すことで、長く住めば住むほど家計が楽になる家。</p>
                            </div>
                            <div class="lpStrSolar__warranty">
                                <div class="lpStrSolar__warrantyHead">
                                    <p class="lpStrCard__h4">安心の保証体制。</p>
                                    <p class="lpStrSolar__warrantyLead">製品保証とリニア出力保証で、ずっと安心。</p>
                                </div>
                                <ul class="lpStrSolar__boxes">
                                    <li class="lpStrSolar__box"><span>製品保証：<em>30年</em></span></li>
                                    <li class="lpStrSolar__box">
                                        <span>リニア出力保証：<em>30年</em></span>
                                        <small>1年目：<em>99.0％</em></small>
                                        <small>2年目以降：<em>-0.35％／年</em></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="lpStrSolar__img">
                            <img src="<?php echo $lp_img; ?>/str_solar.webp" alt="太陽光パネルとパワーコンディショナ（Qcells）" width="326" height="345" loading="lazy">
                        </div>
                    </div>
                </article>

                <!-- 3. 断熱 -->
                <article class="lpStrCard">
                    <img class="lpStrCard__badge" src="<?php echo $lp_img; ?>/str_badge3.svg" alt="3" width="130" height="130">
                    <div class="lpStrCard__head">
                        <p class="lpStrCard__lead">高性能樹脂サッシと断熱材で、<br class="lpSp">一年中快適に</p>
                        <div class="lpStrCard__titleRow">
                            <h3 class="lpStrCard__title">高い断熱性能</h3>
                        </div>
                    </div>
                    <div class="lpStrCard__cols">
                        <div class="lpStrCard__col lpStrCard__col--gap24">
                            <div class="lpStrCard__block">
                                <h4 class="lpStrCard__h4">高性能樹脂サッシで<br>夏は涼しく、冬は暖かく</h4>
                                <p class="lpStrCard__text">熱の出入りが大きい「窓」だからこそ、断熱性能に優れた高性能樹脂サッシ「APW 330」を採用。<br>外気の影響を抑え、一年を通して快適で、冷暖房効率のよい住まいを目指します。</p>
                            </div>
                            <picture><source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/str_c3_rate_sp.webp"><img src="<?php echo $lp_img; ?>/str_c3_rate.webp" alt="アルミスペーサー仕様 熱貫流率1.37W/（㎡・K）たてすべり出し窓＋FIX連窓［16513サイズ］Low-E複層ガラス ブルー・アルゴンガス入 ＊1 窓の熱貫流率（JIS A 4710:2015に基づいた社内試験値）" width="463" height="251" loading="lazy"></picture>
                        </div>
                        <div class="lpStrCard__col">
                            <picture><source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/str_c3_sash_sp.webp"><img src="<?php echo $lp_img; ?>/str_c3_sash.webp" alt="APW330の断面図：Low-E複層ガラス、アルゴンガス（熱伝導率が低く断熱効果アップ・空気の1.5倍）、アルミスペーサー、樹脂フレーム（結露の発生を軽減）" width="463" height="475" loading="lazy"></picture>
                        </div>
                    </div>
                    <picture><source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/str_c3_thermo_sp.webp"><img src="<?php echo $lp_img; ?>/str_c3_thermo.webp" alt="室外温度35℃・室内温度25℃での比較（試験値）：アルミ（複層ガラス）はガラス中央部の表面温度34℃・下框の表面温度44℃、APW330はガラス中央部28℃・下框31℃" width="950" height="315" loading="lazy"></picture>
                    <hr class="lpStrCard__divider">
                    <div class="lpStrCard__col lpStrCard__col--gap24">
                        <div class="lpStrCard__block">
                            <h4 class="lpStrCard__h4">断熱材には「アクアフォーム」を採用<br>隙間なく施工し、高断熱・高遮音を実現</h4>
                            <p class="lpStrCard__text">アクアフォームは硬質ウレタンフォームを水の力で発泡し、吹付施工する断熱材です。<br>従来のグラスウールなどの断熱材は施工部分に合わせカットするため、隙間ができてしまうことがありましたが、アクアフォームでは隙間なく施工することができ、安定した断熱効果を得ることができます。<br>また、隙間が生じないため、外部の騒音を遮断し、内部の生活音をシャットアウトすることで、騒音の少ないプライベート空間を維持することができます。</p>
                        </div>
                        <div class="lpStrCard__cols">
                            <picture><source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/str_c3_house_sp.webp"><img src="<?php echo $lp_img; ?>/str_c3_house.webp" alt="高い断熱性をサーモグラフィーで検証：小屋裏で約5℃の差（一般の断熱工法38.5℃、アクアフォーム33.5℃）" width="463" height="299" loading="lazy"></picture>
                            <img src="<?php echo $lp_img; ?>/str_c3_photo.webp" alt="アクアフォームの吹付施工の様子" width="463" height="298" loading="lazy">
                        </div>
                    </div>
                </article>

                <!-- 4. 制震金物 -->
                <article class="lpStrCard">
                    <img class="lpStrCard__badge" src="<?php echo $lp_img; ?>/str_badge4.svg" alt="4" width="130" height="130">
                    <div class="lpStrCard__head">
                        <p class="lpStrCard__lead">優れた制震性能で<br class="lpSp">揺れを95％以上抑える</p>
                        <div class="lpStrCard__titleRow">
                            <h3 class="lpStrCard__title">制震金物</h3>
                            <span class="lpStrCard__sub">（ダイナミックファスナー）</span>
                        </div>
                    </div>
                    <div class="lpStrCard__cols lpStrCard__cols--side">
                        <div class="lpStrCard__col lpStrCard__col--gap24">
                            <h4 class="lpStrCard__h4">震度7クラスの揺れを95％以上<br class="lpSp">抑える<sup class="lpStrCard__sup">＊1＊2＊3</sup><br>繰り返し起きる地震にも対応</h4>
                            <p class="lpStrCard__text">ダイナミックファスナーはゴム系ダンパーと金属系ダンパーの良いとこ取りをしたハイブリッド構造の制震ダンパーです。<br>震度4までの地震に対しては、金属ダンパーの内側と外側を覆った高減衰ゴムの「粘性減衰」により地震エネルギーを吸収。<br>震度4以上になると、金属を立体化させた8本のブリッジとハネが地震エネルギーを吸収します。<br>そのため、このダイナミックファスナーを設置するだけで、もともとの耐震要素として働く筋かいが、地震による揺れを95％以上抑える高性能な制震ダンパーとして機能します。</p>
                            <p class="lpStrCard__note">＊1 兵庫県南部地震の震度7クラスの821ガル・92.2カインの原波で算出。　＊2 取付個数と追加筋かい本数により数値は変わります。　＊3 筋かい併用での計算。</p>
                        </div>
                        <img class="lpStrCard__sideImg" src="<?php echo $lp_img; ?>/str_c4_damper.webp" alt="制震ダンパー「ダイナミックファスナー」" width="278" height="370" loading="lazy">
                    </div>
                </article>

                <!-- 5. ひのき土台 -->
                <article class="lpStrCard lpStrCard--5">
                    <img class="lpStrCard__badge" src="<?php echo $lp_img; ?>/str_badge5.svg" alt="5" width="130" height="130">
                    <div class="lpStrCard__head">
                        <p class="lpStrCard__lead">防虫性・耐久性に優れた、<br class="lpSp">人と環境にやさしい素材</p>
                        <div class="lpStrCard__titleRow">
                            <h3 class="lpStrCard__title">ひのき土台</h3>
                        </div>
                    </div>
                    <div class="lpStrCard__cols lpStrCard__cols--side lpStrCard__cols--gap40">
                        <div class="lpStrCard__col lpStrCard__col--gap24">
                            <p class="lpStrCard__bar lpStrCard__bar--split"><span>ひなた工務店がひのき土台を採用した</span><span>4つの理由</span></p>
                            <ol class="lpStrReason">
                                <li class="lpStrReason__item">
                                    <div class="lpStrReason__head">
                                        <img class="lpStrReason__num" src="<?php echo $lp_img; ?>/str_num01.svg" alt="01." width="29" height="18">
                                        <h5 class="lpStrReason__title">天然の防虫効果</h5>
                                    </div>
                                    <p class="lpStrCard__text">ひのきはその天然の特性により、優れた防虫効果があり、建材に使用することで虫の侵入を防ぐことが期待できます。</p>
                                </li>
                                <li class="lpStrReason__item">
                                    <div class="lpStrReason__head">
                                        <img class="lpStrReason__num" src="<?php echo $lp_img; ?>/str_num02.svg" alt="02." width="29" height="18">
                                        <h5 class="lpStrReason__title">化学薬品によるアレルギーの<br class="lpSp">リスク</h5>
                                    </div>
                                    <p class="lpStrCard__text">多くの防虫剤や建材には化学薬品が含まれており、これらの成分が原因でアレルギー反応を引き起こす恐れがあります。ひのきは天然素材であるため、アレルギーのリスクを低減します。</p>
                                </li>
                                <li class="lpStrReason__item">
                                    <div class="lpStrReason__head">
                                        <img class="lpStrReason__num" src="<?php echo $lp_img; ?>/str_num03.svg" alt="03." width="29" height="18">
                                        <h5 class="lpStrReason__title">環境への配慮</h5>
                                    </div>
                                    <p class="lpStrCard__text">ひのきは再生可能な資源であり、持続可能な森林管理の下で育成されていることが多いです。これにより、環境への負荷を減らし、エコフレンドリーな選択肢となります。</p>
                                </li>
                                <li class="lpStrReason__item">
                                    <div class="lpStrReason__head">
                                        <img class="lpStrReason__num" src="<?php echo $lp_img; ?>/str_num04.svg" alt="04." width="29" height="18">
                                        <h5 class="lpStrReason__title">耐久性</h5>
                                    </div>
                                    <p class="lpStrCard__text">ひのきはその優れた耐久性も特徴であり、湿気や腐食に強く、設置してから強度が増していく特徴があります。</p>
                                </li>
                            </ol>
                        </div>
                        <img class="lpStrCard__sideImg" src="<?php echo $lp_img; ?>/str_c5_forest.webp" alt="ひのきの森" width="278" height="370" loading="lazy">
                    </div>
                </article>

                <!-- 6. 適正価格 -->
                <article class="lpStrCard">
                    <img class="lpStrCard__badge" src="<?php echo $lp_img; ?>/str_badge6.svg" alt="6" width="130" height="130">
                    <div class="lpStrCard__head">
                        <p class="lpStrCard__lead">建てたあとも<br class="lpSp">家族が安心して暮らせる金額</p>
                        <div class="lpStrCard__titleRow">
                            <h3 class="lpStrCard__title">安心な適正価格</h3>
                        </div>
                    </div>
                    <div class="lpStrCard__cols lpStrCard__cols--side lpStrCard__cols--gap40">
                        <div class="lpStrCard__col lpStrCard__col--gap24">
                            <h4 class="lpStrCard__h4">最初の予算と、最後の金額を、<br>できるだけ近く。</h4>
                            <p class="lpStrCard__text">家づくりでは、打ち合わせを進めるうちにオプションや追加工事が増え、当初の想定を大きく超えてしまうことがあります。<br>ひなた工務店では、家づくりに必要となるものをあらかじめ整理し、できる限り総額が分かりやすい価格設定を目指しています。<br>変更がある場合もその都度確認し、最初の想定と最終的な金額の差をできるだけ小さくすることを大切にしています。</p>
                        </div>
                        <div class="lpStrPrice">
                            <ul class="lpStrPrice__list">
                                <li>必要な仕様を最初から整理</li>
                                <li>変更内容と金額を都度確認</li>
                                <li>最初と最後のギャップを<br class="lpSp">小さく</li>
                            </ul>
                            <img class="lpStrPrice__illust" src="<?php echo $lp_img; ?>/str_c6_illust.webp" alt="" width="158" height="97" loading="lazy">
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- お店で相談できること -->
    <section class="lpConsult" id="consult">
        <div class="lpConsult__hero">
            <picture><source media="(max-width: 767px)" srcset="<?php echo $lp_img; ?>/consult_photo_sp.webp"><img class="lpConsult__heroImg" src="<?php echo $lp_img; ?>/consult_photo.webp" alt="" width="1440" height="490" loading="lazy"></picture>
            <div class="lpConsult__heroPanel">
                <?php get_template_part('includes/part-lp-section-title', null, ['title' => 'お店で相談できること']); ?>
            </div>
        </div>

        <div class="lpConsult__body">
            <p class="lpConsult__lead">お金・土地・間取りの3つのテーマで紹介します。</p>

            <ul class="lpConsult__themes">
                <li class="lpConsultTheme">
                    <p class="lpConsultTheme__label"><span>お金</span>のこと</p>
                    <img class="lpConsultTheme__img" src="<?php echo $lp_img; ?>/consult_money.svg" alt="家と電卓のあいだで考える人のイラスト" width="280" height="170" loading="lazy">
                    <div class="lpConsultTheme__body">
                        <h3 class="lpConsultTheme__title">今の家賃と比べると、<br>どうなる？</h3>
                        <p class="lpConsultTheme__text">建物だけでなく、土地や外構なども含めた予算を一緒に整理。<br>無理のない家づくりの予算シミュレーションを行います。</p>
                    </div>
                </li>
                <li class="lpConsultTheme">
                    <p class="lpConsultTheme__label"><span>土地</span>のこと</p>
                    <img class="lpConsultTheme__img" src="<?php echo $lp_img; ?>/consult_land.svg" alt="家族で地図を見ながら土地を探すイラスト" width="280" height="170" loading="lazy">
                    <div class="lpConsultTheme__body">
                        <h3 class="lpConsultTheme__title">このエリアに<br>住みたい！</h3>
                        <p class="lpConsultTheme__text">ご希望の場所や広さ、予算感を伺いながら、土地探しの進め方をご案内します。</p>
                    </div>
                </li>
                <li class="lpConsultTheme">
                    <p class="lpConsultTheme__label"><span>間取り</span>のこと</p>
                    <img class="lpConsultTheme__img" src="<?php echo $lp_img; ?>/consult_plan.svg" alt="間取り図を囲む人のイラスト" width="280" height="170" loading="lazy">
                    <div class="lpConsultTheme__body">
                        <h3 class="lpConsultTheme__title">平屋がいい、<br>家事をラクにしたい</h3>
                        <p class="lpConsultTheme__text">好きなデザインも、暮らしのこだわりも。<br>暮らしにフィットする間取りをご提案します。</p>
                    </div>
                </li>
            </ul>

            <div class="lpConsult__other">
                <div class="lpConsult__otherBody">
                    <p class="lpConsult__bar">その他何でもご相談ください！</p>
                    <ul class="lpConsult__checks">
                        <li>家づくりを考え始めたばかり</li>
                        <li>まずは予算を知りたい</li>
                        <li>ほかの会社も見ながら検討したい</li>
                    </ul>
                    <p class="lpConsult__otherNote">そんな方も、どうぞお気軽に。</p>
                </div>
                <div class="lpConsult__kids">
                    <img src="<?php echo $lp_img; ?>/consult_kids.svg" alt="" width="42" height="42">
                    <p class="lpConsult__kidsTitle">キッズスペース併設</p>
                    <p class="lpConsult__kidsText">お子様連れでもゆっくり<br>ご相談いただけます。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA：先行案内 受付中！ -->
    <?php get_template_part('includes/part-lp-cta'); ?>

    <!-- 店舗情報・アクセス -->
    <section class="lpShop" id="access">
        <div class="lpShop__inner">
            <?php get_template_part('includes/part-lp-section-title', null, ['title' => '店舗情報・アクセス']); ?>
            <div class="lpShop__img">
                <img src="<?php echo $lp_img; ?>/shop_photo.webp" alt="ひなた工務店 鹿児島店の店舗併設モデルハウス" width="1080" height="430" loading="lazy">
            </div>
            <dl class="lpShop__table">
                <div class="lpShop__row">
                    <dt>オープン予定</dt>
                    <dd>2026年12月</dd>
                </div>
                <div class="lpShop__row">
                    <dt>営業時間</dt>
                    <dd>9:00〜18:00</dd>
                </div>
                <div class="lpShop__row">
                    <dt>定休日</dt>
                    <dd>〇〇〇〇〇〇</dd>
                </div>
                <div class="lpShop__row">
                    <dt>店舗住所</dt>
                    <dd>
                        <p>〒890-0073<br>鹿児島県鹿児島市〇〇丁目〇〇番〇〇</p>
                        <div class="lpShop__map">
                            <?php /* Googleマップの埋め込みコード（iframe）をここに貼り付け */ ?>
                        </div>
                    </dd>
                </div>
                <div class="lpShop__row">
                    <dt>駐車場</dt>
                    <dd>敷地内の駐車場をお使いください。</dd>
                </div>
                <div class="lpShop__row">
                    <dt>その他</dt>
                    <dd>キッズスペース有</dd>
                </div>
            </dl>
        </div>
    </section>

    <!-- 来場予約特典バナー -->
    <?php get_template_part('includes/part-lp-banner'); ?>

    <!-- 資料請求 -->
    <section class="lpReserve" id="reserve">
        <div class="lpReserve__inner">
            <?php get_template_part('includes/part-lp-section-title', null, ['title' => '資料請求']); ?>
            <p class="lpReserve__lead catalogForm__word">下記フォームに必要項目をご入力ください<br><span>「*」の 必須項目</span>は必ずご入力ください。</p>
            <div class="lpReserve__form catalogForm__area">
                <?php echo do_shortcode('[contact-form-7 id="b0b3337" title="資料請求"]'); ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer('lp'); ?>
