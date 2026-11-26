<?php /* Template Name: コンセプト */ ?>
<?php get_header(); ?>
<?php $img = get_template_directory_uri() . '/assets/images/concept/'; ?>
<?php $sp = $img . 'sp/'; ?>

<main class="main cpMain">
    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <!-- MV -->
    <section class="cpMv">
        <div class="cpMv__inner">
            <p class="cpMv__en">OUR VALUES</p>
            <p class="cpMv__sub">“好きな家に手が届く”を叶えるために</p>
            <h1 class="cpMv__title">ひなた工務店が<br class="cp-sp">大切にすること</h1>
            <div class="cpMv__text">
                <p>無理のない価格。でも、安心はしっかり。</p>
                <p>私たちが考える「いい家」の条件とは、建てるときも、住み始めてからも、家族が笑顔で暮らし続けられること。</p>
                <p>そのために、ひなた工務店では家づくりの一つひとつに「採用する理由」があります。</p>
            </div>
        </div>
    </section>

    <!-- Anchor -->
    <section class="cpAnchor">
        <div class="cpAnchor__image">
            <img src="<?php echo $img; ?>anchor_photo.jpg" alt="ソファでくつろぐ家族" width="1024" height="682">
        </div>
        <ul class="cpAnchor__list">
            <?php
            $anchors = [
                ['01', '安心な適正価格', 'price'],
                ['02', '高性能な標準仕様', 'standard'],
                ['03', '自由設計', 'plan'],
                ['04', 'スムーズな家づくり', 'flow'],
                ['05', 'アフターフォロー', 'after'],
            ];
            foreach ($anchors as $a) : ?>
                <li>
                    <a class="cpAnchor__btn" href="#<?php echo $a[2]; ?>">
                        <span class="cpAnchor__num"><?php echo $a[0]; ?></span>
                        <span class="cpAnchor__label"><?php echo $a[1]; ?></span>
                        <span class="cpAnchor__arrow" aria-hidden="true"></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- 01 Price -->
    <section class="cpSection cpSection--gray" id="price">
        <div class="cpContainer">
            <div class="cpHead">
                <div class="cpHead__main">
                    <div class="cpHead__group">
                        <p class="cpHead__en">OUR PRICE</p>
                        <h2 class="cpHead__title"><span class="cpHead__num">01</span><span class="cpHead__ja"><span class="cp-only-pc">安心な適正価格</span><span class="cp-only-sp">安心価格</span></span></h2>
                    </div>
                    <p class="cpHead__catch"><span class="cp-only-pc">最初の予算と、最後の金額を、できるだけ近く。</span><span class="cp-only-sp">最初の予算と最後の金額を、<br>できるだけ近く。</span></p>
                </div>
                <div class="cpHead__illust cpHead__illust--lead">
                    <div class="cpIllustPrice">
                        <img class="cpIllustPrice__d" src="<?php echo $img; ?>price_illust_d.svg" alt="">
                        <img class="cpIllustPrice__f" src="<?php echo $img; ?>price_illust_f.svg" alt="">
                        <img class="cpIllustPrice__g" src="<?php echo $img; ?>price_illust_g.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="cpLead cp-only-pc">
                <p class="cpLead__strong">「この金額なら建てられる」と思ったのに。<br>気づけば、最初に聞いていた金額を大きく超えている。そんな不安をなくしたいから。</p>
                <div class="cpLead__body">
                    <p>家づくりでは、打ち合わせを進めるうちにオプションや追加工事が増え、当初の想定を大きく超えてしまうことがあります。<br>ひなた工務店では、家づくりに必要となるものをあらかじめ整理し、できる限り総額が分かりやすい価格設定を目指しています。</p>
                    <p>大切なのは、「家を建てられる金額」ではなく、「建てたあとも家族が安心して暮らせる金額」であること。<br>住宅ローンだけにとらわれず、旅行や趣味、子どもの教育、将来の貯蓄まで考えた家づくりをご提案します。</p>
                </div>
            </div>
            <div class="cpLead cpLead--afterIllust cp-only-sp">
                <p class="cpLead__strong">「この金額なら建てられる」と<br>思ったのに。気づけば、最初に聞いていた金額を大きく超えている。<br>そんな不安をなくしたいから。</p>
                <div class="cpLead__body">
                    <p>家づくりでは、打ち合わせを進めるうちにオプションや追加工事が増え、当初の想定を大きく超えてしまうことがあります。<br>ひなた工務店では、家づくりに必要となるものをあらかじめ整理し、できる限り総額が分かりやすい価格設定を目指しています。</p>
                    <p>大切なのは、「家を建てられる金額」ではなく、<br>「建てたあとも家族が安心して暮らせる金額」であること。<br>住宅ローンだけにとらわれず、旅行や趣味、<br>子どもの教育、将来の貯蓄まで考えた家づくりをご提案します。</p>
                </div>
            </div>

            <div class="cpPrice">
                <div class="cpPrice__tables">
                    <?php
                    $tables = [
                        ['よくある家づくり', 'is-normal', ['1,900', '200', '180', '150', '2,430']],
                        ['ひなた工務店', 'is-hinata', ['1,900', '80', '0', '0', '1,980']],
                    ];
                    $rows = ['最初の見積', '設備変更', 'オプション', '追加工事', '最終価格'];
                    foreach ($tables as $t) : ?>
                        <div class="cpPriceTable <?php echo $t[1]; ?>">
                            <p class="cpPriceTable__head">
                                <?php if ($t[1] === 'is-hinata') : ?><img src="<?php echo $img; ?>icon_hinata.svg" alt="" width="24" height="24"><?php endif; ?>
                                <?php echo $t[0]; ?>
                            </p>
                            <dl class="cpPriceTable__list">
                                <?php foreach ($rows as $i => $label) : ?>
                                    <div class="cpPriceTable__row<?php echo $i === 4 ? ' is-total' : ''; ?>">
                                        <dt><?php echo $label; ?></dt>
                                        <dd><?php if ($i > 0 && $i < 4) : ?><span class="cpPriceTable__plus">＋</span><?php endif; ?><span class="cpPriceTable__num"><?php echo $t[2][$i]; ?></span><span class="cpPriceTable__unit">万円</span></dd>
                                    </div>
                                <?php endforeach; ?>
                            </dl>
                        </div>
                    <?php endforeach; ?>
                </div>
                <span class="cpPrice__arrow" aria-hidden="true"></span>
                <div class="cpPrice__point cpBox">
                    <ul class="cpCheckList">
                        <li>必要な仕様を最初から整理</li>
                        <li>変更内容と金額を都度確認</li>
                        <li>最初と最後のギャップを小さく</li>
                    </ul>
                    <img class="cpPrice__people" src="<?php echo $img; ?>price_people.png" alt="" width="158" height="97">
                </div>
            </div>

            <div class="cpResult cpBox">
                <p class="cpResult__text">
                    <span class="cpResult__line1">施工実績<span class="cpResult__num">000</span>棟のうち</span>
                    <span class="cpResult__line2"><span class="cpResult__num cpResult__num--lg">000</span>棟が見積もりより低い総額で<br class="cp-sp">建てています！</span>
                </p>
                <div class="cpPie" role="img" aria-label="75%">
                    <span class="cpPie__value">75<small>%</small></span>
                </div>
            </div>

            <div class="cpBtnWrap cp-only-pc">
                <a class="cpBtn" href="<?php echo esc_url(home_url('/lineup/')); ?>">ひなた工務店の価格プランを見る</a>
            </div>
        </div>
    </section>

    <!-- 02 Standard -->
    <section class="cpSection" id="standard">
        <div class="cpContainer">
            <div class="cpHead">
                <div class="cpHead__main">
                    <div class="cpHead__group">
                        <p class="cpHead__en">OUR STANDARD</p>
                        <h2 class="cpHead__title"><span class="cpHead__num">02</span><span class="cpHead__ja">家族を守る<br class="cp-sp">標準仕様</span></h2>
                    </div>
                    <p class="cpHead__catch">安心して暮らすための<br class="cp-sp">ものを、最初から。</p>
                </div>
            </div>
            <div class="cpLead cp-only-pc">
                <p class="cpLead__strong">家族が安全で快適に暮らすための設備がオプションだと、安心して暮らせないから。</p>
                <div class="cpLead__body">
                    <p>地震への備えも、毎日の心地よさも、これからの光熱費のことも。<br>宮崎で長く暮らしていくために必要だと考える性能や設備を、一つひとつ厳選して標準仕様にしています。<br>見えるところだけではなく、見えなくなるところまで、しっかりと。</p>
                    <p>価格は抑えても、安心まで削らない。これから何十年と続く家族の暮らしを守る家をお届けする。<br>それが、ひなた工務店の性能に対する考え方です。</p>
                </div>
            </div>
            <div class="cpLead cp-only-sp">
                <p class="cpLead__strong">家族が安全で快適に暮らすための<br>設備がオプションだと<br>安心して暮らせないから。</p>
                <div class="cpLead__body">
                    <p>地震への備えも、毎日の心地よさも、これからの光熱費のことも。<br>宮崎で長く暮らしていくために必要だと考える性能や設備を、<br>一つひとつ厳選して標準仕様にしています。<br>見えるところだけではなく、見えなくなるところまで、しっかりと。</p>
                    <p>価格は抑えても、安心まで削らない。<br>これから何十年と続く家族の暮らしを守る家をお届けする。<br>それが、ひなた工務店の性能に対する考え方です。</p>
                </div>
            </div>

            <?php
            $std_links = [
                ['zeh',    'eco',  'ZEH',                  'is-zeh'],
                ['solar',  'eco',  '太陽光',               'is-solar'],
                ['window', '断熱', '窓',                   'is-window'],
                ['damper', '耐震', '耐震ダンパー',         'is-damper'],
                ['hinoki', '安全', 'ひのき土台',           'is-hinoki'],
                ['aqua',   '断熱', '断熱材（アクアフォーム）', 'is-aqua'],
            ];
            ?>
            <div class="cpStdHouse">
                <div class="cpStdHouse__pc">
                    <img class="cpStdHouse__img" src="<?php echo $img; ?>std_house_base.png" alt="" width="647" height="721">
                    <svg class="cpStdHouse__lines" viewBox="0 0 1080 764" aria-hidden="true">
                        <line x1="140" y1="60" x2="397" y2="188" />
                        <line x1="942" y1="58" x2="722" y2="189" />
                        <line x1="140" y1="382" x2="316" y2="469" />
                        <line x1="940" y1="388" x2="743" y2="485" />
                        <line x1="142" y1="732" x2="290" y2="559" />
                        <line x1="931" y1="704" x2="811" y2="562" />
                    </svg>
                    <?php foreach ($std_links as $l) : ?>
                        <a class="cpStdBtn <?php echo $l[3]; ?>" href="#<?php echo $l[0]; ?>">
                            <span class="cpStdBtn__cat"><?php echo $l[1]; ?></span>
                            <span class="cpStdBtn__label"><?php echo $l[2]; ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="cpStdHouse__sp">
                    <img src="<?php echo $img; ?>std_house_sp.png" alt="" width="351" height="262">
                    <?php foreach ($std_links as $l) : ?>
                        <a class="cpStdHot <?php echo $l[3]; ?>" href="#<?php echo $l[0]; ?>"><span class="cp-visually-hidden"><?php echo $l[1] . ' ' . $l[2]; ?></span></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <p class="cpStdLead">国の定めた性能基準を<br class="cp-sp"><span>“標準で全棟クリア”</span><br class="cp-sp">しています</p>

            <!-- 家族のお金を守る -->
            <h3 class="cpBar">家族のお金を守る</h3>

            <div class="cpSpec cpBox" id="zeh">
                <div class="cpSpec__head">
                    <p class="cpSpec__sub">使うエネルギーを減らして、<br class="cp-sp">必要なエネルギーをつくる</p>
                    <div class="cpSpec__titleWrap">
                        <h4 class="cpSpec__title">ZEH</h4>
                        <span class="cpSpec__note">（ゼッチ／ネット・ゼロ・エネルギーハウス）</span>
                    </div>
                </div>
                <div class="cp-only-pc">
                    <p class="cpSpec__h">国が策定した未来基準の住宅</p>
                    <p class="cpSpec__text">ZEH（ゼッチ）とは「NET ZERO ENERGY HOUSE」の略で、住まいの「断熱性」と「省エネルギー性」を上げることと、太陽光発電などにより「エネルギーを創る」ハイレベルな省エネ＋創エネ住宅のことを言います。家庭で年間を通して使用する1次エネルギー消費量の収支をゼロとすることを目指した、国が策定した未来基準の住宅です。</p>
                </div>
                <img class="cpSpec__wide cp-only-pc" src="<?php echo $img; ?>zeh_graphic.png" alt="一次エネルギー消費 −（断熱＋省エネ＋創エネ）≦ 0 ＝ 住まいの1年間の消費エネルギー" width="956" height="219">
                <p class="cpSpec__text cp-only-pc">ひなた工務店では、ZEHを住まいの基本的な考え方として取り入れています。<br>エネルギーをできるだけ使わない住まいにすることで、毎月の光熱費の負担を抑えながら、快適な暮らしへ。そして、家庭で使うエネルギーを減らすことは、CO₂排出量の削減にもつながります。<br>家族のお財布にやさしいこと。そして、これからの環境にもやさしいこと。家族にも、未来にも、負担の少ない家を目指します。</p>

                <div class="cpSpSpec__block cp-only-sp">
                    <p class="cpX__h4">国が策定した未来基準の住宅</p>
                    <p class="cpX__text">ZEH（ゼッチ）とは“NET ZERO ENERGY HOUSE”の略で、住まいの「断熱性」と「省エネルギー」を上げることと、太陽光発電などにより「エネルギーを創る」ハイレベルな省エネ＋創エネ住宅のことを言います。<span class="cpX__blank"></span>家庭で年間を通して使用する1次エネルギー消費量の収支をゼロとすることを目指した、国が策定した未来基準の住宅です。</p>
                </div>
                <img class="cpSpImg cp-only-sp" src="<?php echo $sp; ?>zeh_graphic.png" alt="一次エネルギー消費 −（断熱＋省エネ＋創エネ）≦ 0 ＝ 住まいの1年間の消費エネルギー" width="291" height="120">
                <p class="cpX__text cp-only-sp">ひなた工務店では、ZEHを住まいの基本的な考え方として取り入れています。<br>エネルギーをできるだけ使わない住まいにすることで、毎月の光熱費の負担を抑えながら、快適な暮らしへ。<span class="cpX__blank"></span>そして、家庭で使うエネルギーを減らすことは、CO₂排出量の削減にもつながります。<br>家族のお財布にやさしいこと。<br>そして、これからの環境にもやさしいこと。<span class="cpX__blank"></span>家族にも、未来にも、負担の少ない家を目指します。</p>
            </div>

            <div class="cpSpec cpBox cpSolar" id="solar">
                <div class="cpSpec__head">
                    <p class="cpSpec__sub">電力を自ら生み出すことで、<br class="cp-sp">家計が楽になる</p>
                    <div class="cpSpec__titleWrap">
                        <h4 class="cpSpec__title">太陽光</h4>
                        <span class="cpSpec__tag">4.35kW搭載</span>
                        <span class="cpSpec__note">（Re.RISE-NBC 435）</span>
                    </div>
                </div>
                <p class="cpX__h4">家計にやさしい、理由がある</p>
                <div class="cpSolar__row cp-only-pc">
                    <div class="cpSolar__main">
                        <p class="cpX__text">ひなた工務店で採用している『Qセルズ』は日照時間の短いドイツ発祥のメーカーで、独自技術により、太陽光が当たりにくい早朝や夕方、曇りの日でも発電力を期待できるのが特徴です。</p>
                        <div class="cpSolar__group">
                            <p class="cpX__bar">維持コストを抑えた、家計にやさしい標準仕様</p>
                            <p class="cpX__text">高気密・高断熱の基本性能に加えて、太陽光発電システムも標準装備！<br>年々高騰する電気料金をおさえるだけでなく、自ら生み出すことで、長く住めば住むほど家計が楽になる家。</p>
                        </div>
                    </div>
                    <img class="cpSolar__img" src="<?php echo $img; ?>solar_product.png" alt="Qセルズの太陽光パネルとパワーコンディショナ" width="339" height="345">
                </div>
                <div class="cpSolar__data cp-only-pc">
                    <div class="cpSolar__warranty">
                        <dl><dt>製品保証</dt><dd>30<small>年</small></dd></dl>
                        <span class="cpSolar__sep" aria-hidden="true"></span>
                        <dl><dt>リニア出力保証</dt><dd>30<small>年</small></dd></dl>
                    </div>
                    <div class="cpSolar__output">
                        <dl><dt>初年度の出力値</dt><dd>99<small>%</small></dd><dd class="cpSolar__note">※2年目以降：-0.35％／年</dd></dl>
                        <span class="cpSolar__sep" aria-hidden="true"></span>
                        <dl><dt>25年目の出力値</dt><dd>90<span>.6</span><small>%</small></dd></dl>
                        <span class="cpSolar__sep" aria-hidden="true"></span>
                        <dl class="is-accent"><dt>30年目の出力値</dt><dd>88<span>.9</span><small>%</small></dd></dl>
                    </div>
                </div>

                <div class="cpSolarSp cp-only-sp">
                    <div class="cpSolarSp__group">
                        <p class="cpSpBars"><span>維持コストを抑えた、</span><span>家計にやさしい標準仕様</span></p>
                        <p class="cpX__text">高気密・高断熱の基本性能に加えて、太陽光発電システムも標準装備！<br>年々高騰する電気料金をおさえるだけでなく、自ら生み出すことで、長く住めば住むほど家計が楽になる家。</p>
                    </div>
                    <div class="cpSolarSp__warranty">
                        <div class="cpSolarSp__lead">
                            <p class="cpSolarSp__h">安心の保証体制。</p>
                            <p class="cpX__text cpX__text--bold">製品保証とリニア出力保証で、ずっと安心。</p>
                        </div>
                        <div class="cpSolarSp__boxes">
                            <p class="cpSolarSp__box">製品保証：<em>30年</em></p>
                            <div class="cpSolarSp__box">
                                <p>リニア出力保証：<em>30年</em></p>
                                <p class="cpSolarSp__small"><span>1年目：<em>98.5％</em></span><span>2年目以降：<em>-0.4％／年</em></span></p>
                            </div>
                        </div>
                    </div>
                    <img class="cpSolarSp__graph" src="<?php echo $sp; ?>solar_graph.svg" alt="出力値の推移：1年目98.5％、5年目96.9％、10年目94.9％、15年目92.9％、20年目90.9％、25年目88.9％" width="291" height="93">
                    <img class="cpSolarSp__product" src="<?php echo $sp; ?>solar_product.png" alt="Qセルズの太陽光パネルとパワーコンディショナ" width="285" height="295">
                </div>
                <p class="cpX__text cp-only-sp">ひなた工務店で採用している『Qセルズ』は日照時間の短いドイツ発祥のメーカーで、独自技術により、太陽光が当たりにくい早朝や夕方、曇りの日でも発電力を期待できるのが特徴です。</p>
            </div>

            <!-- 家族の安全・健康を守る -->
            <h3 class="cpBar">家族の安全・健康を守る</h3>

            <div class="cpSpec cpBox cpDmp" id="damper">
                <div class="cpSpec__head">
                    <p class="cpSpec__sub">優れた制震性能で<br class="cp-sp">揺れを95％以上抑える</p>
                    <div class="cpSpec__titleWrap">
                        <h4 class="cpSpec__title">制震金物</h4>
                        <span class="cpSpec__note">（ダイナミックファスナー）</span>
                    </div>
                </div>
                <div class="cpDmp__row">
                    <div class="cpDmp__main">
                        <p class="cpX__h4 cp-only-pc">震度7クラスの揺れを95％以上抑える<sup>＊1＊2＊3</sup><br>繰り返し起きる地震にも対応</p>
                        <div class="cpDmp__spH cp-only-sp">
                            <p class="cpX__h4">震度7クラスの揺れを95％以上<br>抑える<sup>＊1＊2＊3</sup></p>
                            <p class="cpX__h4">繰り返し起きる地震にも対応</p>
                        </div>
                        <p class="cpX__text">ダイナミックファスナーはゴム系ダンパーと金属系ダンパーの良いとこ取りをしたハイブリッド構造の制震ダンパーです。<br>震度4までの地震に対しては、金属ダンパーの内側と外側を覆った高減衰ゴムの「粘性減衰」により地震エネルギーを吸収。<br>震度4以上になると、金属を立体化させた8本のブリッジとハネが地震エネルギーを吸収します。<br>そのため、このダイナミックファスナーを設置するだけで、もともとの耐震要素として働く筋かいが、地震による揺れを95％以上抑える高性能な制震ダンパーとして機能します。</p>
                        <p class="cpX__caption">＊1 兵庫県南部地震の震度7クラスの821ガル・92.2カインの原波で算出。　＊2 取付個数と追加筋かい本数により数値は変わります。　＊3 筋かい併用での計算。</p>
                    </div>
                    <img class="cpX__photo" src="<?php echo $img; ?>damper_photo.jpg" alt="制震金物ダイナミックファスナー" width="278" height="370">
                </div>
                <div class="cpDmp__row cpDmp__row--2 cp-only-pc">
                    <div class="cpDmp__table">
                        <div class="cpDmp__heads">
                            <p class="is-blue">震度<b>4</b>までの揺れ</p>
                            <p class="is-orange">震度<b>4</b>以上の揺れ</p>
                        </div>
                        <div class="cpDmp__cells">
                            <div><p class="cpX__h5">ゴム系ダンパー</p><p class="cpX__text">小振幅の振動に対して高い減衰効果を発揮するため、震度4までの揺れは高減衰ゴムが吸収。</p></div>
                            <div><p class="cpX__h5">金属系ダンパー</p><p class="cpX__text">高い剛性を保持しているため、大きな振動に対して効果を発揮。</p></div>
                        </div>
                    </div>
                    <img class="cpDmp__graph" src="<?php echo $img; ?>damper_graph.svg" alt="高減衰ゴムと金属の揺れの吸収力のグラフ" width="334" height="261">
                </div>
            </div>

            <div class="cpSpec cpBox cpHnk" id="hinoki">
                <div class="cpSpec__head">
                    <p class="cpSpec__sub">防虫性・耐久性に優れた、<br class="cp-sp">人と環境にやさしい素材</p>
                    <div class="cpSpec__titleWrap">
                        <h4 class="cpSpec__title">ひのき土台</h4>
                    </div>
                </div>
                <p class="cpX__text cp-only-pc">住まいの一番下で、家族の暮らしを長い年月支え続ける「土台」。<br>普段は見えない場所だからこそ、ひなた工務店では、その素材にもこだわり、「ひのき」を採用しています。</p>
                <div class="cpHnk__row">
                    <div class="cpHnk__main">
                        <p class="cpX__bar cp-only-pc">ひなた工務店がひのき土台を採用した4つの理由</p>
                        <p class="cpSpBars cpSpBars--full cp-only-sp"><span>ひなた工務店がひのき土台を採用した</span><span>4つの理由</span></p>
                        <ol class="cpHnk__list">
                            <li><p class="cpHnk__h"><span>01.</span>天然の防虫効果</p><p class="cpX__text">ひのきはその天然の特性により、優れた防虫効果があり、建材に使用することで虫の侵入を防ぐことが期待できます。</p></li>
                            <li><p class="cpHnk__h"><span>02.</span>化学薬品によるアレルギーのリスク</p><p class="cpX__text">多くの防虫剤や建材には化学薬品が含まれており、これらの成分が原因でアレルギー反応を引き起こす恐れがあります。ひのきは天然素材であるため、アレルギーのリスクを低減します。</p></li>
                            <li><p class="cpHnk__h"><span>03.</span>環境への配慮</p><p class="cpX__text">ひのきは再生可能な資源であり、持続可能な森林管理の下で育成されていることが多いです。これにより、環境への負荷を減らし、エコフレンドリーな選択肢となります。</p></li>
                            <li><p class="cpHnk__h"><span>04.</span>耐久性</p><p class="cpX__text">ひのきはその優れた耐久性も特徴であり、湿気や腐食に強く、設置してから強度が増していく特徴があります。</p></li>
                        </ol>
                    </div>
                    <img class="cpX__photo" src="<?php echo $img; ?>hinoki_photo.jpg" alt="ひのきの森" width="278" height="370">
                </div>
            </div>

            <!-- 家族の快適を守る -->
            <h3 class="cpBar">家族の快適を守る</h3>

            <div class="cpSpec cpBox cpIns" id="window">
                <div class="cpSpec__head">
                    <p class="cpSpec__sub">高性能樹脂サッシと断熱材で、<br class="cp-sp">一年中快適に</p>
                    <div class="cpSpec__titleWrap">
                        <h4 class="cpSpec__title">高い断熱性能</h4>
                    </div>
                </div>
                <div class="cpIns__row">
                    <div class="cpIns__main">
                        <div class="cpIns__textBlock">
                            <p class="cpX__h4">高性能樹脂サッシで<br>夏は涼しく、冬は暖かく</p>
                            <p class="cpX__text">熱の出入りが大きい「窓」だからこそ、断熱性能に優れた高性能樹脂サッシ「APW 330」を採用。<br>外気の影響を抑え、一年を通して快適で、冷暖房効率のよい住まいを目指します。</p>
                        </div>
                        <img class="cp-only-pc" src="<?php echo $img; ?>uvalue.png" alt="［アルミスペーサー仕様］熱貫流率1.37W/（㎡・K）たてすべり出し窓+FIX連窓［16513サイズ］Low-E複層ガラス ブルー・アルゴンガス入（＊1 窓の熱貫流率 JIS A 4710：2015に基づいた社内試験値）" width="466" height="251">
                        <img class="cpSpImg cpSpImg--uvalue cp-only-sp" src="<?php echo $sp; ?>uvalue.png" alt="［アルミスペーサー仕様］熱貫流率1.37W/（㎡・K）たてすべり出し窓+FIX連窓［16513サイズ］Low-E複層ガラス ブルー・アルゴンガス入（＊1 窓の熱貫流率 JIS A 4710：2015に基づいた社内試験値）" width="295" height="189">
                    </div>
                    <img class="cpIns__sash cp-only-pc" src="<?php echo $img; ?>sash_diagram.png" alt="APW330の断面図：Low-E複層ガラス・アルゴンガス・アルミスペーサー・樹脂フレーム" width="466" height="475">
                    <img class="cpSpImg cpSpImg--wide cp-only-sp" src="<?php echo $sp; ?>sash_diagram.png" alt="APW330の断面図：Low-E複層ガラス・アルゴンガス・アルミスペーサー・樹脂フレーム" width="295" height="236">
                    <img class="cpSpImg cpSpImg--wide cp-only-sp" src="<?php echo $sp; ?>thermo_compare.png" alt="サーモグラフィー比較：アルミ（複層ガラス）はガラス中央部34℃・下框44℃、APW330はガラス中央部28℃・下框31℃（室外35℃・室内25℃の試験値）" width="295" height="118">
                </div>
                <img class="cpIns__thermo cp-only-pc" src="<?php echo $img; ?>thermo_compare.png" alt="サーモグラフィー比較：アルミ（複層ガラス）はガラス中央部34℃・下框44℃、APW330はガラス中央部28℃・下框31℃（室外35℃・室内25℃の試験値）" width="950" height="315">
                <hr class="cpIns__line">
                <div class="cpIns__aqua" id="aqua">
                    <div class="cpIns__textBlock">
                        <p class="cpX__h4">断熱材には「アクアフォーム」を採用<br>隙間なく施工し、高断熱・高遮音を実現</p>
                        <p class="cpX__text">アクアフォームは硬質ウレタンフォームを水の力で発泡し、吹付施工する断熱材です。<br>従来のグラスウールなどの断熱材は施工部分に合わせカットするため、隙間ができてしまうことがありましたが、アクアフォームでは隙間なく施工することができ、安定した断熱効果を得ることができます。<br>また、隙間が生じないため、外部の騒音を遮断し、内部の生活音をシャットアウトすることで、騒音の少ないプライベート空間を維持することができます。</p>
                    </div>
                    <div class="cpIns__imgs cp-only-pc">
                        <img src="<?php echo $img; ?>thermo_house.png" alt="高い断熱性をサーモグラフィーで検証：小屋裏で約5℃の差" width="463" height="299">
                        <img src="<?php echo $img; ?>aqua_photo.jpg" alt="アクアフォームの吹付施工" width="463" height="298">
                    </div>
                    <img class="cpSpImg cpSpImg--wide cp-only-sp" src="<?php echo $sp; ?>thermo_house.png" alt="高い断熱性をサーモグラフィーで検証：小屋裏で約5℃の差" width="295" height="190">
                    <img class="cpSpImg cpSpImg--wide cp-only-sp" src="<?php echo $sp; ?>aqua_photo.jpg" alt="アクアフォームの吹付施工" width="295" height="190">
                </div>
            </div>
        </div>
    </section>

    <!-- 03 Plan -->
    <section class="cpSection cpSection--gray" id="plan">
        <div class="cpContainer">
            <div class="cpHead">
                <div class="cpHead__main">
                    <div class="cpHead__group">
                        <p class="cpHead__en">OUR PLAN</p>
                        <h2 class="cpHead__title"><span class="cpHead__num">03</span><span class="cpHead__ja">自由設計</span></h2>
                    </div>
                    <p class="cpHead__catch"><span class="cp-only-pc">ペースを選んで間取りは「自由に」自分らしく。<br>「こんな暮らしがしたい」を叶える間取り</span><span class="cp-only-sp">設計は無駄なく、暮らし方は<br>自分たちらしく。</span></p>
                </div>
                <div class="cpHead__illust cpHead__illust--lead">
                    <div class="cpIllustPlan">
                        <img class="cpIllustPlan__d" src="<?php echo $img; ?>plan_illust_d.svg" alt="">
                        <img class="cpIllustPlan__c" src="<?php echo $img; ?>plan_illust_c.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="cpLead cp-only-pc">
                <p class="cpLead__strong">家族構成も、家事の仕方も、好きな過ごし方も、一家族ずつ違うから。</p>
            </div>
            <div class="cpLead cpLead--afterIllust cp-only-sp">
                <p class="cpLead__strong">家族構成も、家事の仕方も、<br>好きな過ごし方も、<br>一家族ずつ違うから。</p>
                <div class="cpLead__body">
                    <p>ひなた工務店では、設計の仕組みを合理化しながらも、ご家族の暮らしに合わせた住まいを一緒に考えます。<br>ご予算の中で「好きな暮らし」を叶えていただくこと。それも私たちが大切にしていることです。</p>
                    <p>構造や性能など、見えないところの安全性はしっかり確保しつつ、内装のテイストやどんな動線にするかなど、家づくりのワクワクする部分を楽しんでいただく。<br>自分たちらしい家を実現していただくために、プロの視点からサポートさせていただきます。</p>
                </div>
            </div>

            <div class="cpPlanSp cpBox cp-only-sp">
                <p class="cpPlanSp__title">自由設計フロー</p>
                <ol class="cpPlanSp__list">
                    <li><span class="cpPlanSp__icon"><img src="<?php echo $sp; ?>plan_flow_1.svg" alt="" width="23" height="30"></span><span class="cpPlanSp__label"><span class="cpPlanSp__num">01</span>ベースプランを選ぶ</span></li>
                    <li><span class="cpPlanSp__icon"><img src="<?php echo $sp; ?>plan_flow_2.svg" alt="" width="30" height="29"></span><span class="cpPlanSp__label"><span class="cpPlanSp__num">02</span>ヒアリング</span></li>
                    <li><span class="cpPlanSp__icon"><img src="<?php echo $sp; ?>plan_flow_3.svg" alt="" width="26" height="26"></span><span class="cpPlanSp__label"><span class="cpPlanSp__num">03</span>間取りをアレンジ</span></li>
                    <li><span class="cpPlanSp__icon"><img src="<?php echo $sp; ?>plan_flow_4.svg" alt="" width="30" height="27"></span><span class="cpPlanSp__label"><span class="cpPlanSp__num">04</span>わが家らしい家へ</span></li>
                </ol>
            </div>

            <ol class="cpSteps cp-only-pc">
                <li class="cpSteps__item cpBox">
                    <p class="cpSteps__h"><span class="cpSteps__num">1</span>広さを選ぶ</p>
                    <p class="cpSpec__text">ご家族の暮らしに合わせて<br>建物の広さをお選びいただけます</p>
                    <div class="cpSteps__size" aria-hidden="true"><span></span><span></span><span></span></div>
                </li>
                <li class="cpSteps__item cpBox">
                    <p class="cpSteps__h"><span class="cpSteps__num">2</span>建物タイプを選ぶ</p>
                    <p class="cpSpec__text">暮らし方や敷地に合わせて<br>３つのタイプからお選びいただけます</p>
                    <div class="cpSteps__types">
                        <img src="<?php echo $img; ?>plan_types.png" alt="" width="268" height="127">
                        <p><span>平屋</span><span>二階建て</span><span>半二階</span></p>
                    </div>
                </li>
                <li class="cpSteps__item cpBox">
                    <p class="cpSteps__h"><span class="cpSteps__num">3</span><span>おうちの中を<br>「自由に」設計する</span></p>
                    <p class="cpSpec__text">ベースプランをもとに、間取りや<br>内装はご家族のライフスタイルや好みに<br>合わせて設計できます</p>
                    <div class="cpSteps__illust"><img src="<?php echo $img; ?>plan_design.svg" alt="" width="147" height="107"></div>
                </li>
            </ol>

            <h3 class="cpBar cpBar--gap94 cp-only-pc">こんなご要望も叶えられます！</h3>
            <ul class="cpRequests cpBox cp-only-pc">
                <li>
                    <p class="cpRequests__h">回遊導線で<br>家事をスムーズに</p>
                    <p class="cpSpec__text">キッチン・洗面・ランドリーをつなげて<br>家事の動線をコンパクトに</p>
                    <img src="<?php echo $img; ?>req_1.png" alt="" width="143" height="128">
                </li>
                <li>
                    <p class="cpRequests__h">将来仕切れる<br>子供部屋がほしい</p>
                    <p class="cpSpec__text">子供の成長に合わせて仕切れる設計に<br>長く快適に使えます</p>
                    <img src="<?php echo $img; ?>req_2.png" alt="" width="171" height="118">
                </li>
                <li>
                    <p class="cpRequests__h">各階にファミリー<br>クローゼットがほしい</p>
                    <p class="cpSpec__text">１階・２階どちらにも設けることで<br>家族全員の収納がもっと便利に</p>
                    <img src="<?php echo $img; ?>req_3.png" alt="" width="125" height="134">
                </li>
            </ul>

            <h3 class="cpBar cpBar--gap94 cp-only-pc">内装も自由にコーディネート</h3>
            <div class="cpSpec cpBox cpInterior cp-only-pc">
                <h4 class="cpInterior__title">知識豊富なインテリアコーディネーターと<br>一緒に心地良い空間を設計します</h4>
                <p class="cpX__text">床材・建具・壁の色・設備など、暮らしのイメージに合わせて自由にコーディネートできます</p>
                <p class="cpX__bar cpInterior__bar">たくさんあって決められない・・という方にはベースプランもご用意しております</p>
                <div class="cpInterior__lineup">
                    <ul class="cpInterior__styles">
                        <li>CAFE STYLE</li>
                        <li>INDUSTRIAL STYLE</li>
                        <li>CITTA STYLE</li>
                        <li>NORDIC STYLE</li>
                    </ul>
                    <img src="<?php echo $img; ?>interior_lineup.jpg" alt="ベースプラン：CAFE STYLE（Espresso・Latte・Mocha）／INDUSTRIAL STYLE（Hard・Medium・Soft）／CITTA STYLE（Chic・Clear・Light）／NORDIC STYLE（Blue・Gray・Green）" width="956" height="566">
                </div>
            </div>

            <div class="cpBtnWrap cpBtnWrap--2">
                <a class="cpBtn" href="<?php echo esc_url(home_url('/lineup/')); ?>">STYLEを見る</a>
                <a class="cpBtn" href="<?php echo esc_url(home_url('/works/')); ?>">施工事例を見る</a>
            </div>
        </div>
    </section>

    <!-- 04 Flow -->
    <section class="cpSection" id="flow">
        <div class="cpContainer">
            <div class="cpHead">
                <div class="cpHead__main">
                    <div class="cpHead__group">
                        <p class="cpHead__en">SMART FLOW</p>
                        <h2 class="cpHead__title"><span class="cpHead__num">04</span><span class="cpHead__ja">スムーズな<br class="cp-sp">家づくり</span></h2>
                    </div>
                    <p class="cpHead__catch">合理的な設計フローで、<br class="cp-sp">家族の時間も守ります。</p>
                </div>
                <div class="cpHead__illust">
                    <div class="cpIllustPlan cp-only-pc">
                        <img class="cpIllustPlan__d" src="<?php echo $img; ?>plan_illust_d.svg" alt="">
                        <img class="cpIllustPlan__c" src="<?php echo $img; ?>plan_illust_c.svg" alt="">
                    </div>
                    <div class="cpIllustSp cpIllustSp--flow cp-only-sp"><img src="<?php echo $sp; ?>flow_illust.png" alt="" width="190" height="124"></div>
                </div>
            </div>
            <div class="cpLead cp-only-pc">
                <p class="cpLead__strong">家づくりに時間がかかるほど家族の負担が増え、完成後のお家で過ごす時間も<br>短くなってしまう…。なるべく早く新しい生活をスタートしてほしいから。</p>
                <div class="cpLead__body">
                    <p>ひなた工務店では、ベースプランをもとに設計を進めることで、家づくりの工程をシンプルに。設計から着工、完成まで規格化されたプロセスにより、部材調達や施工も円滑に進めます。<br>これにより品質管理を大切にしながら工期を短縮。忙しいお施主様をできる限りお待たせしない、ご相談から「最短約6ヶ月」でのお引き渡しを実現します。</p>
                </div>
            </div>
            <div class="cpLead cpLead--small cp-only-sp">
                <p class="cpLead__strong">家づくりに時間がかかるほど<br>家族の負担が増え、完成後のお家で<br>過ごす時間も短くなってしまう…。<span class="cpX__blank"></span>なるべく早く新しい生活を<br>スタートしてほしいから。</p>
                <div class="cpLead__body">
                    <p>ひなた工務店では、ベースプランをもとに設計を進めることで、家づくりの工程をシンプルに。</p>
                    <p>設計から着工、完成まで規格化されたプロセスにより、部材調達や施工も円滑に進めます。</p>
                    <p>これにより品質管理を大切にしながら工期を短縮。<br>忙しいお施主様をできる限りお待たせしない、<br>ご相談から「最短約6ヶ月」でのお引き渡しを実現します。</p>
                </div>
            </div>

            <div class="cpFlow cpBox cp-only-pc">
                <div class="cpFlow__body">
                    <div class="cpFlow__terms">
                        <p class="cpFlow__term cpFlow__term--1"><span>約2ヶ月</span></p>
                        <p class="cpFlow__term cpFlow__term--2"><span>約4ヶ月〜</span></p>
                    </div>
                    <ol class="cpFlow__list">
                        <li><span class="cpFlow__icon"><img src="<?php echo $img; ?>flow_1.svg" alt=""></span><span class="cpFlow__label">資金計画</span></li>
                        <li><span class="cpFlow__icon cpFlow__icon--2"><img class="a" src="<?php echo $img; ?>flow_2a.svg" alt=""><img class="b" src="<?php echo $img; ?>flow_2b.svg" alt=""></span><span class="cpFlow__label">プラン選択</span></li>
                        <li><span class="cpFlow__icon"><img src="<?php echo $img; ?>flow_3.svg" alt=""></span><span class="cpFlow__label">ご契約</span></li>
                        <li><span class="cpFlow__icon"><img src="<?php echo $img; ?>flow_4.svg" alt=""></span><span class="cpFlow__label">工事</span></li>
                        <li><span class="cpFlow__icon"><img src="<?php echo $img; ?>flow_5.svg" alt=""></span><span class="cpFlow__label">新生活スタート</span></li>
                    </ol>
                    <p class="cpFlow__total"><span>最短 約6ヶ月</span></p>
                </div>
            </div>

            <div class="cpFlowSp cpBox cp-only-sp">
                <div class="cpFlowSp__head">
                    <p class="cpFlowSp__sub">ご相談からお引き渡しまで、<br>最短約6ヶ月</p>
                    <p class="cpFlowSp__title">設計フロー</p>
                </div>
                <div class="cpFlowSp__body">
                    <ol class="cpFlowSp__list">
                        <li><span class="cpFlowSp__icon"><span class="cpFlowSp__art cpFlowSp__art--1"><img src="<?php echo $img; ?>flow_1.svg" alt=""></span></span><span class="cpFlowSp__label"><span class="cpFlowSp__num">01</span>資金計画</span></li>
                        <li><span class="cpFlowSp__icon"><span class="cpFlowSp__art cpFlowSp__art--2"><img class="a" src="<?php echo $img; ?>flow_2a.svg" alt=""><img class="b" src="<?php echo $img; ?>flow_2b.svg" alt=""></span></span><span class="cpFlowSp__label"><span class="cpFlowSp__num">02</span>プラン選択</span></li>
                        <li><span class="cpFlowSp__icon"><span class="cpFlowSp__art cpFlowSp__art--3"><img src="<?php echo $img; ?>flow_3.svg" alt=""></span></span><span class="cpFlowSp__label"><span class="cpFlowSp__num">03</span>ご契約</span></li>
                        <li><span class="cpFlowSp__icon"><span class="cpFlowSp__art cpFlowSp__art--4"><img src="<?php echo $img; ?>flow_4.svg" alt=""></span></span><span class="cpFlowSp__label"><span class="cpFlowSp__num">04</span>工事</span></li>
                        <li><span class="cpFlowSp__icon"><span class="cpFlowSp__art cpFlowSp__art--5"><img src="<?php echo $img; ?>flow_5.svg" alt=""></span></span><span class="cpFlowSp__label"><span class="cpFlowSp__num">05</span><span>新生活<br>スタート</span></span></li>
                    </ol>
                    <div class="cpFlowSp__time" aria-hidden="true">
                        <span class="cpFlowSp__arrow cpFlowSp__arrow--2m"><img src="<?php echo $sp; ?>flow_arrow_2m.svg" alt=""><em>約2ヶ月</em></span>
                        <span class="cpFlowSp__arrow cpFlowSp__arrow--4m"><img src="<?php echo $sp; ?>flow_arrow_4m.svg" alt=""><em>約4ヶ月〜</em></span>
                        <span class="cpFlowSp__arrow cpFlowSp__arrow--6m"><img src="<?php echo $sp; ?>flow_arrow_6m.svg" alt=""><em>最短<br>約6ヶ月</em></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 05 After -->
    <section class="cpSection cpSection--gray" id="after">
        <div class="cpContainer">
            <div class="cpHead">
                <div class="cpHead__main">
                    <div class="cpHead__group">
                        <p class="cpHead__en">RELATIONSHIP</p>
                        <h2 class="cpHead__title"><span class="cpHead__num">05</span><span class="cpHead__ja">アフターフォロー</span></h2>
                    </div>
                    <p class="cpHead__catch">合理的な設計フローで、<br class="cp-sp">家族の時間も守ります。</p>
                </div>
                <div class="cpHead__illust">
                    <img class="cpAfterIllust" src="<?php echo $img; ?>after_illust.png" alt="" width="280" height="148">
                </div>
            </div>
            <div class="cpLead cp-only-pc">
                <p class="cpLead__strong cpLead__strong--tight">“建てて終わり”では安心して暮らせないから。</p>
                <div class="cpLead__body">
                    <p>家を建てることが、人生のゴールではありません。<br>新しい家で家族とご飯を食べたり、子どもの成長を見守ったり、休日には好きなことを楽しんだり。家を建てたその先にも、家族の「暮らし」が続いていくこと。</p>
                    <p>私たちは、そのための家をつくりたい。無理のない価格で、安心できて、自分たちらしく過ごせる家を。<br>宮崎で暮らす家族の毎日に、あたたかな「ひなた」をつくることが、私たちの家づくりです。</p>
                </div>
            </div>
            <div class="cpLead cpLead--small cp-only-sp">
                <p class="cpLead__strong">“建てて終わり”では<br>安心して暮らせないから。</p>
                <div class="cpLead__body">
                    <p>家を建てることが、人生のゴールではありません。<br>新しい家で家族とご飯を食べたり、子どもの成長を見守ったり、休日には好きなことを楽しんだり。<br>家を建てたその先にも、家族の「暮らし」が続いていくこと。</p>
                    <p>私たちは、そのための家をつくりたい。<br>無理のない価格で、安心できて、自分たちらしく過ごせる家を。</p>
                    <p>宮崎で暮らす家族の毎日に、あたたかな「ひなた」をつくることが、私たちの家づくりです。</p>
                </div>
            </div>

            <div class="cpSpec cpBox cpAfterBox">
                <div class="cpSpec__head">
                    <p class="cpSpec__sub">すべてのお客様に</p>
                    <div class="cpSpec__titleWrap">
                        <h3 class="cpSpec__title">安心の定期点検＆保証を<br class="cp-sp">お約束</h3>
                    </div>
                </div>
                <ul class="cpSupport">
                    <li>
                        <p class="cpSupport__h">地盤改良工事費の負担は0円</p>
                        <span class="cpSupport__slot"><img src="<?php echo $img; ?>after_1.png" alt="" width="101" height="100"></span>
                        <p class="cpSpec__text">地盤改良共済を標準装備。もしもの地盤改良工事発生時でもお客様の費用負担は0円で、予算面でも安心して施工していただけます。</p>
                    </li>
                    <li>
                        <p class="cpSupport__h">20年から最長60年間保証</p>
                        <span class="cpSupport__slot"><img src="<?php echo $img; ?>after_2.png" alt="" width="191" height="82"></span>
                        <p class="cpSpec__text">お値打ちな住宅にはアフターサービスや保証が不十分というイメージがあるかもしれませんが、ひなた工務店では、住宅品質確保推進法に係る基本構造部分を20年から最長60年間保証します。</p>
                    </li>
                    <li>
                        <p class="cpSupport__h cpSupport__h--narrow">地盤＆シロアリ保証は<br class="cp-sp">10年間1000万円まで</p>
                        <span class="cpSupport__slot"><img src="<?php echo $img; ?>after_3.png" alt="" width="155" height="102"></span>
                        <p class="cpSpec__text">地盤改良共済を標準装備。もしもの地盤改良工事発生時でもお客様の費用負担は0円で、予算面でも安心して施工していただけます。</p>
                    </li>
                    <li>
                        <p class="cpSupport__h cpSupport__h--narrow">ずっと安心。生涯サポート</p>
                        <span class="cpSupport__slot"><img class="is-flip" src="<?php echo $img; ?>after_4.png" alt="" width="79" height="99"></span>
                        <p class="cpSpec__text">さらに、お施主様との距離感が近い地域密着型の工務店だからこそ、ずっと安心の生涯サポートを標準サービスとしてご提供してまいります。<br class="cp-sp">24時間対応可能なコールセンターなど、長く安心して暮らせる家づくりをおこなっています。</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
