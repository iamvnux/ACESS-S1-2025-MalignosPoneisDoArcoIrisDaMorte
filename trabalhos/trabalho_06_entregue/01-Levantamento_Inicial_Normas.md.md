# Levantamento Inicial - Página Normas
## Descrição do Projeto Anterior
A página **Normas** do portal Fatecon apresenta as diretrizes e regras para visitantes e participantes do evento. O conteúdo é textual, extenso e organizado em blocos, intercalando colunas com parágrafos e uma imagem. O site é estático e ainda não segue boas práticas de acessibilidade.
---
## Objetivo da Reconstrução
1. Tornar TODO o código acessível, adotando as estratégias mais modernas;
2. Garantir navegação completa com leitores de tela (NVDA), sem uso do monitor;
3. Migrar todo o conteúdo para carregamento dinâmico via banco de dados (MySQL + PHP).
---
## Estrutura da Página Normas
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
### 2. Conteúdo Principal (`<main>`)
#### 2.1 Bloco Inicial de Texto (`<div>`)
- Título: `<h1>Lorem ipsum</h1>`
- Parágrafo extenso com normas e diretrizes em texto corrido (`<p>`)
#### 2.2 Bloco Lateral com Imagem (`<div class="row">`)
- Coluna de texto adicional à esquerda: `<p>`
- Imagem à direita representando as normas:  
 `<img src="..." alt="Ilustração sobre normas do evento">`
#### 2.3 Bloco Final com Texto Complementar
- Outro parágrafo longo, com informações extras sobre regras de convivência e conduta
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
- Uso de `<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`, `<h1>`, `<p>`, `<img>`, `<figure>`
- Layout estruturado com Bootstrap e colunas (`row`, `col-md-*`)
- Alternância entre imagem e texto em seções diferentes
- Blocos identificáveis por leitores de tela
---
## Acessibilidade Alvo
- Leitura fluida de todo o conteúdo com leitores de tela (NVDA)
- Imagens com descrição alternativa via `alt`
- Textos organizados com tags semânticas para facilitar navegação
- Preparação futura para tornar o conteúdo dinâmico com integração a banco de dados (PHP + MySQL)