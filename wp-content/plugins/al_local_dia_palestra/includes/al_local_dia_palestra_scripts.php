<?php

function al_local_dia_palestra_adiciona_scripts() {
  // Javascript
  wp_enqueue_script(
    'jquery_countdown_lib',
    plugins_url() . '/al_local_dia_palestra/js/jquery.countdown.min.js',
    array('jquery'),
    null,
    true
  );

  wp_enqueue_script(
    'al_local_dia_palestra_contagem_regressiva',
    plugins_url() . '/al_local_dia_palestra/js/al_local_dia_palestra_contagem_regressiva.js',
    array('jquery_countdown_lib'),
    null,
    true,
  );

  // CSS
  wp_enqueue_style(
    'al_local_dia_palestra_estilos',
    plugins_url() . '/al_local_dia_palestra/css/al_local_dia_palestra_styles.css',
  );

  // Data cadastrada no menu de configurações
  $data = get_option('al_local_dia_palestra_data');
  wp_localize_script('al_local_dia_palestra_contagem_regressiva', 'data', array($data));
}

add_action('wp_enqueue_scripts', 'al_local_dia_palestra_adiciona_scripts');
