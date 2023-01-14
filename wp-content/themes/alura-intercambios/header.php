<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/normalize.css' ?>">
  <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>">
  <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/header.css' ?>">
  <link rel="stylesheet" href="<?= get_template_directory_uri() . "/css/$page_style" ?>">
  <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/footer.css' ?>">
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="container-alura">
      <!-- Render the custom logo inserted in the dashboard -->
      <?php the_custom_logo() ?>

      <nav>
        <!-- Show the registered nav menu -->
        <?php wp_nav_menu(array(
          'menu' => 'menu-navegacao',
          'menu_id' => 'menu-principal'
        )) ?>
      </nav>
    </div>
  </header>
