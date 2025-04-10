# Reconstrução com Acessibilidade - Página Home

## Objetivo

Implementar atributos WAI-ARIA na página Home para garantir que todas as regiões e elementos interajam adequadamente com leitores de tela.

## Estratégias Aplicadas

### 1. Cabeçalho e Navegação

- **Navegação Principal:**  

  Uso de `<nav role="navigation" aria-label="Menu principal">` para definir a área de navegação.

- **Link ativo:**  

  Exemplo: `<a href="index.html" aria-current="page">Home</a>` para indicar a página atual.

- **Botão Mobile:**  

  `<button aria-label="Abrir menu" aria-expanded="false">` informa a função e o estado atual.

### 2. Conteúdo Principal

- **Região Principal:**  

  A tag `<main role="main">` delimita o conteúdo principal.

- **Seções:**  

  Cada seção de conteúdo utiliza `<section role="region" aria-labelledby="tituloX">` e os títulos correspondentes possuem `id` para referência.

### 3. Imagens e Elementos Visuais

- Todas as imagens possuem atributos `alt` descritivos, por exemplo:  

  `<img src="banner.jpg" alt="Banner do evento Fatecon">`

### 4. Rodapé

- **Rodapé:**  

  `<footer role="contentinfo">` marca a área de informações finais.

- **Redes Sociais:**  

  O menu das redes sociais utiliza `<nav aria-label="Redes sociais">` e cada link tem `aria-label` descritivo.

## Exemplo Resumido do Código

<!-- ```html
<header>
<nav role="navigation" aria-label="Menu principal">
<ul>
<li><a href="index.html" aria-current="page">Home</a></li>
<li><a href="noticias.html">Notícias</a></li>
</ul>
</nav>
</header>
<main role="main">
<section role="region" aria-labelledby="secaoDestaque">
<h2 id="secaoDestaque">Destaque da Página</h2>
<p>Conteúdo acessível...</p>
</section>
</main>
<footer role="contentinfo">
<p>&copy; Fatecon</p>
<nav aria-label="Redes sociais">
<a href="#" aria-label="Instagram"><img src="insta.png" alt=""></a>
</nav>
</footer>  -->

# Reconstrução com Acessibilidade - Página Business

## Objetivo

Garantir que a página Business possua atributos ARIA que melhorem a navegação e a interação com formulários e botões, assegurando acessibilidade total.

## Estratégias Aplicadas

### 1. Cabeçalho e Navegação

- `<nav role="navigation" aria-label="Menu principal">` abrange todos os links.

- O link da página Business recebe `aria-current="page"`.

### 2. Conteúdo Institucional e Formulário

- **Região do Conteúdo:**  

  `<main role="main">` delimita o conteúdo central.

- **Formulário de Cadastro:**  

  O `<form>` deve incluir atributos como `aria-labelledby="tituloForm"` para identificar a seção de cadastro.

- **Campos do Formulário:**  

  Cada campo tem um `<label>` associado. Se necessário, use `aria-describedby` para fornecer instruções adicionais.

### 3. Elementos Interativos

- Botões possuem `aria-label` para explicar sua função, por exemplo:  

  `<button type="submit" aria-label="Enviar cadastro">Enviar</button>`

### 4. Rodapé

- `<footer role="contentinfo">` e menu de redes sociais com `aria-label="Redes sociais"`.

## Exemplo Resumido do Código

<!-- ```html
<header>
<nav role="navigation" aria-label="Menu principal">
<ul>
<li><a href="business.html" aria-current="page">Business</a></li>
</ul>
</nav>
</header>
<main role="main">
<section role="region" aria-labelledby="infoBusiness">
<h2 id="infoBusiness">Informações Institucionais</h2>
<p>Detalhes sobre parcerias, oportunidades e mais...</p>
</section>
<section role="region" aria-labelledby="tituloForm">
<h2 id="tituloForm">Cadastro</h2>
<form>
<label for="nome">Nome</label>
<input type="text" id="nome" aria-describedby="nomeAjuda">
<button type="submit" aria-label="Enviar cadastro">Enviar</button>
</form>
</section>
</main>
<footer role="contentinfo">
<p>&copy; Fatecon</p>
<nav aria-label="Redes sociais">
</nav>
</footer>  -->

