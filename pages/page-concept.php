<?php /* Template Name: コンセプト */ ?>
<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Concept</h1>
                <h2 class="heroCatch__lead">ひなた工務店の家づくり</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">
    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="conceptSection">
        <div class="conceptBlock container">
            <div class="conceptBlock__head">
                <h2 class="conceptBlock__title">
                    <span class="conceptBlock__title--accent conceptBlock__title--lg">ひなた工務店</span><span class="conceptBlock__title--sm">で</span><br />
                    <span>リーズナブル</span><br />
                    <span>そして</span><span>スピーディ</span>に<br />
                    <span class="conceptBlock__title--xl">マイホーム</span><span>の</span><span class="conceptBlock__title--2xl conceptBlock__title--accent">夢</span><span class="conceptBlock__title--sm">を</span><span>実現</span>
                </h2>
                <div class="conceptImage">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/img_concept1.png" alt="">
                </div>
            </div>

            <p class="conceptBlock__body">
                一般的な低価格の住宅には、「性能(耐震・断熱など)が低い」「使い勝手のよくない間取り」「アフターサービスや保証が不十分」といったイメージをお持ちかもしれません。<br />でも、ひなた工務店では、そんな心配はありません。<br />家づくりのプロフェッショナルが暮らしやすさを考え、機能性とデザイン性を兼ね備えた<br class="for-pc" />高品質な住まいを追求。
            </p>
        </div>
    </section>

    <section class="conceptSection">
        <div class="conceptBlock conceptBlock--reverse container">
            <div class="conceptBlock__head">
                <span>
                    <h2 class="conceptBlock__title">
                        <span class="conceptBlock__title--accent">イージーオーダー</span>だからこそできる、<br />
                        理想に妥協しない<br />
                        <span class="conceptBlock__title--sm conceptBlock__title--accent">「<span class="conceptBlock__title--lg">ちょうどいい</span>」理想の住まい</span>
                    </h2>
                    <p class="conceptBlock__body">
                        を作りました。<br />
                        もちろん、アフターサービスや保証も万全です。<br />
                        マイホームの夢も、あなたの理想のライフスタイルも、<br class="for-pc" />
                        ひなた工務店で一緒にかなえましょう。
                    </p>
                </span>
                <div class="conceptImage">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/img_concept2.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="reason">
        <div class="reason__inner container">
            <hgroup class="sectionTitle reason__title">
                <h2 class="sectionTitle__jp">選ばれる理由</h2>
                <p class="sectionTitle__en">Reason</p>
            </hgroup>

            <p class="reason__lead">&ensp;ひなた工務店が選ばれる理由&ensp;</p>

            <div class="reasonList">
                <div class="reasonList__item">
                    <h3 class="reasonList__title">
                        <span class="reasonList__title--number">01</span>
                        <span>低価格</span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--accent"></span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--light"></span>
                    </h3>

                    <p class="reasonList__text">
                        これまで注文住宅で培った設計力を活かし、多様なニーズにマッチするシンプルな間取りをベースにアレンジを加えることで､材料費・施工費・工期短縮によるコストダウンを実現しました。
                    </p>

                    <div class="reasonList__price">
                        <div class="lineupBoxItemPrice is-orange">
                            <p class="lineupBoxItemPrice__title">2階</p>
                            <?php
                            $price_2f = [
                                ['word'  =>  '20', 'price' =>  '1,467', 'tax'   =>  '30,562',],
                                ['word'  =>  '22', 'price' =>  '1,558', 'tax'   =>  '32,458',],
                                ['word'  =>  '24', 'price' =>  '1,637', 'tax'   =>  '34,104',],
                                ['word'  =>  '26', 'price' =>  '1,707', 'tax'   =>  '35,562',],
                                ['word'  =>  '28', 'price' =>  '1,768', 'tax'   =>  '36,833',],
                                ['word'  =>  '32', 'price' =>  '1,859', 'tax'   =>  '38,729',],
                                ['word'  =>  '35', 'price' =>  '1,938', 'tax'   =>  '40,375',],
                            ];
                            ?>
                            <?php foreach ($price_2f as $display) : ?>
                                <dl class="lineupBoxItemPriceUnit">
                                    <dt class="lineupBoxItemPriceUnit__word"><?php echo $display['word']; ?><span>坪</span></dt>
                                    <dt class="lineupBoxItemPriceUnit__price"><?php echo $display['price']; ?><span>万円</span></dt>
                                    <dt class="lineupBoxItemPriceUnit__tax">（<span><?php echo $display['tax']; ?></span>円/月）</dt>
                                </dl>
                            <?php endforeach; ?>
                        </div>

                        <div class="lineupBoxItemPrice is-green">
                            <p class="lineupBoxItemPrice__title">平屋</p>
                            <?php
                            $price_house = [
								['word'  =>  '14', 'price' =>  '1,257', 'tax'   =>  '26,187',],
                                ['word'  =>  '16', 'price' =>  '1,378', 'tax'   =>  '28,708',],
                                ['word'  =>  '18', 'price' =>  '1,526', 'tax'   =>  '34,791',],
                                ['word'  =>  '20', 'price' =>  '1,647', 'tax'   =>  '34,312',],
                                ['word'  =>  '24', 'price' =>  '1,750', 'tax'   =>  '36,458',],
                                ['word'  =>  '27', 'price' =>  '1,950', 'tax'   =>  '40,625',],
                                ['word'  =>  '30', 'price' =>  '2,148', 'tax'   =>  '44,750',],
                            ];
                            ?>
                            <?php foreach ($price_house as $display) : ?>
                                <dl class="lineupBoxItemPriceUnit">
                                    <dt class="lineupBoxItemPriceUnit__word"><?php echo $display['word']; ?><span>坪</span></dt>
                                    <dt class="lineupBoxItemPriceUnit__price"><?php echo $display['price']; ?><span>万円</span></dt>
                                    <dt class="lineupBoxItemPriceUnit__tax">（<span><?php echo $display['tax']; ?></span>円/月）</dt>
                                </dl>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="reasonList__item">
                    <h3 class="reasonList__title">
                        <span class="reasonList__title--number">02</span>
                        <span>使い勝手の良い間取り</span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--accent"></span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--light"></span>
                    </h3>

                    <div class="reasonList__column">
                        <p class="reasonList__text">
                            <span class="reasonList__text--underline">&nbsp;建築のプロが考えた使い勝手の良い間取り&ensp;</span><br />
                            <br />
                            ピースホームを母体とするブランドだから、 <br />
                            豊富な施工実績と培ったノウハウによる使い勝手と利便性を両立させるくらしのご提案 <br />
                            <br />
                            <br />
                            ピースホームは宮崎県内で<span class="reasonList__text--accent">施工実績 500 棟</span>を超える地域密着の工務店です。<br />
                            ひなた工務店では間取りはプロの建築家が強い構造を考慮し、かつとゆとりある間取りを作成しています。<br />
                            <br />
                            また室内も外観もすべてプロのインテリアコーディネーターがトータルコーディネート。<br />
                            豊富な知識とノウハウが盛り込まれたバリエーション豊富な空間デザインをご提案いたしますので、お好きなコーディネートを気軽にお選びいただけます。
                        </p>
                        <div class="reasonList__image reasonList__imageFlex">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/img_reason2.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="reasonList__item">
                    <h3 class="reasonList__title">
                        <span class="reasonList__title--number">03</span>
                        <span>スピーディーで短納期</span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--accent"></span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--light"></span>
                    </h3>

                    <div class="reasonList__column">
                        <p class="reasonList__text">
                            <span class="reasonList__text--underline">&nbsp;合理的な設計フローにより、&ensp;</span><br />
                            <span class="reasonList__text--underline">&nbsp;忙しいご夫婦もお待たせしない時短スケジュール&ensp;</span><br />
                            <br />
                            ひなた工務店の住まいは、設計から着工、完成まで規格化されたプロセスにより、提携企業との円滑な部材調達と施工が計画的かつ効率的に進められます。<br />
                            <br />
                            これにより、工期短縮と安定した品質管理が計られ、スピーディなお引き渡しを実現します。<br />
                        </p>
                        <div class="reasonList__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/img_reason3.jpg" alt="">
                        </div>
                    </div>

                    <div class="reasonList__flowImage">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/concept/illust_flow_sp.svg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/illust_flow.svg"  alt="">
                        </picture>
                    </div>
                </div>

                <div class="reasonList__item">
                    <h3 class="reasonList__title">
                        <span class="reasonList__title--number">04</span>
                        <span>強くて快適な基本性能</span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--accent"></span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--light"></span>
                    </h3>

                    <div class="reasonList__column">
                        <p class="reasonList__text">
                            快適に暮らせる<span class="reasonList__text--accent">「高断熱・高気密」性能</span>に加え <br />
                            <span class="reasonList__text--accent">「耐震」だけでなく「制震」性能</span>を備えた安心の基本構造 <br />
                            災害にも強く、長く安心して快適に暮らせる丈夫な家づくりを心がけています。
                        </p>
                        <div class="reasonList__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/img_reason4.jpg" alt="">
                        </div>
                    </div>

                    <div class="reasonList__check">
                        <div class="sectionTitle reason__title">
                            <p class="sectionTitle__jp">チェック！</p>
                            <p class="sectionTitle__en">Check!</p>
                        </div>

                        <div class="reasonList__text--underline">国の定めた性能基準を標準で全棟クリア！</div>

                        <p class="reasonList__text">
                            ベタ基礎耐震性に優れ、湿気・シロアリ被害を予防。木造軸組み工法：地産地消を考慮
                            した県産の無垢材（乾燥材）を使用。粘り強く、シロアリにも強い構造材が家を守りま
                            す。吹付け断熱（硬質ウレタンフォーム）吹き付け断熱材で夏は涼しく、冬は暖か。制震
                            金物ダイナミックファスナーを採用し、繰り返される小規模な揺れから大地震にも粘り強
                            く耐えます。また地震の揺れを何％軽減できるか？を構造計算により見えるしています。<br />
                            <br />
                            ガルバリウム鋼板：耐久性と軽さによる減震効果がある屋根材。高性能樹脂サッシ：高い
                            断熱性・気密性・デザイン性を兼ね備えたハイスペック窓で1年中快適に過ごせます。
                        </p>
                    </div>
                </div>

                <div class="reasonList__item">
                    <h3 class="reasonList__title">
                        <span class="reasonList__title--number">05</span>
                        <span>家計にやさしい</span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--accent"></span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--light"></span>
                    </h3>

                    <div class="reasonList__column">
                        <p class="reasonList__text">
                            <span class="reasonList__text--underline">&nbsp;維持コストを抑えた家計にやさしい標準仕様&ensp;</span><br />
                            <br />
                            高気密・高断熱の基本性能に加えて、太陽光発電システムも標準装備！<br />
                            年々高騰する電気料金をおさえるだけでなく、自ら生み出すことで、長く住めば済むほど家計が楽になる家。
                            <br /><br />
                            <span class="reasonList__text--underline">&nbsp;雨で汚れを洗い流す親水コート仕様の外壁材&ensp;</span><br />
                            <span class="reasonList__text--underline">&nbsp;（15ミリ厚✖︎金具留め）&ensp;</span><br />
                            <br />
                            親水コートの表層は水になじみやすい親水基に覆われています。<br />
                            雨が降れば、親水基が汚れとの間に雨水を入り込みやすくするため、壁に付着した汚れが浮き上がり、雨水と一緒に洗い流します。<br />
                            <br />
                            色保証10年の対象商品となります。
                        </p>
                        <div class="reasonList__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/img_reason5.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="reasonList__item">
                    <h3 class="reasonList__title">
                        <span class="reasonList__title--number">06</span>
                        <span>安心の保証</span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--accent"></span>
                        <span class="reasonList__titleBorder reasonList__titleBorder--light"></span>
                    </h3>
                    <div class="guaranteeList">
                        <p class="reasonList__text--underline">&nbsp;すべてのお施主様に安心の定期点検＆保証をお約束&ensp;</p>
                    </div>

                    <div class="reasonList__column">
                        <p class="reasonList__text">
                            <span class="reasonList__text--decoration">
                                <span class="reasonList__text--bold reasonList__text--lg">
                                    長期<span class="reasonList__text--accent reasonList__text--lg">20年保証</span>
                                </span>
                            </span>
                            <br />
                            ひなた工務店では、お引渡し後も長く安心して暮らしていただくための長期保証制度をご用意しています。<br />保証期間はお引渡し日から20年間。その後も、5年または10年ごとの延長を繰り返すことで、最長60年まで保証を継続することが可能です。<br />万が一、将来施工会社が廃業・倒産した場合でも、住宅の中で最も重要な構造や防水部分の保証が途切れることはありません。<br />「今すぐに補修費用を用意できない」といった事業者側の事情に左右されることなく、住まいの安心が守られます。
                            <br /><br />
                            <span class="reasonList__text--decoration">
                                <span class="reasonList__text--bold reasonList__text--lg">
                                    住宅設備機器<span class="reasonList__text--accent reasonList__text--lg">延長保証10年</span>
                                </span>
                            </span>
                            <br />
                            住宅設備機器の故障は、設置5年目以降に上昇します。<br />万一、所有物件の設備機器が故障した場合、保証書に記載されている内容、及び規定内容にもとづいて無償で修理をご提供いたします。
                            <br /><br />
                            <span class="reasonList__text--decoration">
                                <span class="reasonList__text--bold reasonList__text--lg">
                                    10年間、<span class="reasonList__text--accent reasonList__text--lg">1000万円まで</span>を保証
                                </span>
                            </span>
                            <br />
                            地盤保証、シロアリ保証は最高1,000万円を限度に賠償責任補償額の給付を保証します。
                            <br /><br />
                            <span class="reasonList__text--decoration">
                                <span class="reasonList__text--bold reasonList__text--lg">
                                    <span class="reasonList__text--accent reasonList__text--lg">24時間</span>住宅トラブル応急サポート
                                </span>
                            </span>
                            <br />
                            水回り、玄関鍵、窓ガラス、電気設備、給湯設備に関する住宅トラブルに応急対応。
                            <br /><br />
                            <span class="reasonList__text--decoration">
                                <span class="reasonList__text--bold reasonList__text--lg">
                                    住まいの<span class="reasonList__text--accent reasonList__text--lg">アフターフォローコンシェルジュ</span>
                                </span>
                            </span>
                            <br />
                            応急対応で解決できない住宅の不具合に関するお問合せを受付。<br />不注意による住まいの損害、自然災害による住まいの損害、その他住まいの不具合などにも対応します。
                            <br />
                        </p>
                        <div class="reasonList__image reasonList__imageFlex">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/img_reason6_1.jpg" class="reasonList__06Image"  alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/img_reason6_2.jpg" class="reasonList__06Image" alt="">
                        </div>
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
</main>

<?php get_footer(); ?>