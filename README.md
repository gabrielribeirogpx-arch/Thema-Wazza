# Tema WordPress WazzaAPI

Tema WordPress nativo premium para a WazzaAPI, uma plataforma SaaS de atendimento, vendas, automações e integrações no WhatsApp com IA. O tema não depende de build, usa templates PHP nativos e foi organizado para instalação via ZIP em produção.

## Requisitos

- WordPress 6.5 ou superior.
- PHP 8.2 ou superior.
- Permissões padrão de tema WordPress em `wp-content/themes/`.
- Navegador moderno com suporte a CSS Grid e IntersectionObserver.
- Nenhum Node.js, bundler ou etapa de compilação.

## Instalação via ZIP

1. Compacte o conteúdo da pasta do tema mantendo `style.css` na raiz do ZIP.
2. No WordPress, acesse **Aparência > Temas > Adicionar novo > Enviar tema**.
3. Envie o ZIP, instale e ative o tema.
4. Configure **Aparência > Menus** para as posições **Principal** e **Rodapé**.
5. Defina a página inicial em **Configurações > Leitura** se desejar usar `front-page.php`.
6. Crie páginas com slugs/templates para Recursos, Soluções, Pricing, Integrações e Docs.

## Estrutura de arquivos

```text
functions.php              # Bootstrap modular
inc/theme-setup.php        # Suportes do tema
inc/enqueue.php            # CSS/JS via get_template_directory_uri()
inc/menus.php              # Menus e fallback
inc/widgets.php            # Sidebars
inc/customizer.php         # Opções básicas
inc/helpers.php            # Breadcrumb, cards e leitura
inc/seo.php                # Meta description, Open Graph e Twitter Cards
inc/schema.php             # Schema Organization
assets/css/theme.css       # Design system SaaS premium
assets/js/main.js          # Menu, scroll reveal, contadores e microinterações
assets/images/             # Imagens do tema
assets/svg/                # SVGs do tema
assets/fonts/              # Fontes opcionais
assets/icons/              # Ícones opcionais
assets/videos/             # Vídeos opcionais
home.php                   # Listagem do blog
archive.php                # Arquivos com filtros visuais
single.php                 # Post editorial
search.php                 # Resultados de busca
sidebar.php                # Sidebar do blog
comments.php               # Comentários seguros
searchform.php             # Busca customizada
page-*.php                 # Páginas especiais institucionais
```

## Personalização

- Use **Aparência > Personalizar** para configurar logo, background, header e descrição SEO padrão.
- Substitua ou adicione imagens nas pastas de `assets/` conforme a finalidade do arquivo.
- Ajuste cores e espaçamentos no bloco `:root` de `assets/css/theme.css`.

## Menus

- **Principal**: navegação do header com fallback para Recursos, Soluções, Preços, Integrações, Blog, Documentação e Contato.
- **Rodapé**: links institucionais no footer.

## Blog

- `home.php` entrega grid premium de posts com busca e sidebar.
- `archive.php` exibe filtros visuais por categoria.
- `single.php` usa layout editorial com imagem destacada, tempo de leitura, autor, conteúdo e comentários.
- `search.php` mantém a experiência visual para resultados e estados vazios.

## Páginas especiais

- `page-recursos.php`: IA Generativa, RAG, Memórias, MCP, Flow Builder, Inbox, Campanhas, Dashboard, Tarefas, CRM/Pipeline e API Oficial WhatsApp.
- `page-solucoes.php`: Prefeitura, Câmara Municipal, Restaurante, Clínica, Loja, Imobiliária, Advocacia e E-commerce.
- `page-pricing.php`: cards de planos e comparação.
- `page-integracoes.php`: Meta, Gemini, OpenAI, Claude, MCP, APIs externas, Webhooks, CRM e ERP.
- `page-docs.php`: documentação com sidebar, índice e blocos de conteúdo.

## SEO

- Suporte a `title-tag` nativo do WordPress.
- Meta descriptions básicas para posts, páginas, blog e arquivos.
- Open Graph e Twitter Cards.
- Schema Organization em JSON-LD.
- Breadcrumbs simples em páginas internas, posts, busca e arquivos.
- Hierarquia de headings orientada a uma única headline principal por template.

## Performance

- Sem dependência de build ou frameworks pesados.
- CSS e JS versionados pela versão do tema.
- Imagens destacadas com lazy loading nos cards.
- Microanimações leves e respeitando `prefers-reduced-motion`.

## Compatibilidade

- WordPress 6.5+.
- PHP 8.2+.
- Instalável via ZIP.
- Sem caminhos absolutos em assets públicos.
- Código PHP modular com `require_once` e boas práticas WordPress.

## Checklist de deploy

- [ ] Rodar `php -l` em todos os arquivos PHP.
- [ ] Confirmar que o ZIP possui `style.css` na raiz.
- [ ] Configurar menus Principal e Rodapé.
- [ ] Configurar logo e descrição SEO padrão.
- [ ] Criar páginas especiais e atribuir templates.
- [ ] Testar home, blog, arquivo, busca, post, comentários e páginas especiais.
- [ ] Validar responsividade em desktop, notebook, tablet e celular.
- [ ] Validar Lighthouse, acessibilidade e SEO após instalar em WordPress real.
