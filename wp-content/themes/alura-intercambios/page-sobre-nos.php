<?php
$page_style = 'sobre_nos.css';
require_once 'header.php';

// Posts são todos os conteúdos (pages/posts) no WordPress
if (have_posts()): ?>
  <main class="main-sobre-nos">
    <!--
      `the_posts` é uma referencia ao conteúdo atual, um ponteiro.
      Esta é uma função muito importante dentro do WordPress, sendo conhecida
      como o "loop do WordPress"
    -->
    <?php while (have_posts()): the_post();
      the_post_thumbnail('post-thumbnail', array('class' => 'imagem-sobre-nos'));
      echo '<div class="conteudo container-alura">';
      the_title('<h2>', '</h2>');
      the_content();
      echo '</div>';
    endwhile; ?>
  </main>
<?php
endif;

require_once 'footer.php';
