<?php
// Enqueue theme styles and fonts
function kp_project_new_enqueue_styles()
{
  // Enqueue the main stylesheet
  wp_enqueue_style(
    'kp-project-new-style',
    get_stylesheet_uri(),
    [],
    filemtime(get_stylesheet_directory() . '/style.css')
  );

  wp_enqueue_style(
    'montserrat-font',
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap',
    [],
    null
  );
}
add_action('wp_enqueue_scripts', 'kp_project_new_enqueue_styles');
