<?php
$nav_list = [
    [
        'link'  =>  'concept',
        'lead'  =>  'Concept',
        'word'  =>  'コンセプト',
    ],
    [
        'link'  =>  'lineup',
        'lead'  =>  'Lineup',
        'word'  =>  '商品ラインナップ',
    ],
    [
        'link'  =>  'works',
        'lead'  =>  'Works',
        'word'  =>  '施工事例',
    ],
    [
        'link'  =>  'event',
        'lead'  =>  'Event',
        'word'  =>  'イベント',
    ],
    [
        'link'  =>  'modelhouse',
        'lead'  =>  'Modelhouse',
        'word'  =>  'モデルハウス',
    ],
    // [
    //     'link'  =>  'lifestyle',
    //     'lead'  =>  'Lifestyle',
    //     'word'  =>  'ライフスタイル',
    // ],
    // [
    //     'link'  =>  'staff',
    //     'lead'  =>  'Staff',
    //     'word'  =>  'スタッフ',
    // ],
    // [
    //     'link'  =>  'news',
    //     'lead'  =>  'News',
    //     'word'  =>  'ニュース',
    // ],
    // [
    //     'link'  =>  'estate',
    //     'lead'  =>  'Estate',
    //     'word'  =>  '自社土地・建売情報',
    // ],
    [
        'link'  =>  'company',
        'lead'  =>  'Company',
        'word'  =>  '会社案内',
    ],
];
?>

<header class="header js-header">
    <div class="header__inner">
        <h1 class="header__logo js-headerLogo">
            <?php if (is_home() || is_front_page()) : ?>
                <a href="<?php echo home_url(""); ?>" class="header__logo--animated">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="ひなた工務店" width="474" height="92" loading="eager">
                </a>
            <?php else: ?>
                <a href="<?php echo home_url(""); ?>" class="header__logo--default">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="ひなた工務店" width="474" height="92" loading="eager">
                </a>
            <?php endif; ?>
        </h1>
        <nav aria-label="グローバルメニュー" class="headerNav">
            <ul class="headerNav__list">
                <?php foreach ($nav_list as $display) : ?>
                    <li class="headerNav__item">
                        <a class="headerNav__link" href="<?php echo home_url($display['link']); ?>">
                            <p class="headerNav__item--lead"><?php echo $display['lead']; ?></p>
                            <p class="headerNav__item--word"><?php echo $display['word']; ?></p>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="menuMobileWrapper">
            <nav id="menuMobile" class="menuMobile js-menuMobile" aria-label="グローバルメニュー">
                <div class="menuMobile__list">
                    <?php foreach ($nav_list as $display) : ?>
                        <div class="menuMobile__item">
                            <a class="menuMobile__link" href="<?php echo home_url($display['link']); ?>">
                                <span class="menuMobile__link--en"><?php echo $display['lead']; ?></span>
                                <span class="menuMobile__link--jp">
                                    <?php echo $display['word']; ?>
                                    <span class="menuMobile__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_chevron-right_orange.svg" alt=""></span>
                                </span>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </nav>
            <button class="menuMobileButton js-menuMobileButton" type="button" aria-controls="menuMobile" aria-expanded="false" aria-label="メニューを開く">
                <span class="menuMobileButton__bar"></span>
            </button>
        </div>
    </div>
</header>

<?php if (is_home() || is_front_page()) : ?>
    <div class="header__logoHome">
        <span aria-hidden="true" class="header__logoBg">
        </span>
        <a href="<?php echo home_url(""); ?>" class="header__logo--home">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_home.svg" alt="ひなた工務店">
        </a>
    </div>
<?php endif; ?>