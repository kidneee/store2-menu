<?php
function create_product_post_type()
{
    register_post_type('product', array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
    ));
}
add_action('init', 'create_product_post_type');


// Contact Form 7 のフォーム出力をカスタマイズ
add_filter('wpcf7_form_elements', 'customize_cf7_form_html');

function customize_cf7_form_html($html)
{
    // <p> タグを削除
    $html = str_replace('<p>', '', $html);
    $html = str_replace('</p>', '', $html);

    // ラジオボタングループ（use_label_element）をカスタマイズ
    // 最初のラジオボタンを検出して、3つ全て置き換え
    $html = preg_replace_callback(
        '/(<span class="wpcf7-form-control-wrap" data-name="use_label_element">[\s\S]*?<\/span>)\s*<br>\s*(<span class="wpcf7-form-control-wrap" data-name="use_label_element">[\s\S]*?<\/span>)\s*<br>\s*(<span class="wpcf7-form-control-wrap" data-name="use_label_element">[\s\S]*?<\/span>)/i',
        function ($matches) {
            $radio_html = $matches[1] . $matches[2] . $matches[3];
            return '<div class="p-contact__form-item">' .
                '<dt class="p-contact__form-item-label"><label>お問い合わせの種類</label></dt>' .
                '<dd class="p-contact__form-item-value-group">' . $radio_html . '</dd>' .
                '</div>';
        },
        $html,
        1
    );

    // your-name をカスタマイズ
    $html = preg_replace_callback(
        '/(<span class="wpcf7-form-control-wrap" data-name="your-name">.*?<\/span>)/s',
        function ($matches) {
            return '<div class="p-contact__form-item">' .
                '<dt class="p-contact__form-item-label"><label>お名前</label></dt>' .
                '<dd class="p-contact__form-item-value">' . $matches[1] . '</dd>' .
                '</div>';
        },
        $html
    );

    // your-email をカスタマイズ
    $html = preg_replace_callback(
        '/(<span class="wpcf7-form-control-wrap" data-name="your-email">.*?<\/span>)/s',
        function ($matches) {
            return '<div class="p-contact__form-item">' .
                '<dt class="p-contact__form-item-label"><label>メールアドレス</label></dt>' .
                '<dd class="p-contact__form-item-value">' . $matches[1] . '</dd>' .
                '</div>';
        },
        $html
    );

    // your-message をカスタマイズ
    $html = preg_replace_callback(
        '/(<span class="wpcf7-form-control-wrap" data-name="your-message">.*?<\/span>)/s',
        function ($matches) {
            return '<div class="p-contact__form-item">' .
                '<dt class="p-contact__form-item-label"><label>お問い合わせ内容</label></dt>' .
                '<dd class="p-contact__form-item-value">' . $matches[1] . '</dd>' .
                '</div>';
        },
        $html
    );

    // submit ボタンをカスタマイズ
    $html = preg_replace_callback(
        '/(<input[^>]*type="submit"[^>]*>)/s',
        function ($matches) {
            return '<div class="p-contact__form-submit-button">' . $matches[1] . '</div>';
        },
        $html
    );

    // <br> タグをクリーンアップ（余分な<br>を削除）
    $html = str_replace('<br>' . "\n", '', $html);
    $html = str_replace('<br>', '', $html);

    // フォーム全体をdlでラップ
    $html = '<dl class="p-contact__form-list">' . $html . '</dl>';

    return $html;
}
