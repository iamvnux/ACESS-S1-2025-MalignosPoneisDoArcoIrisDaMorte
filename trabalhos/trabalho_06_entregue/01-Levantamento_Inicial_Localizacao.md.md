# Levantamento Inicial - Página Localização
## Descrição do Projeto Anterior
A página **Localização** do portal Fatecon apresenta informações textuais sobre o local do evento. O layout utiliza uma imagem em destaque e três colunas com parágrafos informativos. Toda a estrutura é estática, com HTML básico e sem aplicação de recursos de acessibilidade (WCAG/WAI-ARIA).
---
## Objetivo da Reconstrução
1. Tornar TODO o código acessível, adotando as estratégias mais modernas;
2. Garantir navegação completa com leitores de tela (NVDA), sem uso do monitor;
3. Migrar todo o conteúdo para carregamento dinâmico via banco de dados (MySQL + PHP).
---
## Estrutura da Página Localização
### 1. Introdução (`<header>`)
- **1.1 Logo/Nome do Site**  
 `<h1>Fatecon</h1>` — Logotipo exibido como imagem.
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
### 2. Imagem de Capa
- **2.1 Banner Visual**
 - `<img src="https://placehold.co/1400x400" alt="Imagem ilustrativa da localização do evento">`  
 - Imagem de largura total da página, usada como destaque visual.
---
### 3. Informações de Localização (`<main>`)
- **3.1 Bloco de Texto em Três Colunas (`<section>`)**
 - Cada coluna contém:
   - Título: `<h2>Lorem Ipsum</h2>`
   - Parágrafo com informações: `<p>Conteúdo descritivo sobre localização, acesso, transporte, etc.</p>`
---
### 4. Rodapé (`<footer>`)
- **4.1 Informações institucionais**
 - `<p>&copy; Lorem Ipsum</p>`
- **4.2 Redes Sociais (`<nav>`)**
 - Lista de ícones representando:
   - Instagram
   - Twitter
   - Facebook
   - Outros
---
## HTML5 Semântico Aplicado
- Uso de `<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`, `<h2>`, `<p>`, `<img>`
- Conteúdo dividido visualmente em colunas com Bootstrap (`row` e `col`)
- Imagem com `alt` para acessibilidade
- Estrutura preparada para `aria-label`, `aria-labelledby`, `role="region"`, etc.
---
## Acessibilidade Alvo
- Leitura fluida de seções com o NVDA
- Marcações semânticas para leitura por região (landmarks)
- Imagens com `alt` descritivo
- Preparação para futura exibição dinâmica dos textos ou mapa via banco de dados