# Tema WordPress WazzaAPI

Tema WordPress nativo premium para a WazzaAPI, uma plataforma SaaS de atendimento, vendas, automações e integrações no WhatsApp com IA. O tema não depende de build, usa templates PHP nativos e foi organizado para instalação via ZIP em produção.

## Requisitos

- WordPress 6.5 ou superior.
- PHP 8.2 ou superior.
- Permissões padrão de tema WordPress em `wp-content/themes/`.
- Navegador moderno com suporte a CSS Grid e IntersectionObserver.
- Nenhum Node.js, bundler ou etapa de compilação.

## Instalação via ZIP

1. Gere o arquivo `wazzaapi-theme.zip` somente no momento do deploy, sem versionar o binário no Git.
2. O ZIP deve conter apenas a pasta do tema e, dentro dela, `style.css`, `functions.php` e os demais arquivos diretamente na raiz da pasta.
3. Com o ZIP pronto, acesse **Aparência > Temas > Adicionar novo > Enviar tema** no painel WordPress.
4. Selecione `wazzaapi-theme.zip`, clique em **Instalar agora** e aguarde a conclusão.

## Como ativar o tema

1. Após instalar o ZIP, clique em **Ativar** na tela de instalação.
2. Alternativamente, acesse **Aparência > Temas**, localize **WazzaAPI** e clique em **Ativar**.
3. Depois da ativação, acesse o site em uma janela anônima para confirmar que o front-end carrega sem erros.

## Como definir a página inicial

1. Crie uma página em **Páginas > Adicionar nova** para ser a landing page.
2. Publique a página.
3. Acesse **Configurações > Leitura**.
4. Em **Sua página inicial exibe**, selecione **Uma página estática**.
5. No campo **Página inicial**, selecione a página publicada.
6. Salve as alterações. O WordPress carregará `front-page.php` para a página inicial estática.

## Como definir a página do blog

1. Crie uma página chamada **Blog** em **Páginas > Adicionar nova**.
2. Publique a página sem escolher template especial.
3. Acesse **Configurações > Leitura**.
4. Em **Página de posts**, selecione a página **Blog**.
5. Salve as alterações. O WordPress carregará `home.php` para a listagem de posts.

## Como configurar menus

1. Acesse **Aparência > Menus**.
2. Crie um menu para a posição **Principal** com links para Recursos, Soluções, Pricing, Integrações, Blog, Documentação e Contato.
3. Marque a localização **Principal** e salve.
4. Crie, se desejar, um menu adicional para a posição **Rodapé** com links institucionais.
5. Se nenhum menu principal for definido, o tema exibe um fallback seguro com links internos baseados em `home_url()`.

## Como configurar logo

1. Acesse **Aparência > Personalizar > Identidade do site**.
2. Clique em **Selecionar logo** e envie a imagem da marca.
3. Ajuste o recorte, se solicitado, e publique as alterações.
4. O tema usa suporte nativo a `custom-logo`; se nenhum logo for configurado, uma marca textual WazzaAPI é exibida no header.

## Como usar os templates especiais

Os templates especiais aparecem no editor de páginas no painel lateral em **Modelo** ou **Template**, dependendo da versão do WordPress e do editor ativo.

1. Acesse **Páginas > Adicionar nova** ou edite uma página existente.
2. No painel lateral direito, abra a seção **Página**.
3. Localize o seletor **Modelo/Template**.
4. Escolha um dos templates disponíveis.
5. Publique ou atualize a página.
6. Revise o permalink para combinar com a navegação do tema, por exemplo `/docs/`, `/pricing/`, `/integracoes/`, `/recursos/` e `/solucoes/`.

Templates incluídos:

- **Documentação WazzaAPI** (`page-docs.php`): página de docs com índice lateral.
- **Pricing WazzaAPI** (`page-pricing.php`): planos e comparação.
- **Integrações WazzaAPI** (`page-integracoes.php`): cards de integrações.
- **Recursos WazzaAPI** (`page-recursos.php`): módulos e funcionalidades.
- **Soluções WazzaAPI** (`page-solucoes.php`): segmentos atendidos.

## Estrutura de arquivos

```text
style.css                 # Cabeçalho completo do tema WordPress
functions.php             # Bootstrap modular
inc/theme-setup.php       # Suportes do tema, incluindo title-tag e custom-logo
inc/enqueue.php           # CSS/JS carregados via wp_enqueue_* e get_template_directory_uri()
inc/menus.php             # Menus e fallback
inc/widgets.php           # Sidebars
inc/customizer.php        # Opções básicas com sanitize_text_field
inc/helpers.php           # Breadcrumb, cards e leitura
inc/seo.php               # Meta description, Open Graph e Twitter Cards
inc/schema.php            # Schema Organization
assets/css/theme.css      # Design system SaaS premium
assets/js/main.js         # Menu mobile, scroll reveal, contadores e microinterações
assets/images/            # Imagens do tema
assets/svg/               # SVGs do tema
assets/fonts/             # Fontes opcionais
assets/icons/             # Ícones opcionais
assets/videos/            # Vídeos opcionais
front-page.php            # Landing page quando página estática é definida como inicial
home.php                  # Listagem do blog
archive.php               # Arquivos com filtros visuais
single.php                # Post editorial
search.php                # Resultados de busca
404.php                   # Página de erro amigável
page-*.php                # Páginas especiais institucionais
```

## SEO e acessibilidade

- Suporte a `title-tag` nativo do WordPress.
- Meta descriptions para posts, páginas, blog e arquivos.
- Open Graph e Twitter Cards no `wp_head`.
- Schema `Organization` em JSON-LD.
- Breadcrumbs simples em páginas internas, posts, busca e arquivos.
- Links de pular conteúdo, `aria-labels`, estados `aria-expanded`, foco visível e menu mobile acessível por teclado.
- Microanimações respeitam `prefers-reduced-motion`.

## Checklist pós-instalação

- [ ] Ativar o tema **WazzaAPI**.
- [ ] Configurar **Logo** em **Aparência > Personalizar > Identidade do site**.
- [ ] Configurar **Menu Principal** e, opcionalmente, **Menu Rodapé**.
- [ ] Criar e definir a **Página inicial** em **Configurações > Leitura**.
- [ ] Criar e definir a **Página de posts/blog** em **Configurações > Leitura**.
- [ ] Criar páginas para Docs, Pricing, Integrações, Recursos e Soluções e selecionar seus templates especiais.
- [ ] Conferir URLs internas, principalmente Contato, Blog, Docs e páginas comerciais.
- [ ] Publicar pelo menos um post com imagem destacada para validar `home.php`, `archive.php`, `single.php` e `search.php`.
- [ ] Testar menu mobile, busca, breadcrumbs, página 404 e comentários.
- [ ] Validar SEO e acessibilidade em produção com Lighthouse ou ferramenta equivalente.

## Checklist de QA/deploy executado

- [x] Cabeçalho completo em `style.css`.
- [x] Assets carregados por `wp_enqueue_style()` e `wp_enqueue_script()`.
- [x] `theme.css` em `assets/css/theme.css` e `main.js` em `assets/js/main.js`.
- [x] URLs públicas do tema usando `get_template_directory_uri()` quando aplicável.
- [x] Links internos usando `home_url()` e `esc_url()`.
- [x] Escape/sanitização com `esc_html`, `esc_url`, `esc_attr`, `wp_kses_post` e `sanitize_text_field` onde aplicável.
- [x] Templates principais e especiais presentes.
- [x] ZIP de upload validado para geração no deploy; o binário `wazzaapi-theme.zip` não fica versionado temporariamente.
