<?php
$page_style = 'destinos.css';
require_once 'header.php';
?>

<form action="#" class="container-alura formulario-pesquisa-paises">
  <h2>Conheça nossos destinos</h2>

  <select name="paises" id="paises">
    <option value="">— Selecione —</option>
    <?php
      $countries = get_terms(array('taxonomy' => 'paises'));
      foreach ($countries as $country): ?>
        <option
          value="<?= $country->name; ?>"
          <?= !empty($_GET['paises']) && $_GET['paises'] === $country->name ? "selected" : ''; ?>
        >
          <?= $country->name; ?>
        </option>
      <?php endforeach; ?>
  </select>

  <input type="submit" value="Pesquisar">
</form>

<?php
if (!empty($_GET['paises'])) {
  $selected_country = array(array(
    'taxonomy' => 'paises',
    'field' => 'name',
    'terms' => $_GET['paises'],
  ));
}

$args = array(
  'post_type' => 'destinos',
  'tax_query' => !empty($_GET['paises']) ? $selected_country : '',
);
$query = new WP_Query($args);

if ($query->have_posts()): ?>
  <main class="page-destinos">
    <ul class="lista-destinos container-alura">

      <?php while ($query->have_posts()): $query->the_post(); ?>
        <li class="col-md-3 destinos">
          <?php
              the_post_thumbnail();
              the_title('<p class="titulo-destino">', '</p>');
              the_content();
            ?>
        </li>
      <?php endwhile; ?>

    </ul>
  </main>

<?php
endif;

require_once 'footer.php';
