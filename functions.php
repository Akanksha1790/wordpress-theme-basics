<?php
// Enqueue stylesheet
function akansha_theme_styles() {
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'akansha_theme_styles');
