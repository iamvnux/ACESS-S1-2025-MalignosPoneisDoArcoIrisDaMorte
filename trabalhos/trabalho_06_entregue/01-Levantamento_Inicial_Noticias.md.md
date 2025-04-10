# Levantamento Inicial - Página Notícias
## Descrição do Projeto Anterior
A página **Notícias** do portal Fatecon apresenta cards com manchetes, imagens e resumos de matérias sobre cultura geek, HQs e eventos. A estrutura visual é baseada em Bootstrap, com três seções organizadas em linhas e colunas. Todo o conteúdo é estático, sem carregamento dinâmico ou suporte à acessibilidade via leitores de tela.
---
## Objetivo da Reconstrução
1. Tornar TODO o código acessível, adotando as estratégias mais modernas;
2. Garantir navegação completa com leitores de tela (NVDA), sem uso do monitor;
3. Migrar todo o conteúdo para carregamento dinâmico via banco de dados (MySQL + PHP).
---
## Estrutura da Página Notícias
### 1. Introdução (`<header>`)
- **1.1 Logo/Nome do Site**  
 `<h1>Fatecon</h1>` — Logotipo representado por imagem.
- **1.2 Navegação Principal (`<nav>`)**
 - **1.2.1 Home** — `<a href="index.html">`
 - **1.2.2 Notícias** — `<a href="noticias.html" aria-current="page">`
 - **1.2.3 Programação** — `<a href="programacao.html">`
 - **1.2.4 Ingressos** — `<a href="ingressos.html">`
 - **1.2.5 Business** — `<a href="business.html">`
 - **1.2.6 Mais (dropdown)**  
   - Localização  
   - Normas  
   - FAQ  
   - Quem somos
---
### 2. Conteúdo Principal de Notícias (`<main><article>`)
#### 2.1 Primeira Linha de Notícias (`<section>`)
- **Card 1 (col-12)**
 - Imagem: `<img src="..." alt="imagem das notícias">`
 - Título: `<h5 class="card-title">Lorem Ipsum</h5>`
 - Texto: `<p class="card-text">Resumo da notícia</p>`
 - Botão: `<a href="#" class="btn btn-secondary">Leia mais</a>`
#### 2.2 Segunda Linha de Notícias (`<section>`)
- **Card 1 (col-8)** e **Card 2 (col-4)**
 - Mesma estrutura de imagem, título, resumo e botão.
#### 2.3 Terceira Linha de Notícias (`<section>`)
- **Card 1, 2 e 3 (col-4)** — Três cards lado a lado com mesma estrutura de conteúdo.
#### 2.4 Botão Extra no Final da Página
- `<button class="btn btn-outline-secondary">Lorem Ipsum</button>`  
 (pode representar "ver mais notícias" ou "carregar mais")
---
### 3. Rodapé (`<footer>`)
- **3.1 Informações Institucionais**
 - `<p>&copy; Lorem Ipsum</p>`
- **3.2 Redes Sociais (`<nav>`)**
 - Ícones representando:
   - Instagram
   - Twitter
   - Facebook
   - Outros
---
## HTML5 Semântico Aplicado
- Uso de `<header>`, `<nav>`, `<main>`, `<article>`,
Perfeito! Com base no HTML da página **Programação**, aqui está o arquivo **`01-Levantamento_Inicial_Programacao.md`**, seguindo exatamente o padrão do **modelo do PDF (Exemplo prático Home Portal)**:
---
### **`01-Levantamento_Inicial_Programacao.md`**
```markdown
# Levantamento Inicial - Página Programação
## Descrição do Projeto Anterior
A página **Programação** do portal Fatecon apresenta os destaques da agenda do evento. A estrutura é composta por seções com imagens, textos explicativos, botões de chamada e ícones representando redes ou ações. O conteúdo é totalmente estático, sem integração com banco de dados nem suporte à acessibilidade.
---
## Objetivo da Reconstrução
1. Tornar TODO o código acessível, adotando as estratégias mais modernas;
2. Garantir navegação completa com leitores de tela (NVDA), sem uso do monitor;
3. Migrar todo o conteúdo para carregamento dinâmico via banco de dados (MySQL + PHP).
---
## Estrutura da Página Programação
### 1. Introdução (`<header>`)
- **1.1 Logo/Nome do Site**  
 `<h1>Fatecon</h1>` — Logotipo exibido em imagem.
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
#### 2.1 Primeira Seção de Programação (`<section>`)
- Layout com imagem à esquerda e conteúdo textual à direita.
 - Imagem destacada: `<img src="..." alt="Imagem do evento">`
 - Título: `<h1 class="card-title">Lorem Ipsum</h1>`
 - Texto: `<p class="card-text">Descrição da atividade do evento</p>`
 - Botão: `<a href="#" class="btn btn-secondary">Ação</a>`
 - Ícones complementares (redes sociais ou símbolos): `<img src="..." alt="ícone">`
#### 2.2 Segunda Seção com Conteúdo Expandido (`<section>`)
- Título e texto descritivo da programação em destaque.
- Imagem ilustrativa centralizada abaixo do texto.
#### 2.3 Terceira Seção com Imagem Antes do Texto (`<section>`)
- Primeiro, imagem de destaque do conteúdo.
- Depois, parágrafo com descrição longa de evento ou atividade.
---
### 3. Rodapé (`<footer>`)
- **3.1 Informações Institucionais**
 - `<p>&copy; Lorem Ipsum</p>`
- **3.2 Redes Sociais (`<nav>`)**
 - Ícones representando:
   - Instagram
   - Twitter
   - Facebook
   - Outros
---
## HTML5 Semântico Aplicado
- Uso de `<header>`, `<nav>`, `<main>`, `<article>`, `<section>`, `<footer>`, `<h1>`, `<p>`, `<a>`, `<img>`
- Estrutura modular em blocos de conteúdo reutilizáveis
- Hierarquia visual clara com títulos e botões
---
## Acessibilidade Alvo
- Marcações de regiões com landmarks semânticos
- Uso de `alt` nas imagens
- Botões e links com textos descritivos
- Possibilidade de carregamento dinâmico das atividades com banco de dados (PHP + SQL)