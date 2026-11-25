<?php
//============================================================
// Add JS file to Change the loop labels 
// in the single calendar admin page
//============================================================
function load_script_for_calendar_month_admin_page($hook_suffix)
{
    global $post_type;

    if ($post_type == 'calendar_month' && ($hook_suffix == 'post.php' || $hook_suffix == 'post-new.php')) {
        wp_enqueue_script(
            'admin.js',
            get_template_directory_uri() . '/assets/js/admin.js',
            array(),
            null,
            true
        );
    }
}

add_action('admin_enqueue_scripts', 'load_script_for_calendar_month_admin_page');
//============================================================
// アイキャッチ画像
//============================================================
add_theme_support('post-thumbnails');

//============================================================
// メディアライブラリでサイズ違いで自動生成させない
//============================================================
function not_create_image($sizes)
{
    $sizes = array();
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'not_create_image');

//============================================================
// メディアライブラリでscaledが付く縮小画像を生成しない
//============================================================
add_filter('big_image_size_threshold', '__return_false');

//============================================================
// 投稿のURLを日本語にさせない
//============================================================
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
    if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
        $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
    }
    return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);

//============================================================
// contact form <p>タグ削除
//============================================================

// add_filter('wpcf7_autop_or_not', '__return_false');

//============================================================
// カテゴリー：　を消す
//============================================================
function custom_archive_title($title)
{
    $titleParts = explode(': ', $title);
    if ($titleParts[1]) {
        return $titleParts[1];
    }
    return $title;
}
add_filter('get_the_archive_title', 'custom_archive_title');


//============================================================
// 「投稿」の表記変更
//============================================================
function Change_menulabel()
{
    global $menu;
    global $submenu;
    $name = 'お知らせ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name . '一覧';
    $submenu['edit.php'][10][0] = '新規' . $name . 'を追加';
}

function Change_objectlabel()
{
    global $wp_post_types;
    $name = '投稿';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = '新規' . $name . 'を追加';
    $labels->edit_item = $name . 'の編集';
    $labels->new_item = '新規' . $name;
    $labels->view_item = $name . 'を表示';
    $labels->search_items = $name . 'を検索';
    $labels->not_found = $name . 'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'が見つかりませんでした';
}

add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');

//============================================================
// カスタム投稿
//============================================================
// function create_post_blog()
// {
//     add_theme_support('post-thumbnails');

//     register_post_type('blog', array(
//         'labels' => array(
//             'name' => __('ブログ'),
//             'singular_name' => __('ブログ'),
//             'add_new' => __('新規追加'),
//             'add_new_item' => __('ブログを追加'),
//             'edit_item' => __('ブログを編集'),
//             'new_item' => __('新しいブログ'),
//             'view_item' => __('ブログを表示'),
//             'search_items' => __('ブログを検索'),
//             'not_found' => __('ブログが見つかりません'),
//             'not_found_in_trash' => __('ゴミ箱にブログが見つかりません'),
//             'all_items' => __('すべてのブログ'),
//             'archives' => __('ブログアーカイブ'),
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'menu_position' => 4,
//         'show_in_rest' => true,
//         'rewrite' => array('slug' => 'blog'),
//         'supports' => array('title', 'editor', 'thumbnail'),
//     ));

//     register_taxonomy('blog_category', 'blog', array(
//         'labels' => array(
//             'name' => __('カテゴリー'),
//             'singular_name' => __('カテゴリー'),
//             'menu_name' => __('カテゴリー'),
//         ),
//         'public' => true,
//         'show_in_rest' => true,
//         'hierarchical' => true,
//     ));
// }

// add_action('init', 'create_post_blog');

