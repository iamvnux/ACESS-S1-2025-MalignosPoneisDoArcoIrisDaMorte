# Levantamento Inicial - Página Home
## Descrição do Projeto Anterior
O portal **Fatecon** foi desenvolvido como um site voltado ao universo geek, com foco em quadrinhos, eventos, notícias e cultura pop. Na versão anterior, a página Home apresentava layout baseado em Bootstrap, com seções visuais de destaque, colunas de conteúdo e links para navegação. No entanto, não havia preocupação com acessibilidade (WCAG/WAI-ARIA), e o conteúdo era totalmente estático, sem uso de banco de dados.
---
## Objetivo da Reconstrução
1. Tornar TODO o código acessível, adotando as estratégias mais modernas;
2. Garantir navegação completa com leitores de tela (NVDA), sem uso do monitor;
3. Migrar todo o conteúdo para carregamento dinâmico via banco de dados (MySQL + PHP).
---
## Estrutura da Página Home
### 1. Introdução (`<header>`)
- **1.1 Logo/Nome do Site**  
 `<h1>Fatecon</h1>`  
 Título principal com nome do portal geek.
- **1.2 Navegação Principal (`<nav>`)**
 - **1.2.1 Home** — `<a href="index.html">`
 - **1.2.2 Notícias** — `<a href="noticias.html">`
 - **1.2.3 Programação** — `<a href="programacao.html">`
 - **1.2.4 Ingressos** — `<a href="ingressos.html">`
 - **1.2.5 Business** — `<a href="business.html">`
 - **1.2.6 Mais (dropdown)**  
   - Localização  
   - Normas  
   - FAQ  
   - Quem somos
---
### 2. Destaque Principal (`<main><section>`)
- **2.1 Destaque**  
 `<h2>Destaque da Página</h2>`
- **2.2 Conteúdo Principal (`<article>`)**
 - **2.2.1 Cabeçalho do Bloco**
   - Título da sessão: `<h3>Lorem Ipsum</h3>`
 - **2.2.2 Texto Resumo:** `<p>Conteúdo introdutório com descrição.</p>`
---
### 3. Blocos Informativos em Três Colunas (`<section>`)
- **3.1 Bloco 1 (`<article>`)**
 - Título: `<h2>Lorem Ipsum</h2>`
 - Texto: `<p>Conteúdo explicativo.</p>`
- **3.2 Bloco 2 (`<article>`)**
 - Título: `<h2>Lorem Ipsum</h2>`
 - Texto: `<p>Conteúdo explicativo.</p>`
- **3.3 Bloco 3 (`<article>`)**
 - Título: `<h2>Lorem Ipsum</h2>`
 - Texto: `<p>Conteúdo explicativo.</p>`
---
### 4. Seção com Imagem Lateral (`<section>`)
- **4.1 Texto e Imagem**
 - Título: `<h2>Lorem Ipsum</h2>`
 - Texto: `<p>Descrição de conteúdo ao lado de imagem ilustrativa.</p>`
 - Imagem: `<img src="imagem.jpg" alt="Descrição da imagem">`
---
### 5. Rodapé (`<footer>`)
- **5.1 Informações de copyright**
 - `<p>&copy; Lorem Ipsum</p>`
- **5.2 Redes Sociais (`<nav>`)**
 - **5.2.1 Lista de Redes (ícones com link)**
   - Instagram
   - Twitter
   - Facebook
   - Outros
---
## HTML5 Semântico Aplicado
- `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`
- Uso de `<h1>` até `<h3>` para hierarquia de títulos
- Imagens com `<img>` e `alt`
- Links com `<a>` e navegação clara por listas
---
## Acessibilidade Alvo
- Compatibilidade total com NVDA
- Leitura por regiões (landmarks)
- Conteúdo dinâmico futuro com banco de dados MySQL + PHP

# Reconstrução com Acessibilidade - Página Home
## Elementos Reconstruídos
### 1. Cabeçalho (`<header>`)
- Elemento `<nav>` com `role="navigation"` e `aria-label="Menu principal"`
- Logo do site com `alt="Logotipo da Fatecon"`
- Menu hamburguer com `aria-expanded`, `aria-controls` e `aria-label="Abrir menu de navegação"`
### 2. Menu de Navegação
```html
<nav role="navigation" aria-label="Menu principal">
<ul class="navbar-nav">
<li><a class="nav-link" href="index.html" aria-current="page">Home</a></li>
<li><a class="nav-link" href="noticias.html">Notícias</a></li>
<li><a class="nav-link" href="programacao.html">Programação</a></li>
<li><a class="nav-link" href="ingressos.html">Ingressos</a></li>
<li><a class="nav-link" href="business.html">Business</a></li>
<li>
<a class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Mais</a>
<ul class="dropdown-menu" aria-label="Submenu">
<li><a class="dropdown-item" href="localizacao.html">Localização</a></li>
<li><a class="dropdown-item" href="normas.html">Normas</a></li>
<li><a class="dropdown-item" href="faq.html">FAQ</a></li>
<li><a class="dropdown-item" href="quemsomos.html">Quem somos</a></li>
</ul>
</li>
</ul>
</nav>