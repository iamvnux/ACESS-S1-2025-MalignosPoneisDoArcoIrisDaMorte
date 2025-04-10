# Levantamento Inicial - Página FAQ
## Descrição do Projeto Anterior
A página **FAQ** do portal Fatecon serve para esclarecer dúvidas frequentes sobre o evento. Seu layout é dividido em um bloco de texto explicativo, um formulário de envio de perguntas e uma seção complementar com mais conteúdo informativo. Atualmente, a página é estática e ainda não segue as diretrizes de acessibilidade (WCAG/WAI-ARIA).
---
## Objetivo da Reconstrução
1. Tornar TODO o código acessível, adotando as estratégias mais modernas;
2. Garantir navegação completa com leitores de tela (NVDA), sem uso do monitor;
3. Migrar todo o conteúdo para carregamento dinâmico via banco de dados (MySQL + PHP).
---
## Estrutura da Página FAQ
### 1. Introdução (`<header>`)
- **1.1 Logo/Nome do Site**  
 `<h1>Fatecon</h1>` — Logotipo do site exibido como imagem
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
### 2. Bloco de Perguntas Frequentes (`<main><article>`)
- **2.1 Título da Seção**  
 `<h2>Lorem Ipsum</h2>`
- **2.2 Texto Explicativo**  
 `<p>` — Explica o funcionamento do FAQ e contexto do conteúdo
---
### 3. Seção de Interação e Informações (`<section>`)
#### 3.1 Formulário de Envio de Dúvidas
- Estrutura com `<form>`
 - Campo 1: `<input type="text">` — Com `label`
 - Campo 2: `<input type="text">` — Com `label`
 - Botão de envio: `<button type="submit">Button</button>`
#### 3.2 Seção Complementar de Explicação
- **Título da seção**: `<h2>Lorem Ipsum</h2>`
- **Parágrafo de conteúdo adicional**
---
### 4. Rodapé (`<footer>`)
- **4.1 Texto Institucional**
 - `<p>&copy; Lorem Ipsum</p>`
- **4.2 Redes Sociais (`<nav>`)**
 - Ícones com links representando:
   - Instagram
   - Twitter
   - Facebook
   - Outros
---
## HTML5 Semântico Aplicado
- `<header>`, `<nav>`, `<main>`, `<article>`, `<section>`, `<footer>`, `<form>`, `<label>`, `<button>`
- Hierarquia de títulos: `<h1>`, `<h2>`
- Campos com `label` associado
- Uso de `<p>` para conteúdo textual explicativo
---
## Acessibilidade Alvo
- Navegação por seções com landmarks para leitores de tela (NVDA)
- Formulário com campos acessíveis (`label`, `aria-describedby`)
- Conteúdo textual interpretável sem o uso visual
- Possibilidade futura de registrar perguntas e respostas via banco de dados