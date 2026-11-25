<?php /* Template Name: 商品紹介 */ ?>
<?php get_header(); ?>
<?php
$banner = get_field('banner');
?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">LineUP</h1>
                <h2 class="heroCatch__lead">商品ラインナップ</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="section">
        <div class="container">
            <?php echo get_template_part('./includes/part-banner'); ?>
            <div class="sectionHead">
                <hgroup>
                    <div class="sectionHead__inner">
                        <h2 class="sectionHead__title"><span>ひなた工務店</span>で</h2>
                        <h3 class="sectionHead__word"><span>理想の暮らし</span><small>を</small>はじめましょう</h3>
                    </div>
                </hgroup>
            </div>
            <div class="lineupBox">
                <div class="lineupBoxStep">
                    <p class="lineupBoxStep__head">Step1</p>
                    <div class="lineupBoxStep__inner">
                        <h4 class="lineupBoxStep__title">建物の広さを決める</h4>
                        <p class="lineupBoxStep__text">坪数ごとに分かりやすい価格設定で20~30坪までのプランをご用意。<br>あなたのライフスタイルにあった大きさをお選びください。</p>
                    </div>
                </div>
                <div class="lineupBox__column">
                    <div class="lineupBoxItem">
                        <div class="lineupBoxItem__thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/img__room1.jpg" alt="">
                        </div>
						<?php /*
                        <div class="lineupBoxItemPrice is-orange">
                            <p class="lineupBoxItemPrice__title">2階</p>
                            <?php
                            $price_2f = [
                                ['word'  =>  '20', 'price' =>  '1,360', 'tax'   =>  '34,068',],
                                ['word'  =>  '22', 'price' =>  '1,440', 'tax'   =>  '36,072',],
                                ['word'  =>  '24', 'price' =>  '1,520', 'tax'   =>  '38,076',],
                                ['word'  =>  '26', 'price' =>  '1,580', 'tax'   =>  '39,579',],
                                ['word'  =>  '28', 'price' =>  '1,630', 'tax'   =>  '40,831',],
                                ['word'  =>  '30', 'price' =>  '1,680', 'tax'   =>  '42,084',],
                                ['word'  =>  '32', 'price' =>  '1,710', 'tax'   =>  '42,835',],
                                ['word'  =>  '35', 'price' =>  '1,790', 'tax'   =>  '44,839',],
								['word'  =>  '36', 'price' =>  '1,830', 'tax'   =>  '45,841',],
								['word'  =>  '38', 'price' =>  '1,910', 'tax'   =>  '47,845',],
								['word'  =>  '40', 'price' =>  '2,000', 'tax'   =>  '50,100',],
								['word'  =>  '42', 'price' =>  '2,090', 'tax'   =>  '52,354',],
								['word'  =>  '44', 'price' =>  '2,180', 'tax'   =>  '54,609',],
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
						*/ ?>
                    </div>
                    <div class="lineupBoxItem">
                        <div class="lineupBoxItem__thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/img__room2.jpg" alt="">
                        </div>
						<?php /*
                        <div class="lineupBoxItemPrice is-green">
                            <p class="lineupBoxItemPrice__title">平屋</p>
                            <?php
                            $price_house = [
                                ['word'  =>  '16', 'price' =>  '1,170', 'tax'   =>  '29,298',],
                                ['word'  =>  '18', 'price' =>  '1,283', 'tax'   =>  '32,149',],
                                ['word'  =>  '20', 'price' =>  '1,374', 'tax'   =>  '34,419',],
                                ['word'  =>  '22', 'price' =>  '1,454', 'tax'   =>  '36,428',],
                                ['word'  =>  '24', 'price' =>  '1,531', 'tax'   =>  '38,356',],
                                ['word'  =>  '27', 'price' =>  '1,674', 'tax'   =>  '41,934',],
                                ['word'  =>  '30', 'price' =>  '1,851', 'tax'   =>  '46,367',],
                                ['word'  =>  '32', 'price' =>  '1,965', 'tax'   =>  '49,218',],
								['word'  =>  '34', 'price' =>  '2,081', 'tax'   =>  '52,124',],
								['word'  =>  '36', 'price' =>  '2,192', 'tax'   =>  '54,919',],
								['word'  =>  '38', 'price' =>  '2,303', 'tax'   =>  '57,685',],
								['word'  =>  '40', 'price' =>  '2,412', 'tax'   =>  '60,420',],
								['word'  =>  '42', 'price' =>  '2,520', 'tax'   =>  '63,126',],
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
						*/ ?>
                    </div>
                </div>
            </div>
            <div class="lineupBox">
                <div class="lineupBoxStep">
                    <p class="lineupBoxStep__head">Step2</p>
                    <div class="lineupBoxStep__inner">
                        <h4 class="lineupBoxStep__title">内装のテイストを決める</h4>
                        <p class="lineupBoxStep__text">これまでの施工実績より、人気のテイストを厳選。<br>知識豊かなインテリアコーディネータが住まいの統一感と心地よい空間をご提案します。</p>
                    </div>
                </div>
                <?php
                $caseStyle = [
                    [
                        'img'   => 'cafestyle',
                        'title' =>  'カフェスタイル',
                        'word'  => 'すっきりシンプルなインテリア。<br>無彩色が好き、飾りすぎない空間が落ち着くという方におすすめ。',
                    ],
                    [
                        'img'   => 'cittastyle',
                        'title' =>  'チッタスタイル',
                        'word'  => '10年後も落ち着く空間で過ごせるインテリア。<br>やさしい色合いが好き、やわからな空間に包まれていたいという方におすすめ。',
                    ],
                    [
                        'img'   => 'industrial',
                        'title' =>  'インダストリアルスタイル',
                        'word'  => '大人ビターな雰囲気が漂うインテリア。<br>革製品や落ち着いた空間が好きな方におすすめ。',
                    ],
                    [
                        'img'   => 'nordic',
                        'title' =>  '北欧スタイル',
                        'word'  => 'シンプルで暖かみのあるインテリア<br/>白を基調とした室内は明るく開放感抜群。<br/>照明にこだわったり、丸みのある木製家具を置きたい方におすすめ。',
                    ],
                ];
                ?>
                <?php $i = 0; ?>
                <?php foreach ($caseStyle as $display) : $i++; ?>
                    <div class="lineupBoxStepImg">
                        <div class="lineupBoxStepImg__thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/img_room_<?php echo $display['img']; ?>.jpg" alt="">
                        </div>
                        <div class="lineupBoxStepImgDesc">
                            <div class="lineupBoxStepImgDesc__head">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/title_room_<?php echo $display['img']; ?>.png" alt="">
                            </div>
                            <p class="lineupBoxStepImgDesc__title"><?php echo $display['title']; ?></p>
                            <p class="lineupBoxStepImgDesc__word"><?php echo $display['word']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="lineupOption">
                <p class="lineupOption__title"><span>充実の設備環境</span></p>
                <div class="lineupOption__column">
                    <?php
                    $option = [
                        ['word' => '食器洗い乾燥機 システムキッチン'],
                        ['word' => '制震ダンパーダイナミックファスナー'],
                        ['word' => '太陽光発電システムハンファ'],
                        ['word' => 'LEDダウンライト標準'],
                        ['word' => '全窓網戸標準'],
                        ['word' => 'コロナ　太陽光発電活用エコキュート'],
                        ['word' => '10年塗膜保証付きサイディング KMEW　親水セラ'],
                        ['word' => '造作手洗い'],
                    ];
                    ?>
                    <?php $i = 0; ?>
                    <?php foreach ($option as $display) : $i++; ?>
                        <dl class="lineupOptionItem">
                            <dt class="lineupOptionItem__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lineup/lineup_option_<?php echo $i; ?>.jpg" alt="">
                            </dt>
                            <dd class="lineupOptionItem__word"><?php echo $display['word']; ?></dd>
                        </dl>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="banner container">
                <div class="banner__area">
                    <?php echo get_template_part('./includes/part-banner'); ?>
                </div>
            </div>

            <section class="event">
                <div class="container">
                    <div class="event__list">
                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'event',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'paged' => $paged,
                        );
                        $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <?php
                                $status           = get_field('status');
                                $address          = get_field('address');
                                $event_start_date = get_field('event_start_date');
                                $event_last_date  = get_field('event_finish_date');
                                $start_date       = new DateTime($event_start_date);
                                $last_date        = new DateTime($event_last_date);

                                if ($status == 'before') {
                                    $status_text = '開催前';
                                } elseif ($status == 'session') {
                                    $status_text = '開催中';
                                } elseif ($status == 'ended') {
                                    $status_text = '開催終了';
                                }
                                ?>
                                <div class="itemEvent">
                                    <a href="<?php the_permalink(""); ?>">
                                        <div class="itemEventThumbanil">
                                            <?php the_post_thumbnail(); ?>
                                            <p class="itemEventThumbanil__status is-<?php echo esc_attr($status); ?>">
                                                <?php echo esc_html($status_text); ?>
                                            </p>
                                        </div>
                                        <p class="itemEvent__title"><?php the_title(); ?></p>
                                        <p class="itemEvent__address"><?php echo esc_html($address); ?></p>
                                        <p class="itemEvent__priod"><?php echo esc_html($start_date->format('Y年n月j日')); ?> ～ <?php echo esc_html($last_date->format('Y年n月j日')); ?></p>
                                        <p class="itemEvent__link">詳細を見る</p>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p class="fallbackText">現在開催中のイベントはありません</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </section>

</main>


<?php get_footer(); ?>