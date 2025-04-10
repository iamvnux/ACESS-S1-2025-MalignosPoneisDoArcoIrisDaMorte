# Levantamento Inicial - Página Ingressos
## Descrição do Projeto Anterior
A página **Ingressos** do portal Fatecon apresenta opções de compra para diferentes tipos de entrada no evento. Conta com elementos visuais em destaque, botões de interação, blocos organizados por colunas e textos explicativos sobre categorias de ingresso. Todo o conteúdo é estático, sem integração com banco de dados ou estrutura de acessibilidade adequada.
---
## Objetivo da Reconstrução
1. Tornar TODO o código acessível, adotando as estratégias mais modernas;
2. Garantir navegação completa com leitores de tela (NVDA), sem uso do monitor;
3. Migrar todo o conteúdo para carregamento dinâmico via banco de dados (MySQL + PHP).
---
## Estrutura da Página Ingressos
### 1. Introdução (`<header>`)
- **1.1 Logo/Nome do Site**  
 `<h1>Fatecon</h1>` — Logotipo apresentado como imagem.
- **1.2 Navegação Principal (`<nav>`)**
 - **1.2.1 Home** — `<a href="index.html">`
 - **1.2.2 Notícias** — `<a href="noticias.html">`
 - **1.2.3 Programação** — `<a href="programacao.html">`
 - **1.2.4 Ingressos** — `<a href="ingressos.html" aria-current="page">`
 - **1.2.5 Business** — `<a href="business.html">`
 - **1.2.6 Mais (dropdown)**  
   - Localização  
   - Normas  
   - FAQ  
   - Quem somos
---
### 2. Destaques Visuais Iniciais (`<section>`)
- **2.1 Blocos com Imagens**
 - Container com duas colunas:
   - `<div class="top-image"></div>` (duas instâncias visuais representando banners ou destaques)
---
### 3. Seção de Ingressos (`<main><section>`)
- **3.1 Botões de Ação (Compra de Ingressos)**
 - Seis blocos representando diferentes tipos de ingresso
 - Cada bloco contém:
   - `<button class="btn btn-dark">Lorem</button>`
---
### 4. Informações sobre Tipos de Ingressos (`<section>`)
- **4.1 Bloco com Título e Parágrafo Explicativo**
 - Título: `<h2>Lorem Ipsum</h2>`
 - Descrição: `<p>Explicações detalhadas sobre categorias de ingressos</p>`
 - Repetição da estrutura com outro título e parágrafo
---
### 5. Rodapé (`<footer>`)
- **5.1 Informações institucionais**
 - `<p>&copy; Lorem Ipsum</p>`
- **5.2 Redes Sociais (`<nav>`)**
 - Ícones com links representando:
   - Instagram
   - Twitter
   - Facebook
   - Outros
---
## HTML5 Semântico Aplicado
- Uso de `<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`, `<button>`, `<h2>`, `<p>`
- Organização visual por colunas com `Bootstrap` e divisão clara por seções
- Elementos interativos acessíveis com `aria-label` e `aria-current` (a serem implementados)
---
## Acessibilidade Alvo
- Navegação eficiente por regiões (landmarks semânticos)
- Botões de compra com identificação clara por leitores de tela
- Títulos e textos legíveis em ordem hierárquica correta
- Preparação para integração com banco de dados e sistema de pedidos via PHP + SQL