function create_post_blog()
{
    add_theme_support('post-thumbnails');

    register_post_type('blog', array(
        'labels' => array(
            'name' => __('スタッフブログ'),
            'singular_name' => __('ブログ'),
            'add_new' => __('新規追加'),
            'add_new_item' => __('ブログを追加'),
            'edit_item' => __('ブログを編集'),
            'new_item' => __('新しいブログ'),
            'view_item' => __('ブログを表示'),
            'search_items' => __('ブログを検索'),
            'not_found' => __('ブログが見つかりません'),
            'not_found_in_trash' => __('ゴミ箱にブログが見つかりません'),
            'all_items' => __('すべてのブログ'),
            'archives' => __('ブログアーカイブ'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'blog'),
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'create_post_blog');

function create_post_event()
{
    add_theme_support('post-thumbnails');

    register_post_type('event', array(
        'labels' => array(
            'name' => __('イベント'),
            'singular_name' => __('イベント'),
            'add_new' => __('新規追加'),
            'add_new_item' => __('イベントを追加'),
            'edit_item' => __('イベントを編集'),
            'new_item' => __('新しいイベント'),
            'view_item' => __('イベントを表示'),
            'search_items' => __('イベントを検索'),
            'not_found' => __('イベントが見つかりません'),
            'not_found_in_trash' => __('ゴミ箱にイベントが見つかりません'),
            'all_items' => __('すべてのイベント'),
            'archives' => __('イベントアーカイブ'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'event'),
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'create_post_event');

function create_post_staff()
{
    add_theme_support('post-thumbnails');

    register_post_type('staff', array(
        'labels' => array(
            'name' => __('スタッフ'),
            'singular_name' => __('スタッフ'),
            'add_new' => __('新規追加'),
            'add_new_item' => __('スタッフを追加'),
            'edit_item' => __('スタッフを編集'),
            'new_item' => __('新しいスタッフ'),
            'view_item' => __('スタッフを表示'),
            'search_items' => __('スタッフを検索'),
            'not_found' => __('スタッフが見つかりません'),
            'not_found_in_trash' => __('ゴミ箱にスタッフが見つかりません'),
            'all_items' => __('すべてのスタッフ'),
            'archives' => __('スタッフアーカイブ'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'staff'),
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'create_post_staff');

function create_post_modelhouse()
{
    add_theme_support('post-thumbnails');

    register_post_type('modelhouse', array(
        'labels' => array(
            'name' => __('モデルハウス'),
            'singular_name' => __('モデルハウス投稿'),
            'add_new' => __('新規追加'),
            'add_new_item' => __('モデルハウス投稿を追加'),
            'edit_item' => __('モデルハウス投稿を編集'),
            'new_item' => __('新しいモデルハウス投稿'),
            'view_item' => __('モデルハウス投稿を表示'),
            'search_items' => __('モデルハウス投稿を検索'),
            'not_found' => __('モデルハウス投稿が見つかりません'),
            'not_found_in_trash' => __('ゴミ箱にモデルハウス投稿が見つかりません'),
            'all_items' => __('すべてのモデルハウス投稿'),
            'archives' => __('モデルハウス投稿アーカイブ'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'modelhouse'),
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'create_post_modelhouse');


function create_post_works()
{
    add_theme_support('post-thumbnails');

    register_post_type('works', array(
        'labels' => array(
            'name' => __('施工事例'),
            'singular_name' => __('施工事例'),
            'add_new' => __('新規追加'),
            'add_new_item' => __('施工事例を追加'),
            'edit_item' => __('施工事例を編集'),
            'new_item' => __('新しい施工事例'),
            'view_item' => __('施工事例を表示'),
            'search_items' => __('施工事例を検索'),
            'not_found' => __('施工事例が見つかりません'),
            'not_found_in_trash' => __('ゴミ箱に施工事例が見つかりません'),
            'all_items' => __('すべての施工事例'),
            'archives' => __('施工事例アーカイブ'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'works'),
        'supports' => array('title', 'editor', 'thumbnail'),
    ));

    register_taxonomy(
        'works-plan',
        'works',
        array(
            'hierarchical' => true,
            'label' => '坪プラン',
            'query_var' => true,
            'rewrite' => array('slug' => 'works-plan'),
            'show_in_rest' => true
        )
    );
}

add_action('init', 'create_post_works');

function create_post_estate()
{
    add_theme_support('post-thumbnails');

    register_post_type('estate', array(
        'labels' => array(
            'name' => __('自社土地・建売情報'),
            'singular_name' => __('自社土地・建売情報'),
            'add_new' => __('新規追加'),
            'add_new_item' => __('自社土地・建売情報を追加'),
            'edit_item' => __('自社土地・建売情報を編集'),
            'new_item' => __('新しい自社土地・建売情報'),
            'view_item' => __('自社土地・建売情報を表示'),
            'search_items' => __('自社土地・建売情報を検索'),
            'not_found' => __('自社土地・建売情報が見つかりません'),
            'not_found_in_trash' => __('ゴミ箱に自社土地・建売情報が見つかりません'),
            'all_items' => __('すべての自社土地・建売情報'),
            'archives' => __('自社土地・建売情報アーカイブ'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'estate'),
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'create_post_estate');


//============================================================
// カスタム投稿
//============================================================
function rename_cat_function($link)
{
    return str_replace("/category/", "/", $link);
}
add_filter('user_trailingslashit', 'rename_cat_function');

function rename_cat_flush_rules()
{
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
add_action('init', 'rename_cat_flush_rules');

function rename_cat_rewrite($wp_rewrite)
{
    $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name=' . $wp_rewrite->preg_index(1) . '&paged=' . $wp_rewrite->preg_index(2));
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'rename_cat_rewrite');


add_action('init', 'flush_rewrite_rules');


//============================================================
// contact form <p>タグ削除
//============================================================

add_filter('wpcf7_autop_or_not', '__return_false');

//============================================================
// contact form 7 validation functions
//============================================================

function custom_cf7_field_validation_checks($result, $tags)
{
    foreach ($tags as $tag) {
        // Check is reservation field is present
        if (isset($tag->name) && 'your-reservation-date' == $tag->name || 'your-reservation-timeslot' == $tag->name) {
            $your_reservation = isset($_POST['your-reservation-date']) ? trim($_POST['your-reservation-date']) : '';
            $your_reservation_timeslot = isset($_POST['your-reservation-timeslot']) ? trim($_POST['your-reservation-timeslot']) : '';
            if (empty($your_reservation_timeslot) || empty($your_reservation)) {
                $result->invalidate($tag, '予約日時を選択してください');
                $result->invalidate($tag, esc_html('<span class="js-errorFlag" data-message-id="js-dateSelectError"></span>'));
            }
        } // Check if furigana field contains only hiragana and katakana
        elseif (isset($tag->name) && 'your-furigana' == $tag->name) {
            $name = $tag->name;
            $value = isset($_POST[$name]) ? trim($_POST[$name]) : '';
            if (!preg_match('/^[ァ-ヶーぁ-んー・ー　ー ー]+$/u', $value)) {
                $result->invalidate($tag, 'ふりがなはひらがなで入力してください。');
            }
        }
    }

    return $result;
}
add_filter('wpcf7_validate', 'custom_cf7_field_validation_checks', 20, 2);


function custom_wpcf7_message($message, $status)
{
    if ($status == 'validation_failed') {
        return 'custom!';
    } elseif ($status == 'mail_sent') {
        return 'Thank you! Your message has been sent successfully.'; // Custom success message
    }

    return $message;
}

add_filter('wpcf7_display_message', 'custom_wpcf7_message', 10, 2);

//============================================================
//  Select Confirm Form for Page By URL Parameter
//============================================================

function select_confirm_form_by_url_parameter()
{
    // Get parameter from url
    $parameter = isset($_GET['type']) ? sanitize_text_field($_GET['type']) : false;

    // Return if false or empty
    if (!$parameter || empty($parameter)) {
        return false;
    }

    $shortcode_string = '';

    switch ($parameter) {
        case 'model-house':
            $shortcode_string = '[contact-form-7 id="c1fa522" title="モデルハウス確認"]';
            break;
        case 'event':
            $shortcode_string = '[contact-form-7 id="666e1b2" title="イベント確認フォーム"]';
            break;
        case 'store-visit':
            $shortcode_string = '[contact-form-7 id="83c6dce" title="店舗訪問フォーム"]';
            break;
        default:
            return false;
    }

    return $shortcode_string;
}

function search_form_split_sections($form)
{
    // Load DOM
    $dom = new DOMDocument();
    @$dom->loadHTML('<?xml encoding="UTF-8">' . $form);

    // Locate elements to split contents
    $xpath = new DOMXPath($dom);
    $elements = $xpath->query("//*[contains(@class, 'phpsplit')]");

    foreach ($elements as $element) {
        $textcontent = $element->nodeValue;
        $parts = explode(', ', $textcontent);

        $fragment = $dom->createDocumentFragment();

        // For specific split content, change the content
        foreach ($parts as $part) {
            switch ($part) {
                case 'その他':
                    $childNumberElement = $xpath->query("//*[@id='otherNumber']")->item(0);
                    if ($childNumberElement) {
                        $part_text = sprintf('%s : %s人', $part, $childNumberElement->getAttribute('data-multi-value'));
                    }
                case '子供':
                    $childNumberElement = $xpath->query("//*[@id='childNumber']")->item(0);
                    if ($childNumberElement) {
                        $part_text = sprintf('%s : %s人', $part, $childNumberElement->getAttribute('data-multi-value'));
                    }
                    break;
                default:
                    $part_text = $part;
            }
            // Trim the variable to remove white space
            $part_text = trim($part_text);
            // If not empty - Create span element and include the text
            if (!empty($part_text)) {
                $span = $dom->createElement('span', htmlspecialchars($part_text));
                // append span to the fragment from the DOM
                $fragment->appendChild($span);
                // replace element content with new content
                $element->nodeValue = '';
                $element->appendChild($fragment);
            }
        }
    }

    // Save edited HTML
    $form = $dom->saveHTML($dom->documentElement);

    return $form;
}
// add_filter('wpcf7_form_elements', 'search_form_split_sections');

//============================================================
//カスタム投稿タイプページング リライトルール
//============================================================
function my_disable_redirect_canonical($redirect_url)
{
    if (is_single()) {
        preg_match('/\/paged\//', $redirect_url, $matches);
        if ($matches) {
            $redirect_url = false;
            return $redirect_url;
        }
    }
}
add_rewrite_rule('news/([^/]+)/page/([0-9]{1,})/?$', 'index.php?post_type=news&term=$matches[1]]&paged=$matches[2]', 'top');
add_filter('redirect_canonical', 'my_disable_redirect_canonical');


//============================================================
// Custom combine data points in form.
//============================================================

function customise_wpcf7_after_submission($posted_data)
{
    if (isset($posted_data['your-occupant-group']) && isset($posted_data['your-number-children'])) {
        $key = array_search('子供', $posted_data['your-occupant-group'], true);

        if ($key !== false) {
            if (isset($posted_data['your-number-children'])) {
                $posted_data['your-occupant-group'][$key] = "子供: " . absint($posted_data['your-number-children']) . "人";
            }
        }

        $other_key = array_search('その他', $posted_data['your-occupant-group']);

        if ($other_key !== false) {
            if (isset($posted_data['your-number-other-people'])) {
                $posted_data['your-occupant-group'][$other_key] = "その他: " . absint($posted_data['your-occupant-group']) . "人";
            }
        }
    }

    return $posted_data;
}

// add_filter('wpcf7_posted_data', 'customise_wpcf7_after_submission');


// model_house を非表示にする
function hide_model_house_post_type_from_admin_menu()
{
    remove_menu_page('edit.php?post_type=model_house');
}
add_action('admin_menu', 'hide_model_house_post_type_from_admin_menu');

//============================================================
//  Handle email body creation
//============================================================

add_filter('wpcf7_form_hidden_fields', 'handle_include_post_id_on_form');

function handle_include_post_id_on_form($hidden)
{
    global $post;
    $hidden['the-post-title'] = get_the_title($post->ID);
    if (is_singular(['modelhouse', 'event'])) {
        $hidden['the-single-page'] = "yes";
    }
    return $hidden;
}

add_filter('wpcf7_mail_components', 'handle_reservation_email_body_creation', 10, 1);

function handle_reservation_email_body_creation($components)
{
    $submission = WPCF7_Submission::get_instance();
    if (!$submission) {
        return $components;
    }

    $contact_form = WPCF7_ContactForm::get_current();
    $form_id = $contact_form->id();
    $allowed_ids = [218, 220, 222];
    if (!in_array($form_id, $allowed_ids)) {
        return $components;
    }

    $data = $submission->get_posted_data();
    $mail_type = isset($data['form-reference']) ? $data['form-reference'] : "";


    if (empty($mail_type)) {
        return $components;
    }

    switch ($mail_type) {
        case "visitor":
            $response_type_string = "HP-来場予約";
            break;
        case "event":
            $response_type_string = "HP-イベント来場予約";
            break;
        case "modelhouse":
            $response_type_string = "HP-モデルハウス来場予約";
            break;
        default:
            break;
    }

    $recipient_type = (!empty($components['recipient']) && $components['recipient'] == $data['your-email']) ? "user" : "admin";

    $components['body'] = $recipient_type === "admin" ? "下記、お客様より来場WEB予約へのご予約がありました。\nお客様対応をお願いいたします。" : "お申込みいただき誠にありがとうございます。\nご予約確認のため、ひなた工務店担当アドバイザーよりご連絡させていただきます。";
    $components['body'] .= "\n\n────────────────────────────────\n今回のお問い合わせ内容\n────────────────────────────────\n\n";

    $components['body'] .= "====================" . "\n";
    $components['body'] .= "名簿取得日：" . date("Y/m/d") . "\n";
    $components['body'] .= "反響種別：" . $response_type_string . "\n";
    if (($mail_type == "event" || $mail_type == "modelhouse") && (isset($data['the-single-page']))) {
        $components['body'] .= "物件名：" . ($data['the-post-title'] ?? "") . "\n";
    }
    $components['body'] .= "来場場所：" . ($data['your-store'] ?? "") . "\n";
    $components['body'] .= "来場希望日時 第一希望：" . ($data['your-reservation-date'] ?? "") . " " . ($data['your-reservation-timeslot']) . "\n";
    $components['body'] .= "氏名：" . ($data['your-name'] ?? "") . "\n";
    $components['body'] .= "ふりがな：" . ($data['your-furigana'] ?? "") . "\n";
    $components['body'] .= "年齢：" . ($data['your-age'] ?? "") . "\n";
    $components['body'] .= "住所：" . ($data['your-address'] ?? "") . "\n";
    $components['body'] .= "電話番号：" . ($data['your-tel'] ?? "") . "\n";
    $components['body'] .= "メールアドレス：" . ($data['your-email'] ?? "") . "\n";

    $components['body'] .= "知ったきっかけ：";
    if (is_array($data['your-knowledge-source'])) {
        $components['body'] .= implode("　", $data['your-knowledge-source']);
    } else {
        $components['body'] .= $data['your-knowledge-source'];
    }
    $components['body'] .= "\n";

    $components['body'] .= "今後の行動予定/今後のスケジュール：" . (!empty($data['your-future-schedule']) ? implode("　", $data['your-future-schedule']) : "") . "\n";

    $components['body'] .= "検討開始時期：";
    if (is_array($data['your-first-consideration'])) {
        $components['body'] .= implode("　", $data['your-first-consideration']);
    } else {
        $components['body'] .= $data['your-first-consideration'];
    }
    $components['body'] .= "\n";

    $components['body'] .= "入居希望時期：" . ($data['your-movein-year'] ?? "") . "　" . ($data['your-movein-month'] ?? "") . "\n";

    $components['body'] .= "当社の来場経験：";
    if (!empty($data['your-prev-visit-text'])) {
        $components['body'] .= $data['your-prev-visit-text'];
    } else {
        $components['body'] .= implode("　", $data['your-prev-visit']);
    }
    $components['body'] .= "\n";

    $components['body'] .= "重視している項目：";
    if (is_array($data['your-visit-questions'])) {
        $components['body'] .= implode("　", $data['your-visit-questions']);
    } else {
        $components['body'] .= $data['your-visit-questions'];
    }
    $components['body'] .= "\n";

    $components['body'] .= "建築動機：";
    if (!empty($data['your-newhome-reason-text'])) {
        $components['body'] .= $data['your-newhome-reason-text'];
    } else if (is_array($data['your-newhome-reason'])) {
        $components['body'] .= implode("　", $data['your-newhome-reason']);
    } else {
        $components['body'] .= ($data['your-newhome-reason'] ?? "");
    }
    $components['body'] .= "\n";

    $components['body'] .= "予算総額：" . ($data['your-total-budget'] ?? "") . "万円" . "\n";
    $components['body'] .= "月額支払予算：" . ($data['your-monthly-budget'] ?? "") . "万円" . "\n";
    $components['body'] .= "自己資金：" . ($data['your-downpayment-budget'] ?? "") . "\n";

    $components['body'] .= "負債残高：";
    if (!empty($data['your-car-loan'])) {
        $components['body'] .= "車のローン" . $data['your-car-loan'] . "万円　";
    }
    if (!empty($data['your-education-loan'])) {
        $components['body'] .= "奨学金" . $data['your-education-loan'] . "万円　";
    }
    if (!empty($data['your-other-loan'])) {
        $components['body'] .= "その他ローン" . $data['your-other-loan'] . "万円";
    }
    $components['body'] .= "\n";

    $components['body'] .= "現居契約形態：";
    if (is_array($data['your-current-home-type'])) {
        $components['body'] .= implode("　", $data['your-current-home-type']);
    } else {
        $components['body'] .= $data['your-current-home-type'];
    }
    if (isset($data['your-current-home-rent']) && $data['your-current-home-rent'] != 0) {
        $components['body'] .= "　毎月の賃料" . $data['your-current-home-rent'] . " 万円";
    }
    if (isset($data['your-current-home-year'])) {
        $components['body'] .= "　居住年数" . $data['your-current-home-year'] . "年";
    }
    $components['body'] .= "\n";

    $components['body'] .= "前年度のご年収：" . ($data['your-house-income'] ?? "") . "\n";
    $components['body'] .= "勤続年数：" . (isset($data['your-years-worked']) ? $data['your-years-worked'] . "年" : "") . "\n";

    $components['body'] .= "その他年収がある方はいるか：";
    if (!empty('your-spouse-income')) {
        $components['body'] .= "配偶者" . $data['your-spouse-income'] . "万円　";
    }
    if (!empty('your-children-income')) {
        $components['body'] .= "子供" . $data['your-children-income'] . "万円　";
    }
    if (!empty('your-father-income')) {
        $components['body'] .= "父" . $data['your-father-income'] . "万円　";
    }
    if (!empty('your-mother-income')) {
        $components['body'] .= "母" . $data['your-mother-income'] . "万円";
    }
    $components['body'] .= "\n";

    $components['body'] .= "新しいお住まいのご希望：";
    if (is_array($data['your-expectation'])) {
        $components['body'] .= implode("　", $data['your-expectation']);
    } else {
        $components['body'] .= ($data['your-expectation'] ?? "");
    }
    $components['body'] .= "\n";

    $components['body'] .= "希望土地面積：" . (isset($data['your-land-size']) && $data['your-land-size'] != 0 ? $data['your-land-size'] . "坪" : "") . "\n";

    $components['body'] .= "問合せのきっかけ：" . (!empty($data['your-seen-ads']) ? implode("　", $data['your-seen-ads']) : "") . "\n";

    $components['body'] .= "ご質問やご希望：" . $data['your-message'] . "\n";

    $components['body'] .= "希望間取り：" . ($data['your-number-rooms'] ?? "--") . "室" . "　" . ($data['your-ldk-size'] ?? "--") . "帖" . "\n";

    $components['body'] .= "家族構成/入居予定人数：" . (!empty($data['your-occupant-group']) ? implode("　", $data['your-occupant-group']) : "");
    if (!empty($data['your-number-children']) && $data['your-number-children'] != 0) {
        $components['body'] .= "　子供" . $data['your-number-children'] . "人";
    }
    if (!empty($data['your-number-other-people']) && ($data['your-number-other-people'] != 0)) {
        $components['body'] .= "　その他" . $data['your-number-other-people'] . "人";
    }

	$components['body'] .= "\n";
	$components['body'] .= "営業担当者にご要望がありましたらお選びください。：";
	if (!empty($data['your-staff-request'])) {
		$components['body'] .= implode("　", $data['your-staff-request']);
	}
	if (!empty($data['your-staff-request-text'])) {
		$components['body'] .= " - " . $data['your-staff-request-text'];
	}

    $components['body'] .= "\n";
    $components['body'] .= "====================";
	$components['body'] .= "\n\n";

    $mail_2 = $contact_form->prop('mail_2');
    if (!empty($components['recipient']) && $components['recipient'] == $data['your-email']) {
        $components['body'] .= "弊社からのご連絡はお電話またはショートメッセージにてご連絡させていただきます。
メールでのご連絡をご希望のお客様はお問合せ下さい。また、ご予約状況によりご希望に添えない場合がございます。その場合は、ご来場日時の変更につきまして担当者よりご連絡させて頂きますので、ご了承ください。\n\n";
        $components['body'] .= "※毎週火曜・水曜日が定休日のため、月曜17:00以降から水曜日にご予約をいただいた場合、木曜日以降にご連絡をさせて頂きます。ご了承ください。\n万が一2営業日以内に担当アドバイザーより連絡がない場合は、大変お手数おかけいたしますが下記番号までお電話いただきますようお願い致します。\n\n";
        $components['body'] .= "ご質問やご不明な点がございましたら、下記お電話またメールよりお問い合わせ下さい。\n\n";
        $components['body'] .= "==============================\n\n";
        $components['body'] .= "ひなた工務店\n〒880-0902\n宮崎大橋店\n宮崎市大橋2丁目142-1\nTEL:0985-41-5233\nMAIL:info@hinata-koumuten.jp\n\n";
        $components['body'] .= "==============================\n\n";
    }
	
	$components['body'] .= "このメールはひなた工務店 (https://hinatakoumuten.jp/) の";
	if ($mail_type === 'visitor' ) : $components['body'] .= "来場WEB予約フォームから送信されました。"; endif;
    if ($mail_type === 'event') : $components['body'] .= "イベント予約フォームから送信されました。"; endif;
    if ($mail_type === 'modelhouse') : $components['body'] .= "モデルハウス予約フォームから送信されました。"; endif;

    return $components;
}

function enqueue_front_qna_styles()
{
    if (is_page('form-visitor') || is_post_type_archive('event') || is_singular(['event', 'modelhouse'])) {
        wp_enqueue_style('calendar', get_template_directory_uri() . '/assets/css/components/calendar.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_front_qna_styles');