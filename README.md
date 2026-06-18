# Tema WordPress WazzaAPI

Tema WordPress nativo, responsivo e instalável via ZIP para o site oficial da WazzaAPI — uma plataforma SaaS de automação de atendimento e vendas no WhatsApp com Inteligência Artificial.

## Requisitos

- WordPress 6.x ou superior
- PHP 8.2 ou superior
- Nenhum processo de build
- Sem Next.js, sem React obrigatório e sem dependências pesadas

## Estrutura

```text
style.css
functions.php
index.php
front-page.php
page.php
single.php
archive.php
header.php
footer.php
search.php
404.php
inc/
assets/css/theme.css
assets/js/main.js
assets/images/
assets/svg/wazza-mark.svg
template-parts/
templates/page-docs.php
README.md
screenshot.png # não incluído temporariamente por compatibilidade com binários
```

## Recursos implementados

- Landing page premium com hero, mockup SaaS, logos, funcionalidades, timeline, IA, Flow Builder, Inbox, MCP, Base de Conhecimento, Relatórios e Preços.
- Blog nativo WordPress com cards, imagem destacada, categoria, autor, tempo de leitura, busca e paginação.
- Template de Documentação com sidebar, índice e blocos de código.
- SEO básico com `title-tag`, meta description, Open Graph, Twitter Cards e Schema Organization.
- Acessibilidade com skip link, foco visível, ARIA labels, alto contraste e navegação mobile por teclado.
- Microanimações: fade/slide reveal, hover scale, glow, parallax leve, SVG animado, botões animados e contadores.
- Observação: arquivos binários, como `screenshot.png`, foram removidos temporariamente por compatibilidade do ambiente.
- Suportes WordPress: custom logo, menus, post thumbnails, HTML5, widgets, custom background e custom header.

## Instalação via ZIP

1. Compacte o conteúdo deste diretório mantendo `style.css` na raiz do ZIP.
2. No WordPress, acesse **Aparência > Temas > Adicionar novo > Enviar tema**.
3. Envie o ZIP, instale e ative.
4. Configure **Aparência > Menus** para a localização “Principal”.
5. Opcionalmente crie uma página “Documentação” usando o template **Documentação WazzaAPI**.

## Validação recomendada

```bash
php -l functions.php
php -l header.php
php -l footer.php
php -l front-page.php
php -l index.php
php -l page.php
php -l single.php
php -l archive.php
php -l search.php
php -l 404.php
php -l templates/page-docs.php
```

Depois de instalado em um WordPress real, valide Home, Blog, Docs e Post com Lighthouse.
