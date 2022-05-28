<?php

class TemperaturaPalestra extends WP_Widget {
  public function __construct()
  {
    parent::__construct(
      'al_temperatura_palestra_widget',
      'Temperatura Palestra',
      array('description' => 'Mostrar a temperatura no local da palestra'),
    );
  }

  public function widget($args, $instance)
  {
    $cidade = get_option('al_local_dia_palestra_cidade');
    $cidade_encoded = urlencode($cidade);
    $appid = OPENWEATHER_API_KEY;
    $api_url = "https://api.openweathermap.org/data/2.5/weather?q=$cidade_encoded,br&appid=$appid";
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $api_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $resultado = curl_exec($curl);
    $resultado_decoded = json_decode($resultado, true);
    $temperatura = round($resultado_decoded['main']['temp'] - 273.15);
    ?>

    <section class="container-temperatura">
      <p class="cidade-temperatura"><?= $cidade; ?></p>
      <p class="temperatura"><?= $temperatura; ?> ºC</p>
    </section>

    <?php
  }
}

function al_temperatura_palestra_registra_widget() {
  register_widget('TemperaturaPalestra');
}

add_action('widgets_init', 'al_temperatura_palestra_registra_widget');
