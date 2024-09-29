<!-- functions.php -->
<?php
function enqueue_custom_styles()
{
    $uri = get_template_directory_uri();

    // jQuery を読み込み（WordPress のデフォルト jQuery）
    wp_enqueue_script('jquery');

    // JavaScript（bundle.js）を読み込み、jQuery に依存し、フッターに出力
    wp_enqueue_script(
        'bundle_js',
        $uri . '/assets/js/bundle.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/bundle.js'), // キャッシュバスターを追加
        true // フッターに出力
    );

    // CSS（home.css）を読み込み
    wp_enqueue_style(
        'home-style',
        $uri . '/assets/scss/home.css',
        array(), // 依存関係なし
        filemtime(get_template_directory() . '/assets/scss/home.css') // キャッシュバスターを追加
    );

    // page-products01.php ページの場合に products.css を読み込む
    if (is_page_template('page-products01.php')) {
        wp_enqueue_style(
            'products-style',
            $uri . '/assets/scss/products.css',
            array(), // 依存関係なし
            filemtime(get_template_directory() . '/assets/scss/products.css') // キャッシュバスターを追加
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
?>