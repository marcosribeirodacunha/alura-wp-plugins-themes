# Criando um plugin

Para criar um plugin devemos criar uma pasta com o nome do plugin dentro do diretório `wp-content/plugins` e dentro desta pasta devemos criar um arquivo PHP com o mesmo nome da pasta do plugin.

No arquivo criando dentro do plugin precisamos adicionar um comentário que possua minimamente o nome do plugin, ficando desta maneira:

```php
/**
 * Plugin Name: Patrocinadores Alura
 */
```

Devemos também validar se o acesso ao plugin está sendo feito pelo WordPress, afim de evitar acessos externos aos dados do nosso plugin. Para isso, podemos verificar se a variável criada pelo WordPress `ABSPATH` está definida, inserindo o seguinte no arquivo inicial do plugin:

```php
if (!defined('ABSPATH')) die;
```

Podemos também seguir as boas práticas para a criação de plugins como proposto pelo WordPress, incluindo a arquitetura de pastas. Mais detalhes podem ser encontrados nos links ao final deste arquivo.

Para mais detalhes sobre a criação de um plugin podemos acessar nos seguintes links:

- [Getting Started](https://developer.wordpress.org/plugins/plugin-basics/)
- [Header Requirements](https://developer.wordpress.org/plugins/plugin-basics/header-requirements/)
- [Best Practices](https://developer.wordpress.org/plugins/plugin-basics/best-practices/)
- [Action Hooks](https://codex.wordpress.org/Plugin_API/Action_Reference)

# Criando um shortcode

Primeiramente devemos criar uma função de callback que deve sempre ter um retorno (um HTML para renderizar). Após criarmos este callback registramos o shortcode com a função `add_shortcode`.

Uma vez que o shortcode está criado, devemos executar a tag do shortcode registrado entre colchetes.
