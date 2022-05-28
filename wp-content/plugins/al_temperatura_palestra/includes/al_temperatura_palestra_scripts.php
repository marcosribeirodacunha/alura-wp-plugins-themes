<?php

function al_temperatura_palestra_scripts() {
  wp_enqueue_style(
    'al_temperatura_palestra_styles',
    plugins_url() . '/al_temperatura_palestra/css/al_temperatura_palestra_styles.css',
  );
}

add_action('wp_enqueue_scripts', 'al_temperatura_palestra_scripts');
