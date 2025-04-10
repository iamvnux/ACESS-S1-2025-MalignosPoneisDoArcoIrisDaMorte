# Levantamento Inicial - Página Quem Somos
## Descrição do Projeto Anterior
A página **Quem Somos** do portal Fatecon apresenta informações institucionais sobre os idealizadores do evento e seus objetivos. O conteúdo é organizado em blocos compostos por texto e imagem, com uso do Bootstrap para responsividade. A estrutura ainda é estática e não contempla acessibilidade para leitores de tela.
---
## Objetivo da Reconstrução
1. Tornar TODO o código acessível, adotando as estratégias mais modernas;
2. Garantir navegação completa com leitores de tela (NVDA), sem uso do monitor;
3. Migrar todo o conteúdo para carregamento dinâmico via banco de dados (MySQL + PHP).
---
## Estrutura da Página Quem Somos
### 1. Introdução (`<header>`)
- **1.1 Logo/Nome do Site**  
 `<h1>Fatecon</h1>` — Logotipo exibido por imagem.
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
### 2. Conteúdo Institucional (`<main><article>`)
#### 2.1 Primeira Seção (Texto à esquerda, imagem à direita)
- Título: `<h2>Lorem</h2>`
- Texto: `<p>` — Parágrafo explicando a missão e origem do projeto.
- Imagem complementar: `<img src="..." alt="Imagem institucional">`
#### 2.2 Segunda Seção (Imagem à esquerda, texto à direita)
- Imagem: `<img src="..." alt="Imagem institucional">`
- Título: `<h2>Lorem</h2>`
- Texto: `<p>` — Informações sobre valores ou equipe.
#### 2.3 Terceira Seção (Texto à esquerda, imagem à direita)
- Mesmo padrão da primeira seção, com novo conteúdo explicativo.
---
### 3. Rodapé (`<footer>`)
- **3.1 Informações Institucionais**
 - `<p>&copy; Lorem Ipsum</p>`
- **3.2 Redes Sociais (`<nav>`)**
 - Ícones com links representando:
   - Instagram
   - Twitter
   - Facebook
   - Outros
---
## HTML5 Semântico Aplicado
- Uso de `<header>`, `<nav>`, `<main>`, `<article>`, `<section>`, `<footer>`, `<h2>`, `<p>`, `<figure>`, `<img>`
- Estrutura de layout com `row` e `col` do Bootstrap
- Alternância entre imagem e texto para equilíbrio visual
---
## Acessibilidade Alvo
- Imagens com `alt` descritivo para leitores de tela
- Títulos e parágrafos com hierarquia bem definida
- Possibilidade de navegação por seções com landmarks (`<main>`, `<article>`, `<footer>`)
- Preparação para exibição de conteúdo via banco de dados PHP + MySQL