# Reconstrução com Acessibilidade - Página FAQ

## Objetivo

Implementar atributos ARIA para facilitar a compreensão do conteúdo da página FAQ, garantindo que perguntas e respostas sejam navegáveis via leitores de tela.

## Estratégias Aplicadas

### 1. Cabeçalho e Navegação

- `<nav role="navigation" aria-label="Menu principal">` envolve os links de navegação.

- Destaque para o link FAQ com `aria-current="page"`.

### 2. Conteúdo Principal

- **Região de FAQ:**  

  Utilizar `<main role="main">` para o conteúdo principal.

- **Perguntas e Respostas:**  

  Cada FAQ pode ser agrupado em um `<article role="article">` e utilizar `<h2>` para a pergunta e `<p>` para a resposta.

- **Formulário de Envio de Dúvidas:**  

  `<form role="form" aria-labelledby="tituloDúvidas">` com campos e botões acessíveis.

### 3. Rodapé

- `<footer role="contentinfo">` com redes sociais configuradas com `aria-label`.

## Exemplo Resumido do Código

<!-- ```html
<header>
<nav role="navigation" aria-label="Menu principal">
<ul>
<li><a href="faq.html" aria-current="page">FAQ</a></li>
</ul>
</nav>
</header>
<main role="main">
<article role="article">
<h2 id="pergunta1">Lorem Ipsum?</h2>
<p>Resposta com informações detalhadas...</p>
</article>
<section role="region" aria-labelledby="tituloDúvidas">
<h2 id="tituloDúvidas">Envie sua dúvida</h2>
<form>
<label for="duvida">Digite sua dúvida</label>
<input type="text" id="duvida">
<button type="submit" aria-label="Enviar dúvida">Enviar</button>
</form>
</section>
</main>
<footer role="contentinfo">
<p>&copy; Fatecon</p>
<nav aria-label="Redes sociais">
</nav>
</footer>  -->

# Reconstrução com Acessibilidade - Página Localização

## Objetivo

Implementar atributos ARIA na página de Localização para que informações sobre o local do evento sejam facilmente acessíveis por tecnologias assistivas.

## Estratégias Aplicadas

### 1. Cabeçalho e Navegação

- `<nav role="navigation" aria-label="Menu principal">` envolve todos os links.

- Reforçar o link de "Localização" se necessário com `aria-current="page"` (se estiver nessa página).

### 2. Conteúdo Principal

- **Imagem de Capa:**  

  `<img src="..." alt="Imagem ilustrativa da localização do evento">`

- **Informações em Colunas:**  

  Utilizar `<section role="region" aria-labelledby="secaoLocalizacao">` para agrupar os textos.

  - Títulos com `id` (por exemplo, `<h2 id="secaoLocalizacao">Informações de Localização</h2>`)

  - Parágrafos informativos

- As colunas definidas com classes Bootstrap devem ser descritas de forma que leitores de tela entendam a divisão de conteúdo.

### 3. Rodapé

- `<footer role="contentinfo">` com rede social definida com `aria-label`.

## Exemplo Resumido do Código

<!-- ```html
<header>
<nav role="navigation" aria-label="Menu principal">
</nav>
</header>
<main role="main">
<img src="banner-localizacao.jpg" alt="Imagem ilustrativa da localização do evento">
<section role="region" aria-labelledby="secaoLocalizacao">
<h2 id="secaoLocalizacao">Informações de Localização</h2>
<p>Texto descritivo sobre o local, acesso e orientações...</p>
</section>
</main>
<footer role="contentinfo">
<p>&copy; Fatecon</p>
<nav aria-label="Redes sociais">
</nav>
</footer>  -->

