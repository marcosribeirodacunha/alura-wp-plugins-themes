# Criando temas customizados no WordPress

Para criar um tema, precisamos criar uma pasta com o nome do tema dentro da pasta `wp-content/themes`. Podemos então adicionar alguns arquivos básicos para o funcionamento do tema:
- `index.php` -> arquivo mais genérico do WP para apresentar o conteúdo
- `style.css` -> arquivo genérico de estilo que pode conter metadados em um comentário para registrar informações do tema
- `screenshot.{format}` -> imagem de capa do tema
- `functions.php` -> arquivo usado para registrar funcionalidades do tema, como habilitar menus

Podemos também criar arquivos mais específicos referentes as páginas para apresentar conteúdo.
Para sabermos o arquivo que devemos criar, podemos nos basear na hierarquia do WP, como apresentado nesta imagem: [Hierarquia de templates](./template-hierarchy.png)

## Taxonomias

Quando precisamos agrupar conteúdos, precisamos informar para o WP que iremos trabalhar com taxonomias.
