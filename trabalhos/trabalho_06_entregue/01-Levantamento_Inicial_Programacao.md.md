# Levantamento Inicial - Página Programação
## Descrição do Projeto Anterior
A página **Programação** do portal Fatecon apresenta os conteúdos principais da agenda do evento, com foco em atividades, atrações e cronograma. O layout é construído com cards, imagens, textos explicativos e botões de interação. A estrutura estática não contempla acessibilidade para navegação com tecnologias assistivas.
---
## Objetivo da Reconstrução
1. Tornar TODO o código acessível, adotando as estratégias mais modernas;
2. Garantir navegação completa com leitores de tela (NVDA), sem uso do monitor;
3. Migrar todo o conteúdo para carregamento dinâmico via banco de dados (MySQL + PHP).
---
## Estrutura da Página Programação
### 1. Introdução (`<header>`)
- **1.1 Logo/Nome do Site**  
 `<h1>Fatecon</h1>` — Logotipo em imagem.
- **1.2 Navegação Principal (`<nav>`)**
 - **1.2.1 Home** — `<a href="index.html">`
 - **1.2.2 Notícias** — `<a href="noticias.html">`
 - **1.2.3 Programação** — `<a href="programacao.html" aria-current="page">`
 - **1.2.4 Ingressos** — `<a href="ingressos.html">`
 - **1.2.5 Business** — `<a href="business.html">`
 - **1.2.6 Mais (dropdown)**  
   - Localização  
   - Normas  
   - FAQ  
   - Quem somos
---
### 2. Conteúdo Principal (`<article>`)
#### 2.1 Primeira Linha da Programação (`<section>`)
- Layout com imagem (col-8) e conteúdo (col-3)
 - Imagem destaque: `<img src="..." alt="Imagem do evento">`
 - Título: `<h1 class="card-title">Lorem ipsum</h1>`
 - Texto explicativo: `<p class="card-text">Descrição da atividade</p>`
 - Botão de ação: `<a href="#" class="btn btn-secondary">Lorem ipsum</a>`
 - Ícones: `<img src="..." alt="ícone">` (três instâncias)
#### 2.2 Segunda Linha da Programação
- Título e descrição extensa de uma programação específica.
 - Título: `<h1 class="card-title">Lorem ipsum</h1>`
 - Texto: `<p>` — parágrafo com detalhes sobre a atividade.
 - Imagem relacionada: `<img src="..." alt="Imagem da atividade">`
#### 2.3 Terceira Linha da Programação
- Imagem primeiro, seguida de texto
 - Imagem grande: `<img src="..." alt="Imagem ilustrativa">`
 - Título: `<h1 class="card-title">Lorem ipsum</h1>`
 - Texto: `<p>` — explicações adicionais sobre o evento.
---
### 3. Rodapé (`<footer>`)
- **3.1 Texto Institucional**
 - `<p>&copy; Lorem Ipsum</p>`
- **3.2 Redes Sociais (`<nav>`)**
 - Ícones com link:
   - Instagram
   - Twitter
   - Facebook
   - Outros
---
## HTML5 Semântico Aplicado
- Uso de `<header>`, `<nav>`, `<article>`, `<section>`, `<footer>`, `<h1>`, `<p>`, `<a>`, `<img>`
- Cards e blocos bem definidos com Bootstrap
- Uso de colunas e grid para posicionamento responsivo
- Ícones como elementos visuais decorativos (devem ter função ou descrição para acessibilidade)
---
## Acessibilidade Alvo
- Navegação por regiões usando landmarks (`<article>`, `<section>`, `<footer>`)
- Imagens com `alt` descritivo
- Botões com texto claro e identificável por leitores de tela
- Possibilidade futura de carregar toda a programação a partir de banco de dados (PHP + MySQL)