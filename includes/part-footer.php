<?php

$nav_list1 = [
    [
        'label' => 'ホーム',
        'link' => '/',
    ],
    [
        'label' => 'ライフスタイル',
        'link' => 'lifestyle',
    ],
    // [
    //     'label' => 'コンセプト',
    //     'link' => 'concept',
    //     'children' => [
    //         [
    //             'label' => 'リーズナブルな理由',
    //             'link' => 'concept/reasonable',
    //         ],
    //         [
    //             'label' => '高品質な住宅機能',
    //             'link' => 'concept/high-quality',
    //         ],
    //         [
    //             'label' => '安心と信頼の保証',
    //             'link' => 'concept/guarantee',
    //         ],
    //     ]
    // ],
    // [
    //     'label' => '家づくりの流れ',
    //     'link' => 'flow',
    // ],
    [
        'label' => 'イベント',
        'link' => 'event',
    ],
    [
        'label' => 'お知らせ',
        'link' => 'news',
    ],
];

$nav_list2 = [
    [
        'label' => 'モデルハウス',
        'link' => 'modelhouse',
    ],
    [
        'label' => '施工事例',
        'link' => 'works',
    ],
    [
        'label' => 'スタッフ紹介',
        'link' => 'staff',
    ],
   // [
   //     'label' => 'スタッフブログ',
   //     'link' => 'blog',
   // ],
    [
        'label' => '会社案内',
        'link' => 'company',
    ],
    // [
    //     'label' => '店舗一覧',
    //     'link' => 'shoplist',
    // ],
    [
        'label' => '商品ラインナップ',
        'link' => 'lineup',
    ],
    // [
    //     'label' => '自社土地・建売情報',
    //     'link' => 'estate',
    // ],
];

$nav_list3 = [
    [
        'label' => '来場予約',
        'link' => 'form-visitor',
    ],
    // [
    //     'label' => 'カタログ請求',
    //     'link' => 'form-request',
    // ],
    // [
    //     'label' => 'お問い合わせ',
    //     'link' => 'contact',
    // ],
    [
        'label' => 'プライバシーポリシー',
        'link' => 'privacypolicy',
    ]
]


?>

<footer class="footer">
    <div class="footer__inner">
        <div class="footer__info">
            <a href="<?php echo home_url("/"); ?>" class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_footer.svg" alt="ひなた工務店"></a>
            <div class="footer__addressWrapper">
                <span class="footer__addressContainer">
                    <p class="footer__address">宮崎大橋店<br />宮崎市大橋2丁目142-1</p>
                    <a href="tel:0985-41-5233" class="footer__tel">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_tel.svg" alt="">
                        0985-41-5233
                    </a>
                </span>
                <span class="footer__addressContainer">
                    <p class="footer__address">都城上川東店<br />都城市上川東3丁目8-1</p>
                    <a href="tel:0986-36-8000" class="footer__tel">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_tel.svg" alt="">
                        0986-36-8000
                    </a>
                </span>
            </div>
            <div class="footer__day">
                <p class="footer__day-open"><span>営業時間</span>9：30〜18：00</p>
                <p class="footer__day-close"><span>定休日</span>火曜日・水曜日</p>
            </div>

            <a href="https://www.instagram.com/hinata_koumuten.miyazaki?igsh=aDVneWU1NHRxZzlw&utm_source=qr" target="_blank" class="footer__instagram">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_instagram_footer.svg" alt="">
                Instagram更新中！
            </a>

        </div>
        <nav class="footer__menu">
            <ul class="footerList">
                <?php foreach ($nav_list1 as $item) : ?>
                    <li class="footerList__item">
                        <a class="footerList__link" href="<?php echo home_url($item['link']); ?>">
                            <?php echo $item['label']; ?>
                        </a>
                        <?php if (!empty($item['children'])) : ?>
                            <ul class="footerList__sub">
                                <?php foreach ($item['children'] as $child) : ?>
                                    <li class="footerList__subItem">
                                        <a class="footerList__subLink" href="<?php echo home_url($child['link']); ?>">
                                            <?php echo $child['label']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="footerList">
                <?php foreach ($nav_list2 as $item) : ?>
                    <li class="footerList__item">
                        <a class="footerList__link" href="<?php echo home_url($item['link']); ?>">
                            <?php echo $item['label']; ?>
                        </a>
                        <?php if (!empty($item['children'])) : ?>
                            <ul class="footerList__sub">
                                <?php foreach ($item['children'] as $child) : ?>
                                    <li class="footerList__sub-item">
                                        <a class="footerList__sub-link" href="<?php echo home_url($child['link']); ?>">
                                            <?php echo $child['label']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="footerList">
                <?php foreach ($nav_list3 as $item) : ?>
                    <li class="footerList__item">
                        <a class="footerList__link" href="<?php echo home_url($item['link']); ?>">
                            <?php echo $item['label']; ?>
                        </a>
                        <?php if (!empty($item['children'])) : ?>
                            <ul class="footerList__sub">
                                <?php foreach ($item['children'] as $child) : ?>
                                    <li class="footerList__sub-item">
                                        <a class="footerList__sub-link" href="<?php echo home_url($child['link']); ?>">
                                            <?php echo $child['label']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>

    <div class="fixButton">
        <?php /* 追従の予約ボタン：get_template_part の引数 'show_fix_links' => false で非表示（LPなど） */ ?>
        <?php if ($args['show_fix_links'] ?? true) : ?>
        <div class="fixButton__links">
            <a href="<?php echo home_url("/catalog"); ?>" class="fixButton__link fixButton__form">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/button_catalog.svg" alt="WEBで予約">
            </a>
            <a href="<?php echo home_url("form-visitor"); ?>" class="fixButton__link fixButton__form">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/button_reservation.svg" alt="WEBで予約">
            </a>
        </div>
        <?php endif; ?>
        <?php get_template_part('includes/back-to-top'); ?>
    </div>
</footer>
<p class="copyright">Copyright © 2024 HINATA KOMUTEN All Righ ts Reserved.</p>