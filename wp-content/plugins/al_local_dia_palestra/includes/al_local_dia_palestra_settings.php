<?php

function al_local_dia_palestra_menu_pagina() { ?>
  <div>
    <h1><?= __('Local Palestra', 'al_local_dia_palestra') ?></h1>
    <form action="options.php" method="post">
      <?php
        settings_errors();
        do_settings_sections('local-palestra');
        settings_fields('al_local_dia_palestra_settings');
        submit_button()
      ?>
    </form>
  </div>
<?php
}

function al_local_dia_palestra_menu() {
  add_menu_page(
    __('Local Palestra', 'al_local_dia_palestra'),
    __('Local Palestra', 'al_local_dia_palestra'),
    'manage_options', // Quais permissões o usuário precisa possuir para poder ter acesso a página
    'local-palestra',
    'al_local_dia_palestra_menu_pagina', // Função que renderiza a página
    'dashicons-location-alt',
    -1, // Posição a ser apresentado no menu
  );
}

// Função de callback da seção
function al_local_dia_palestra_campos_secao_detalhes() { ?>
  <p><?= __('Insira os dados do endereço, cidade e data da próxima palestra da Alura', 'al_local_dia_palestra') ?></p>
<?php
}

// Função de callback do endereço
function al_local_dia_palestra_endereco() { ?>
  <input type="text" required
         name="al_local_dia_palestra_endereco"
         id="al_local_dia_palestra_endereco"
         value="<?= esc_attr(get_option('al_local_dia_palestra_endereco')) ?>">
         <!-- esc_attr remove qualquer elemento HTML do texto para garantir a segurança -->
<?php
}

// Função de callback da cidade
function al_local_dia_palestra_cidade() { ?>
  <input type="text" required
         name="al_local_dia_palestra_cidade"
         id="al_local_dia_palestra_cidade"
         value="<?= esc_attr(get_option('al_local_dia_palestra_cidade')) ?>">
<?php
}

// Função de callback da data
function al_local_dia_palestra_data() { ?>
  <input type="date" required
         name="al_local_dia_palestra_data"
         id="al_local_dia_palestra_data"
         value="<?= esc_attr(get_option('al_local_dia_palestra_data')) ?>">
<?php
}

function al_local_dia_palestra_secao() {
  // Seção
  add_settings_section(
    'al_local_dia_palestra_secao',
    __('Configurações do local da palestra', 'al_local_dia_palestra'),
    'al_local_dia_palestra_campos_secao_detalhes',
    'local-palestra'
  );

  // Endereço
  add_settings_field(
    'al_local_dia_palestra_endereco',
    __('Endereço', 'al_local_dia_palestra'),
    'al_local_dia_palestra_endereco',
    'local-palestra',
    'al_local_dia_palestra_secao'
  );

  register_setting(
    'al_local_dia_palestra_settings',
    'al_local_dia_palestra_endereco',
    'verifica_endereco'
  );

  // Cidade
  add_settings_field(
    'al_local_dia_palestra_cidade',
    __('Cidade', 'al_local_dia_palestra'),
    'al_local_dia_palestra_cidade',
    'local-palestra',
    'al_local_dia_palestra_secao'
  );

  register_setting(
    'al_local_dia_palestra_settings',
    'al_local_dia_palestra_cidade',
    'verifica_cidade'
  );

  // Data
  add_settings_field(
    'al_local_dia_palestra_data',
    __('Data', 'al_local_dia_palestra'),
    'al_local_dia_palestra_data',
    'local-palestra',
    'al_local_dia_palestra_secao'
  );

  register_setting(
    'al_local_dia_palestra_settings',
    'al_local_dia_palestra_data',
    'verifica_data',
  );
}

add_action('admin_menu', 'al_local_dia_palestra_menu');
add_action('admin_menu', 'al_local_dia_palestra_secao');

/* Configuração de callback de verificação dos campos */

// Endereço
function verifica_endereco($endereco) {
  if (empty($endereco)) {
    $endereco = get_option('al_local_dia_palestra_endereco');
    add_settings_error(
      'al_local_dia_palestra_msg_erro',
      'al_local_dia_palestra_erro_endereco',
      __('O campo endereço não pode ser vazio!', 'al_local_dia_palestra'),
      'error' // Já é o tipo padrão
    );
  }

  return $endereco;
}

// Cidade
function verifica_cidade($cidade) {
  if (empty($cidade)) {
    $cidade = get_option('al_local_dia_palestra_cidade');
    add_settings_error(
      'al_local_dia_palestra_msg_erro',
      'al_local_dia_palestra_erro_cidade',
      __('O campo cidade não pode ser vazio!', 'al_local_dia_palestra'),
      'error' // Já é o tipo padrão
    );
  }

  return $cidade;
}

// Data
function verifica_data($data) {
  if (empty($data)) {
    $data = get_option('al_local_dia_palestra_data');
    add_settings_error(
      'al_local_dia_palestra_msg_erro',
      'al_local_dia_palestra_erro_data',
      __('O campo data não pode ser vazio!', 'al_local_dia_palestra'),
      'error' // Já é o tipo padrão
    );
  }

  return $data;
}
