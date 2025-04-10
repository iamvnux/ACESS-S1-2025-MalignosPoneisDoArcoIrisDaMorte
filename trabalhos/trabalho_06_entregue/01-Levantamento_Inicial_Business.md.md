# Levantamento Inicial - Página Business
## Descrição do Projeto Anterior
A página **Business** do portal Fatecon apresenta uma proposta institucional voltada a parcerias comerciais, cadastros de expositores e interessados em trabalhar no evento. O layout atual usa o framework Bootstrap, com divisão em colunas, textos explicativos, imagens e um formulário de cadastro.
Todo o conteúdo ainda é estático, sem integração com banco de dados, e não segue padrões de acessibilidade conforme WCAG ou uso de WAI-ARIA.
---
## Objetivo da Reconstrução
1. Tornar TODO o código acessível, adotando as estratégias mais modernas;
2. Garantir navegação completa com leitores de tela (NVDA), sem uso do monitor;
3. Migrar todo o conteúdo para carregamento dinâmico via banco de dados (MySQL + PHP).
---
## Estrutura da Página Business
### 1. Introdução (`<header>`)
- **1.1 Logo/Nome do Site**  
 `<h1>Fatecon</h1>`  
 Logo posicionado à esquerda com imagem representativa do portal.
- **1.2 Navegação Principal (`<nav>`)**
 - **1.2.1 Home** — `<a href="index.html">`
 - **1.2.2 Notícias** — `<a href="noticias.html">`
 - **1.2.3 Programação** — `<a href="programacao.html">`
 - **1.2.4 Ingressos** — `<a href="ingressos.html">`
 - **1.2.5 Business** — `<a href="business.html" aria-current="page">`
 - **1.2.6 Mais (dropdown)**  
   - Localização  
   - Normas  
   - FAQ  
   - Quem somos
---
### 2. Bloco Institucional (`<main><section>`)
- **2.1 Conteúdo informativo sobre parcerias**
 - `<h2>Lorem Ipsum</h2>` — título introdutório
 - `<p>` — parágrafos descritivos sobre a proposta institucional
 - Botões de chamada para ação:
   - `<button>Lorem Ipsum</button>` (duas instâncias)
- **2.2 Imagem representativa**
 - `<div role="img" aria-label="Imagem ilustrativa sobre parcerias">Imagem</div>`
---
### 3. Formulário de Cadastro (`<section>`)
- **3.1 Título**
 - `<h2>Lorem ipsum!</h2>`
- **3.2 Formulário com campos acessíveis**
 - Campo Nome: `<input type="text" id="nome">`
 - Campo E-mail: `<input type="email" id="email">`
 - Campo Telefone: `<input type="tel" id="telefone">`
 - Tipo de Cadastro: `<select id="tipoCadastro">` com opções:
   - Trabalhar
   - Expositor
   - Parceria
 - Mensagem: `<textarea id="mensagem"></textarea>`
 - Botão de Envio: `<button type="submit">Lorem Ipsum</button>`
---
### 4. Bloco Final de Texto (`<section>`)
- **4.1 Título e descrição adicional**
 - `<h2>Lorem Ipsum</h2>`
 - `<p>` — parágrafos explicativos
 - Dois botões adicionais: `<button>Lorem Ipsum</button>`
---
### 5. Rodapé (`<footer>`)
- **5.1 Informações de copyright**
 - `<p>&copy; Lorem Ipsum</p>`
- **5.2 Redes Sociais (`<nav>`)**
 - Lista de ícones com links:
   - Instagram
   - Twitter
   - Facebook
   - Outros
---
## HTML5 Semântico Aplicado
- `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`, `<form>`, `<label>`, `<button>`
- Hierarquia de títulos com `<h1>` a `<h3>`
- Campos com `<input>`, `<select>`, `<textarea>` com `label` associado
---
## Acessibilidade Alvo
- Leitura fluida por leitores de tela (NVDA)
- Navegação por regiões com landmarks (`<main>`, `<nav>`, `<footer>`)
- Campos de formulário com identificação clara e acessível
- Preparação para integração com banco de dados MySQL e PHP para cadastro dinâmico