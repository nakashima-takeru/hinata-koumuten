<?php /* Template Name: イベント */ ?>
<?php get_header(); ?>

<section class="hero">
    <div class="hero__inner">
        <div class="heroCatch">
            <hgroup>
                <h1 class="heroCatch__title">Event</h1>
                <h2 class="heroCatch__lead">イベント</h2>
            </hgroup>
        </div>
    </div>
</section>

<main class="main event">

    <?php echo get_template_part('./includes/part-breadcrumb'); ?>

    <section class="section">
        <div class="container">
            <div class="event__list">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = array(
                    'post_type' => 'event',
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php
                        $post_id = get_the_ID();
                        $status           = get_field('status');
                        $address          = get_field('address');
                        $event_start_date = get_field('event_start_date');
                        $event_last_date  = get_field('event_finish_date');
                        $start_date       = new DateTime($event_start_date);
                        $start_date_format = empty($event_start_date) ? "" : $start_date->format('n月j日');
                        $last_date        = new DateTime($event_last_date);
                        $finish_date_format = empty($event_last_date) ? "" : $last_date->format('n月j日');

                        $specific_dates_array = (array) get_post_meta($post_id, 'event_specific_dates', true);

                        $weekdays = ['日', '月', '火', '水', '木', '金', '土'];
                        $specific_dates = array_column($specific_dates_array, 'event_individual_date');                       
                        $specific_dates = array_map(function ($date) use ($weekdays) {
                            $timestamp = strtotime($date);
                            return date('m月d日', $timestamp) . ' (' . $weekdays[date('w', $timestamp)] . ')';
                        }, $specific_dates);

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
                                <p class="itemEvent__priod">
                                    <?php if (!empty($start_date_format) && !empty($finish_date_format)): ?>
                                        <?php echo esc_html($start_date_format . " ～ " . $finish_date_format); ?>
                                    <?php endif; ?>
                                    <?php if (!empty($specific_dates)): ?>
                                        <span class="extraDates">
                                            <?php if (empty($finish_date_format) && !empty($start_date_format)): ?>
                                                <?php echo $start_date->format('n月j日 (') . $weekdays[date('w', $start_date->getTimestamp())] . ')'; ?>
                                                <?php if (!empty($specific_dates)): echo ','; endif; ?>
                                            <?php endif; ?>
                                            <?php foreach ($specific_dates as $index => $single_date): ?>
                                                <span style="display: inline-block">
                                                    <?php echo esc_html($single_date); ?>
                                                    <?php if ($index + 1 < count($specific_dates)): echo ",";
                                                    endif; ?>
                                                    </span>
                                                <?php endforeach; ?>
                                                </span>
                                            <?php endif; ?>
                                </p>
                                <p class="itemEvent__link">詳細を見る</p>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="fallbackText">開催中のイベントはありません</p>
                <?php endif; ?>
            </div>

            <div class="pageNav">
                <?php
                $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
                $pagination = get_the_posts_pagination(array(
                    'base' => '?paged=%#%',
                    'format' => '?paged=%#%',
                    'prev_text' => '<div class="pageNav__prev"></div>',
                    'next_text' => '<div class="pageNav__next"></div>',
                ));
                echo $pagination;
                ?>
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

    <section class="formSection">
        <hgroup>
            <h4 class="form__title">Form</h4>
            <p class="form__lead">イベント参加申し込みフォーム</p>
        </hgroup>
        <p class="form__subtitle">下記フォームに必要項目をご入力ください。<br>※必須項目は必ずご記入ください。</p>
        <?php echo do_shortcode('[contact-form-7 id="89ed648" title="イベントフォーム"]'); ?>
    </section>

</main>

<?php get_footer(); ?>


<div class="formRow">
    [hidden your-reservation-date id:js-reservation]
    [hidden your-reservation-timeslot id:js-reservationTimeslot]
    <label class="form__label">参加希望日時<span class="required">*</span></label>
    <div class="form__inputData">[no-store-calendar]<p id="js-dateSelectError" class="wpcf7-not-valid-tip errorMessage">
            予約日時を選択してください</p>
    </div>
</div>
<div class="formRow">
    <label class="form__label">お名前<span class="required">*</span></label>
    <div class="form__inputColumn">[text* your-name placeholder "例）ひなた　太郎"]</div>
</div>
<div class="formRow">
    <label class="form__label">ふりがな<span class="required">*</span></label>
    <div class="form__inputColumn">[text* your-furigana placeholder "例）ひなた　たろう"]</div>
</div>
<div class="formRow">
    <label class="form__label">電話番号<span class="required">*</span></label>
    <div class="form__inputColumn">[tel* your-tel placeholder "例）08012341234"]</div>
</div>
<div class="formRow">
    <label class="form__label">メールアドレス<span class="required">*</span></label>
    <div class="form__inputColumn">[email* your-email placeholder "例）info@sample.jp"]</div>
</div>
<div class="formRow">
    <label class="form__label">ご住所<span class="required">*</span></label>
    <div class="form__inputColumn">[text* your-address placeholder "例）880-0004 宮崎県宮崎市〇〇1丁目2-3"]</div>
</div>
<div class="formRow">
    <label class="form__label">ご年齢</label>
    <div class="form__inputColumn">
        [hidden your-age id:js-ageSelect]
        <div class="formDropdownInput js-dropInput" data-hidden-item="js-ageSelect">
            <p class="formDropdown__display js-dropDisplay">選んでください</p>
            <div class="formDropdown__group js-dropGroup">
                <ul class="formDropdown__list">
                    <li class="formDropdown__item js-formDropdownItem" value="10代">10代</li>
                    <li class="formDropdown__item js-formDropdownItem" value="20代">20代</li>
                    <li class="formDropdown__item js-formDropdownItem" value="30代">30代</li>
                    <li class="formDropdown__item js-formDropdownItem" value="40代">40代</li>
                    <li class="formDropdown__item js-formDropdownItem" value="50代">50代</li>
                    <li class="formDropdown__item js-formDropdownItem" value="60代以上">60代以上</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="formRow">
    <label class="form__label">ご質問・ご相談</label>
    <div class="form__inputColumn">[textarea your-message placeholder "ご質問・ご相談はこちらに記入してください。"]</div>
</div>
<div class="formRow">
    <label class="form__label">ひなた工務店を<br>どこでお知りに<br>なりましたか？<span class="required">*</span></label>
    <div class="form__inputColumn">[checkbox your-knowledge-source class:circleStyle use_label_element exclusive
        "インスタグラム広告" "インスタグラム" "facebook広告" "YouTube" "Google検索"
        "Yahoo検索" "ポスティングチラシ" "知人の紹介" "看板" "その他"]</div>
</div>
<div class="formRow">
    <label class="form__label">見たことがある弊社の広告に<br>チェックをつけてください<br>(複数選択可)<span class="required">*</span></label>
    <div class="form__inputColumn">[checkbox your-seen-ads use_label_element "インスタグラム広告" "facebook広告" "ポスティングチラシ"
        "見たことない"]</div>
</div>
<div class="feedbackSection">
    <p class="feedbackTitle">下記アンケートにお答えいただくと当日のお打ち合わせがスムーズに！</p>
    <ul class="feedback__list">
        <li class="feedback__item">
            <span class="feedback__outline"></span>
            <p class="feedback__point"><span>Point</span>01</p>
            <p class="feedback__text">お店に行く前に整理しましょう<br><span>条件の整理</span></p>
        </li>
        <li class="feedback__item">
            <span class="feedback__outline"></span>
            <p class="feedback__point"><span>Point</span>02</p>
            <p class="feedback__text">お客様のニーズに合わせた<br><span>事前提案</span></p>
        </li>
        <li class="feedback__item">
            <span class="feedback__outline"></span>
            <p class="feedback__point"><span>Point</span>03</p>
            <p class="feedback__text">来場アンケートが省略できる<br><span>時間短縮</span></p>
        </li>
    </ul>
    <div class="anket js-accordMain">
        <div class="anket__head js-accordHead">
            <p>アンケートを閉じる</p>
        </div>
        <div class="anket__body js-accordBody">
            <div class="anket__contents js-accordContents">
                <div class="formRow">
                    <label class="form__label">新しいお住まいの<br>ご希望を<br>教えてください。</label>
                    <div class="form__inputColumn">[checkbox your-expectation class:circleStyle use_label_element
                        exclusive "建て替え" "土地があって新築" "土地から探して新築" "リフォーム" "建てたばかり"]</div>
                </div>
                <div class="formRow">
                    <label class="form__label">ご入居希望時期は<br>ありますか？</label>
                    <div class="form__inputColumn multiple">
                        [hidden your-movein-year id:js-moveInYear]
                        <div class="formDropdownInput js-dropInput" data-hidden-item="js-moveInYear">
                            <p class="formDropdown__display js-dropDisplay">選んでください</p>
                            <div class="formDropdown__group js-dropGroup">
                                <ul class="formDropdown__list">
                                    <li class="formDropdown__item js-formDropdownItem" value="今年">今年</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="来年">来年</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="来年以降">来年以降</li>
                                </ul>
                            </div>
                        </div>
                        [hidden your-movein-month id:js-moveInMonth]
                        <div class="formDropdownInput js-dropInput" data-hidden-item="js-moveInMonth">
                            <p class="formDropdown__display js-dropDisplay">選んでください</p>
                            <div class="formDropdown__group js-dropGroup">
                                <ul class="formDropdown__list">
                                    <li class="formDropdown__item js-formDropdownItem" value="1月ごろ">1月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="2月ごろ">2月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="3月ごろ">3月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="4月ごろ">4月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="5月ごろ">5月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="6月ごろ">6月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="7月ごろ">7月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="8月ごろ">8月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="9月ごろ">9月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="10月ごろ">10月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="11月ごろ">11月ごろ</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="12月ごろ">12月ごろ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formRow">
                    <label class="form__label">新しいお住まいを<br>ご検討される理由は<br>何ですか？</label>
                    <div class="form__inputColumn checkboxes">[checkbox your-newhome-reason use_label_element "家賃が無駄"
                        "今の住居が狭い" "今の住居が古い" "子供・家族のため" "通勤・通学に不便" "結婚" "世帯を分けるため" "今の住居が暑い・寒い" "いつかは一軒家に住みたいと思っていた"
                        "駐車場から遠く不便" "希望の土地が見つかった" "その他(その他を選択された方は下記にご記載ください。)"][group your-newhome-reason-other][text
                        your-newhome-reason-text class:embededInput placeholder "ご入力ください。"][/group]</div>
                </div>
                <div class="formRow">
                    <label class="form__label">ご来場時に、<br>特にお聞きになられたい事を<br>教えてください。</label>
                    <div class="form__inputColumn checkboxes">[checkbox your-visit-questions use_label_element
                        "何から始めたら良いのか知りたい" "ひなた工務店について知りたい" "土地について相談したい" "資金・予算について相談したい" "間取について相談したい"
                        "標準仕様について詳しく聞きたい" "性能について詳しく聞きたい" "ローンについて相談したい" "アフターサービス・保証について詳しく聞きたい" "リフォームについて聞きたい"]</div>
                </div>
                <div class="formRow">
                    <label class="form__label">現在のお住まいは<br>どのタイプですか？</label>
                    <div class="form__inputColumn">
                        <div>
                            [checkbox your-current-home-type class:circleStyle use_label_element
                            exclusive "持ち家" "借家" "家族と同居" "賃貸（アパート、マンション、戸建て）"]
                        </div>

                        <div class="form__input2col">
                            <label>毎月の賃料</label>
                            <div class="form__inputColumn hasExtraLabel">[number
                                your-current-home-rent min:0
                                class:manEn]<span>万円</span>
                            </div>
                        </div>

                        <div class="form__input2col">
                            <label>居住年数</label>
                            <div class="form__inputColumn hasExtraLabel">[number
                                your-current-home-year min:0
                                class:manEn]<span>年</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formRow">
                    <label class="form__label">ご入居予定の方(全員)に<br>チェックをお願いします。</label>
                    <div class="form__inputColumn checkboxes noSpan" id="js-ownOnlyToggle">
                        <label>[checkbox your-occupant-group use_label_element "本人"]</label>
                        <label>[checkbox your-occupant-group use_label_element "配偶者"]</label>
                        <div class="hasChildInput familyInput1"><label>[checkbox your-occupant-group use_label_element
                                "子供"]</label><label class="childInput">[number your-number-children min:0
                                class:numberPeople] 人</label></div>
                        <label>[checkbox your-occupant-group use_label_element "父"]</label>
                        <label>[checkbox your-occupant-group use_label_element "母"]</label>
                    </div>
                </div>
                <div class="formRow">
                    <label class="form__label">土地や諸費用を含む<br>総予算はいくらですか？</label>
                    <div class="form__inputColumn hasExtraLabel">[number your-total-budget min:0
                        class:manEn]<span>万円</span></div>
                </div>
                <div class="formRow">
                    <label class="form__label">本人様の昨年度の<br>年収を教えてください。</label>
                    <div class="form__inputColumn">
                        [hidden your-house-income id:js-incomeSelect]
                        <div class="formDropdownInput js-dropInput" data-hidden-item="js-incomeSelect">
                            <p class="formDropdown__display js-dropDisplay">選んでください</p>
                            <div class="formDropdown__group js-dropGroup">
                                <ul class="formDropdown__list">
                                    <li class="formDropdown__item js-formDropdownItem" value="〜299万円">〜299万円</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="300万円〜">300万円〜</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="400万円〜">400万円〜</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="500万円〜">500万円〜</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="600万円〜">600万円〜</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="700万円〜">700万円〜</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="700万円〜">800万円〜</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="700万円〜">900万円〜</li>
                                    <li class="formDropdown__item js-formDropdownItem" value="700万円〜">1,000万円〜</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formRow">
                    <label class="form__label">その他、ご年収がある方は<br>いらっしゃいますか？</label>
                    <div class="form__inputColumn checkboxes noSpan">
                        <div class="incomeCheckbox"><label>[checkbox other-income-group "いない"]</label></div>

                        <div class="incomeCheckbox"><label>[checkbox other-income-group "配偶者"]</label><label
                                class="incomeCheckbox__input">[number your-spouse-income min:0 class:manEn] 万円</label>
                        </div>
                        <div class="incomeCheckbox"><label>[checkbox other-income-group "子供"]</label><label
                                class="incomeCheckbox__input">[number your-children-income min:0 class:manEn] 万円</label>
                        </div>
                        <div class="incomeCheckbox"><label>[checkbox other-income-group "父"]</label><label
                                class="incomeCheckbox__input">[number your-father-income min:0 class:manEn] 万円</label>
                        </div>
                        <div class="incomeCheckbox"><label>[checkbox other-income-group "母"]</label><label
                                class="incomeCheckbox__input">[number your-mother-income min:0 class:manEn] 万円</label>
                        </div>
                    </div>
                </div>
                <div class="formRow">
                    <label class="form__label">その他ローンは<br>ございますか？</label>
                    <div class="form__inputColumn checkboxes noSpan loans">
                        <div class="incomeCheckbox"><label>[checkbox other-loan-group "車のローン"]</label><label
                                class="incomeCheckbox__input">[number your-car-loan min:0 class:manEn] 万円</label></div>
                        <div class="incomeCheckbox"><label>[checkbox other-loan-group "奨学金"]</label><label
                                class="incomeCheckbox__input">[number your-education-loan min:0 class:manEn] 万円</label>
                        </div>
                        <div class="incomeCheckbox"><label>[checkbox other-loan-group "その他ローン"]</label><label
                                class="incomeCheckbox__input">[number your-other-loan min:0 class:manEn] 万円</label>
                        </div>
                        <div class="incomeCheckbox"><label>[checkbox other-loan-group "なし"]</label></div>
                    </div>
                </div>
                <div class="formRow">
                    <label
                        class="form__label">営業担当者にご要望が<br>ありましたらお選びください。<br>※ご希望に添えない場合がございます。<br>予めご了承くださいませ。</label>
                    <div class="form__inputColumn checkboxes">[checkbox your-staff-request use_label_element "特になし"
                        "経験や知識が豊富なベテランスタッフ" "年齢が近いスタッフ" "その他(その他を選択された方は下記に記載ください。)"][group your-staff-request-other][text your-staff-request-text class:embededInput placeholder "ご入力ください。"][/group]
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="formModal" id="js-formModal">
    <div class="formModal__inner">
        <span class="formModal__head"></span>
        <div class="formModal__contents">
            <p class="formModal__text"><span class="red">下記の進呈条件を必ずお読みください</span></p>
            <p class="formModal__text">【間取りプレゼント 進呈条件】</p>
            <ul class="formModal__list">
                <li class="formModal__text">・事前内容確認の連絡に出ていただくこと。</li>
                <li class="formModal__text">・郵送にての送付にご同意いただける方。</li>
                <li class="formModal__text">・はじめてのご来場であること。</li>
                <li class="formModal__text">・アンケートにご記入いただくこと。</li>
                <li class="formModal__text">・商品説明を対面で聞いて頂くこと。</li>

                <li class="formModal__text">・モデルルームを内見いただくこと</li>

                <li class="formModal__text">・１年以内に建築を検討していること。</li>
                <li class="formModal__text">・弊社対応エリア内で建築をご検討の方</li>
                <li class="formModal__text">・ご結婚されている方は、配偶者と来場いただくこと。<br>（ご結婚予定の方は、そのお相手と来場）</li>
                <li class="formModal__text">・ご友人同士での来場でないこと</li>
            </ul>
            <ul class="formModal__list">
                <li class="formModal__text">・当社にて融資の事前審査を申込および、結果の報告を受けること</li>
                <li class="formModal__text">・他社にて事前審査済の方は、融資承認書を提出いただけること</li>
                <li class="formModal__text">・身分証の提示をご来店の際にしていただく場合がございます。</li>
            </ul>
            <p class="formModal__text">※全ての条件を満たした方限定の来場特典となります。</p>
        </div>
        <button class="formModal__button" type="button" id="js-formModalButton">確認しました。</button>
    </div>
</div>
<div class="formRow">
    <label class="form__label">ご来場特典の進呈条件は<br>ご確認されましたか？<span class="required">*</span></label>
    <div class="form__inputColumn"><span class="giftAcceptance">[acceptance
            your-gift-acceptance]確認する[/acceptance]</span></div>
</div>
<div class="formDisclaimer">
    <p><strong>【携帯メールアドレスのドメイン指定受信に関するお願い】</strong><br>
        メールアドレスを登録された方には、<span
            class="orange">自動で確認メールを送信</span>しております。メールアドレスの誤入力、携帯電話のドメイン指定受信の設定などにより確認メールを受信出来ない場合がございます。迷惑メールなどに入っている場合もございますので、再度受信設定をご確認ください。<span
            class="orange">確認メールが届かない場合</span>は、当社からの返信を受信出来ない可能性がございますので、お手数ですが、メール以外の連絡方法を追記の上、再度お問い合わせいただきますようお願いいたします。
    </p>
</div>
<div class="formConfirm">[acceptance your-acceptance]個人情報の取り扱いに同意する[/acceptance]</div>
<div class="formSubmit">
    [submit class:buttonRight "送信する"]
</div>
<p class="formNoticeText">確認画面はございません。現在入力されている情報が送信されます。</p>