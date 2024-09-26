function enqueue_custom_styles() {
wp_enqueue_style('home-style', get_stylesheet_directory_uri() . '/assets/scss/home.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');