# Reconstrução com Acessibilidade - Página Normas

## Objetivo

Aplicar atributos ARIA na página Normas para que o extenso conteúdo textual e os elementos visuais sejam totalmente acessíveis e navegáveis por leitores de tela.

## Estratégias Aplicadas

### 1. Cabeçalho e Navegação

- `<nav role="navigation" aria-label="Menu principal">` envolve a barra de navegação.

- O link "Normas" pode receber `aria-current="page"` se estiver ativa.

### 2. Conteúdo Principal

- **Bloco de Texto Extenso:**  

  O conteúdo principal é delimitado por `<main role="main">` e subdividido em seções com `<section role="region" aria-labelledby="tituloNormas">`.

  - Títulos como `<h1 id="tituloNormas">Lorem ipsum</h1>` ajudam a identificar o conteúdo.

- **Bloco Lateral com Imagem:**  

  A imagem utilizada possui um `alt` descritivo (exemplo: `alt="Ilustração sobre normas do evento"`).

### 3. Rodapé

- `<footer role="contentinfo">` e redes sociais com `aria-label`.

## Exemplo Resumido do Código

<!-- ```html
<header>
<nav role="navigation" aria-label="Menu principal">
</nav>
</header>
<main role="main">
<section role="region" aria-labelledby="tituloNormas">
<h1 id="tituloNormas">Lorem ipsum</h1>
<p>Texto corrido com todas as normas e diretrizes...</p>
</section>
<section role="region" aria-labelledby="secaoImagemNormas">
<div class="row">
<div class="col-md-6">
<p>Texto adicional explicativo</p>
</div>
<div class="col-md-6">
<img src="normas.jpg" alt="Ilustração sobre normas do evento">
</div>
</div>
</section>
<section role="region">
<p>Texto complementar sobre regras e condutas...</p>
</section>
</main>
<footer role="contentinfo">
<p>&copy; Fatecon</p>
<nav aria-label="Redes sociais">
</nav>
</footer>  -->

# Reconstrução com Acessibilidade - Página Notícias

## Objetivo

Aplicar atributos ARIA na página Notícias para que os cards de notícias sejam facilmente navegáveis e interpretados por leitores de tela.

## Estratégias Aplicadas

### 1. Cabeçalho e Navegação

- `<nav role="navigation" aria-label="Menu principal">` abrange os links.

- O link "Notícias" recebe `aria-current="page"`.

### 2. Conteúdo Principal

- **Primeira Linha de Notícias:**  

  Cada card é envolvido por `<article role="article">` para indicar uma unidade de conteúdo independente.

  - Imagens com `alt` descritivo (ex: `alt="Imagem das notícias"`)

  - Títulos e resumos utilizando `<h5>` e `<p>`

  - Botões com `aria-label` para ação, por exemplo: `<a href="#" class="btn" aria-label="Leia mais sobre Lorem Ipsum">Leia mais</a>`

- **Outras Linhas de Notícias:**  

  Divididas em `<section role="region" aria-labelledby="secaoNoticias">` com títulos e agrupamentos lógicos.

### 3. Rodapé

- `<footer role="contentinfo">` com redes sociais definidas com `aria-label`.

## Exemplo Resumido do Código

<!-- ```html
<header>
<nav role="navigation" aria-label="Menu principal">
</nav>
</header>
<main role="main">
<section role="region" aria-labelledby="secaoNoticias">
<article role="article">
<img src="noticia1.jpg" alt="Imagem das notícias">
<h5>Lorem Ipsum</h5>
<p>Resumo da notícia...</p>
<a href="#" class="btn" aria-label="Leia mais sobre Lorem Ipsum">Leia mais</a>
</article>
</section>
</main>
<footer role="contentinfo">
<p>&copy; Fatecon</p>
<nav aria-label="Redes sociais">
</nav>
</footer>  -->

