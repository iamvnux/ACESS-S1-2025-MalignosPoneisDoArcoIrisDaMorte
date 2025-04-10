# Relatório de Adequação dos Códigos para Acessibilidade
Este relatório apresenta as modificações essenciais que devem ser implementadas nas páginas do portal Fatecon para que elas fiquem em conformidade com as diretrizes de acessibilidade (WCAG) e com o uso correto dos atributos WAI-ARIA. O objetivo é garantir que usuários que utilizam leitores de tela (como o NVDA) e outras tecnologias assistivas consigam navegar e interagir com o site de forma eficiente e intuitiva.

## 1. Estrutura Semântica do HTML

### 1.1 Uso de Tags Semânticas
- **Cabeçalho e Navegação:**  
 - Substituir estruturas genéricas por `<header>` e `<nav>`.
 - Exemplo:
   <!-- html
<header>
<nav role="navigation" aria-label="Menu principal">
</nav>
</header> -->

- **Conteúdo Principal:**  
 - Utilizar a tag `<main>` para delimitar o conteúdo central.
 - Organizar as seções de conteúdo com `<section>`, `<article>` e `<aside>`, conforme o contexto.
- **Rodapé:**  
 - Usar a tag `<footer>` com o atributo `role="contentinfo"`.

### 1.2 Hierarquia de Títulos

- Estabelecer uma ordem lógica de títulos:  
 - `<h1>` para o nome/identificação do site.
 - `<h2>`, `<h3>` (e assim por diante) para seções e subseções.
- Incluir atributos `id` nos títulos que servirão de referência para atributos ARIA (ex.: `aria-labelledby`).
---
## 2. Implementação dos Atributos WAI-ARIA

### 2.1 Landmarks e Regiões

- **Navegação:**  
 - Incluir `role="navigation"` e `aria-label="Menu principal"` na tag `<nav>`.
- **Conteúdo Principal:**  
 - Usar `<main role="main">` para delimitar a área principal de conteúdo.
- **Rodapé:**  
 - Definir `<footer role="contentinfo">` para identificar a região de informações institucionais.

### 2.2 Atributos em Elementos Interativos

- **Links Ativos:**  
 - Adicionar `aria-current="page"` no link correspondente à página ativa.  
   Exemplo:  
   <!-- html
<a href="index.html" aria-current="page">Home</a> -->

- **Botões e Controles:**  
 - Incluir `aria-label` nos botões para descrever sua função.
 - Utilizar `aria-expanded` em botões que controlam menus ou dropdowns.
   Exemplo:
   <!-- html
<button aria-label="Abrir menu" aria-expanded="false">...</button> -->

- **Formulários:**  

 - Cada campo deve ter um `<label>` associado.
 - Utilizar `aria-describedby` para fornecer informações adicionais quando necessário.

## 3. Imagens e Elementos Visuais

### 3.1 Texto Alternativo (alt)

- **Imagens Informativas:**  
 - Adicionar um `alt` descritivo que comunique o conteúdo ou função da imagem.
- **Imagens Decorativas:**  
 - Definir `alt=""` para que sejam ignoradas pelos leitores de tela.

### 3.2 Elementos de Mídia

- Caso haja vídeos ou áudios, deve-se incluir legendas, transcrições ou descrições alternativas.

## 4. Estrutura dos Menus e Dropdowns

- **Menus Dropdown:**  
 - Adicionar atributos ARIA para comunicar o estado do menu.
 - Exemplo:
   <!-- html
<a class="dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     Mais
</a>
<ul class="dropdown-menu" aria-label="Submenu">
</ul> -->

## 5. Navegação por Foco e Ordem do DOM

### 5.1 Feedback Visual

- Estilizar o foco dos elementos interativos via CSS com pseudo-classes como `:focus`, garantindo que usuários que navegam com o teclado possam identificar o elemento ativo.

### 5.2 Ordem Lógica de Navegação
- Verificar e ajustar a ordem dos elementos no DOM para que a sequência de foco seja coerente com a apresentação visual.

## 6. Conformidade com WCAG

### 6.1 Contraste de Cores e Legibilidade

- Certificar que as combinações de cores (fundo e texto) atendam aos padrões de contraste recomendados para garantir legibilidade.

### 6.2 Tamanho de Fonte e Escalabilidade

- Garantir que as fontes e espaçamentos sejam responsivos e suportem zoom sem perder a integridade do layout.

## 7. Preparação para Conteúdo Dinâmico

- **Integração com Banco de Dados:**  

 - Estruturar o código de forma que o conteúdo possa ser carregado dinamicamente (ex.: usando PHP e MySQL) sem comprometer a semântica e a acessibilidade.

- **Manutenção dos Atributos de Acessibilidade:**  

 - Mesmo após a migração para conteúdo dinâmico, os atributos ARIA e as marcações semânticas devem ser preservados.

## Conclusão

Para tornar o portal Fatecon totalmente acessível, as seguintes ações devem ser executadas:

- **Reestruturar o HTML** utilizando tags semânticas (header, main, footer, section, article, aside).
- **Adicionar atributos ARIA** adequados (aria-label, aria-current, aria-haspopup, aria-expanded, etc.) em elementos interativos e regions importantes.
- **Fornecer textos alternativos** (alt) descritivos para imagens, e utilizar `alt=""` em imagens meramente decorativas.
- **Garantir foco visual** e uma ordem lógica de navegação para usuários que dependem do teclado.
- **Aderir aos padrões de contraste e legibilidade** recomendados pelas diretrizes WCAG.
- **Planejar a migração para conteúdo dinâmico** mantendo toda a semântica e acessibilidade.

Implementando essas mudanças, o portal se tornará acessível, facilitando a navegação e o acesso ao conteúdo por todos os usuários, independentemente de suas habilidades. Este guia serve como referência para as adaptações necessárias em cada página do site.