# Tema WordPress WazzaAPI

Tema WordPress nativo, responsivo e instalável via ZIP para a WazzaAPI. Foi criado para uma landing institucional/comercial de SaaS de WhatsApp com IA, com blog nativo, menu WordPress e customização básica pelo painel.

## Requisitos

- WordPress 6.x ou superior
- PHP 8.2 ou superior
- Nenhum processo de build é necessário
- Não utiliza Next.js, Node.js ou dependências externas obrigatórias

## Estrutura principal

```text
.
├── style.css                 # Metadados obrigatórios do tema
├── functions.php             # Suportes do tema, menus, assets, SEO e schema
├── header.php                # Cabeçalho, logo, menu e CTAs
├── footer.php                # Rodapé e navegação complementar
├── front-page.php            # Landing page principal
├── index.php                 # Fallback e listagem padrão
├── archive.php               # Blog, categorias, tags e arquivos
├── single.php                # Post individual
├── page.php                  # Páginas institucionais
└── assets
    ├── css/theme.css         # Estilos visuais e responsividade
    ├── js/main.js            # Menu mobile e animações suaves
    └── images/               # Pasta reservada para imagens do tema
```

## Observação temporária sobre binários

Arquivos binários foram removidos temporariamente do repositório por compatibilidade. Por isso, `screenshot.png` não está incluído nesta revisão; ele pode ser recriado antes da distribuição final caso o ambiente aceite assets binários.

## Instalação via ZIP

1. Compacte o conteúdo do repositório em um arquivo `.zip`, mantendo `style.css` na raiz do pacote.
2. No painel do WordPress, acesse **Aparência > Temas > Adicionar novo > Enviar tema**.
3. Envie o `.zip`, clique em **Instalar agora** e depois em **Ativar**.
4. Opcionalmente, crie uma página chamada “Home”, selecione-a em **Configurações > Leitura** como página inicial estática e o WordPress utilizará `front-page.php`.
5. Crie uma página chamada “Blog” e selecione-a como página de posts para usar a listagem nativa.

## Personalização

- **Logo:** Aparência > Personalizar > Identidade do site.
- **Menus:** Aparência > Menus, usando as localizações “Principal” e “Rodapé”.
- **Imagem destacada:** disponível em posts, páginas e cards do blog.
- **Fundo e cabeçalho customizados:** disponíveis no Personalizador do WordPress.

## SEO e acessibilidade

- O tema usa `add_theme_support('title-tag')` para títulos gerenciados pelo WordPress.
- Gera uma meta description simples via `wp_head`.
- Inclui schema básico `Organization` em JSON-LD.
- Usa hierarquia de headings por template, links com foco visível, skip link e botões com área mínima adequada.
- Animações respeitam `prefers-reduced-motion`.

## Validação recomendada

Antes de distribuir o tema, rode:

```bash
php -l functions.php
php -l header.php
php -l footer.php
php -l front-page.php
php -l index.php
php -l page.php
php -l single.php
php -l archive.php
```

Depois de instalado em um WordPress real, valide com Lighthouse nas páginas Home, Blog e Post individual. O tema foi desenvolvido para ser leve e sem dependências externas, favorecendo pontuação alta em Performance, SEO e Best Practices.