# Reconstrução com Acessibilidade - Página Programação

## Objetivo

Implementar atributos ARIA na página Programação para que as informações sobre a agenda do evento sejam apresentadas de forma clara e acessível.

## Estratégias Aplicadas

### 1. Cabeçalho e Navegação

- `<nav role="navigation" aria-label="Menu principal">` para toda a barra de navegação.

- O link "Programação" recebe `aria-current="page"`.

### 2. Conteúdo Principal

- **Divisão das Seções:**  

  Cada seção de programação utiliza `<section role="region" aria-labelledby="tituloSecaoProgramacaoX">`.

  - Exemplo: `<h1 id="tituloSecaoProgramacao1">Lorem ipsum</h1>` seguido de parágrafo explicativo.

- **Imagens e Cards:**  

  As imagens possuem `alt` descritivo e os cards são encapsulados com `<article role="article">`.

- **Botões de Ação:**  

  Botões têm `aria-label` para especificar a função, ex: `<a href="#" class="btn" aria-label="Saiba mais sobre esta atividade">Saiba mais</a>`

### 3. Rodapé

- `<footer role="contentinfo">` e menu de redes sociais com `aria-label`.

## Exemplo Resumido do Código

<!-- ```html
<header>
<nav role="navigation" aria-label="Menu principal">
</nav>
</header>
<main role="main">
<section role="region" aria-labelledby="tituloSecaoProgramacao1">
<div class="row">
<div class="col-8">
<img src="evento.jpg" alt="Imagem do evento">
</div>
<div class="col-3">
<h1 id="tituloSecaoProgramacao1">Lorem ipsum</h1>
<p>Descrição da atividade</p>
<a href="#" class="btn" aria-label="Saiba mais sobre Lorem ipsum">Lorem ipsum</a>
</div>
</div>
</section>
</main>
<footer role="contentinfo">
<p>&copy; Fatecon</p>
<nav aria-label="Redes sociais">
</nav>
</footer>  -->

# Reconstrução com Acessibilidade - Página Quem Somos

## Objetivo

Aplicar atributos ARIA na página Quem Somos para que as informações institucionais e o conteúdo sobre a equipe sejam facilmente acessíveis e interpretados por tecnologias assistivas.

## Estratégias Aplicadas

### 1. Cabeçalho e Navegação

- `<nav role="navigation" aria-label="Menu principal">` para a navegação do site.

- O link "Quem somos" pode receber `aria-current="page"` se a página estiver ativa.

### 2. Conteúdo Institucional

- **Divisão em Seções com Imagens e Texto:**  

  Cada parte do conteúdo é estruturada dentro de `<article role="article">` ou `<section role="region" aria-labelledby="tituloQuemSomosX">`.

  - Títulos como `<h2 id="tituloQuemSomos1">Lorem</h2>` indicam seções.

  - Imagens possuem `alt` descritivo, por exemplo: `<img src="quem-somos.jpg" alt="Imagem institucional">`.

- **Alternância de Layouts:**  

  Seções com texto à esquerda e imagem à direita (e vice-versa) são agrupadas semanticamente.

### 3. Rodapé

- `<footer role="contentinfo">` e menu de redes sociais com `aria-label="Redes sociais"`.

## Exemplo Resumido do Código

<!-- ```html
<header>
<nav role="navigation" aria-label="Menu principal">
</nav>
</header>
<main role="main">
<article role="article">
<div class="row">
<div class="col-lg-8">
<h2 id="tituloQuemSomos1">Lorem</h2>
<p>Texto explicativo sobre a missão e os valores do projeto.</p>
</div>
<div class="col-lg-2 offset-lg-1">
<figure>
<img src="quem-somos.jpg" alt="Imagem institucional">
</figure>
</div>
</div>
</article>
</main>
<footer role="contentinfo">
<p>&copy; Fatecon</p>
<nav aria-label="Redes sociais">
</nav>
</footer>  -->