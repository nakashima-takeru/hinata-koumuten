<?php
/**
 * LP 鹿児島店：共通セクションタイトル
 *
 * 使い方:
 *   get_template_part('includes/part-lp-section-title', null, [
 *       'title' => 'ひなた工務店とは？', // 必須（<br> 等の簡単なHTML可）
 *       'tag'   => 'h2',                // 任意：h2〜h4（初期値 h2）
 *       'class' => '',                  // 任意：追加クラス
 *   ]);
 *
 * 配置は親要素に従う（ブロック配置なら中央、flex の align-items: flex-start なら左寄せ）。
 */
$title = $args['title'] ?? '';
$tag   = in_array($args['tag'] ?? 'h2', ['h2', 'h3', 'h4'], true) ? ($args['tag'] ?? 'h2') : 'h2';
$class = trim('lpSectionTitle ' . ($args['class'] ?? ''));

if ($title === '') {
    return;
}
?>
<div class="<?php echo esc_attr($class); ?>">
    <<?php echo $tag; ?> class="lpSectionTitle__text"><?php echo wp_kses($title, ['br' => [], 'span' => ['class' => []]]); ?></<?php echo $tag; ?>>
</div>
