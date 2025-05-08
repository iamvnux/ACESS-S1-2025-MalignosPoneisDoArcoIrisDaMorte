# Trabalho [PROJETO INTEGRADOR]

**Nome do grupo**: Malignos Pôneis do Arco-Íris da Morte

**Nomes dos integrantes do grupo**:

- Lívia Ferreira Dias
- Wesley Washington de Oliveira dos Santos Brito
- Bryan Cadmiel Evangelista de Souza

**Email do representante**: liviasdias12@gmail.com

**GitHub ID**:
- @iamvnux
- @wesleyww0
- @BryanCadmiel

**R.A.**:
- 2650832413016
- 2650832413025
- 2650832413001

**Descrição do trabalho**:
Criação de Cabeçalhos, Links e Menus
Acessíveis

Antes: 


Embora com boa estrutura não apresentava informaçoes claras sobre o que estava dentro de cada parte do site e os menus e links poderiam deixar usuários com funçoes de acessibilidade confusos e a navegação difícil
<header>
        <nav aria-label="Menu principal">
            <a href="#" aria-label="Página inicial">
                <img src="imagens/logoHeader.png" alt="Logo" height="40">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="noticias.php">Notícias</a></li>
                <li><a href="programacao.php">Programação</a></li>
                <li><a href="ingressos.php">Ingressos</a></li>
                <li><a href="business.php">Business</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <table role="grid">
            <thead>
                <tr>
                    <th scope="col" colspan="2">Notícias</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                        <article aria-labelledby="noticia1">
                            <figure>
                                <img src="imagens/noticia1.jpg" alt="Imagem da notícia">
                            </figure>
                            <h2 id="noticia1">Fatec São Roque realiza a primeira edição do FateconHQs</h2>
                            <p>Exposição contará com trabalhos de quadrinistas, workshops de ilustração de quadrinhos e de orientação à leitura e praça de alimentação.</p>
                            <a href="https://www.cps.sp.gov.br/fatec-sao-roque-realiza-a-primeira-edicao-do-fateconhqs/" aria-label="Saiba mais sobre a Fatec São Roque">Saiba Mais</a>
                        </article>

Depois:


Agora com todos esses dados descritivos os usuários ultilizando acessibilidade podem entender onde estão, o que está selecionado para onde vão e até mesmo uma breve ideia do que esperar navegando no menu, seja por mouse ou teclado.
<header>
        <h2 class="hidden">Menu de navegação principal do site contendo a logo</h2>
        <nav aria-label="Menu principal">
            <a href="#" aria-label="Página inicial">
                <img src="imagens/logoHeader.png" alt="Logo" height="40">
            </a>
            <ul>
                <li><a href="index.php" aria-label="Ir Para Página Home">Home</a></li>
                <li><a href="noticias.php" aria-label="Ir Para página de notícias">Noticias</a></li>
                <li><a href="programacao.php" aria-label="Ir Para página de programação do evento">Programação</a></li>
                <li><a href="ingressos.php" aria-label="Ir Para Página de Ingressos">Ingressos</a></li>
                <li><a href="business.php" aria-label="Ir para a página Business para quem deseja expor, patrocinar ou ter uma parceria com a FATECon poder entender os benefícios de estar envolvido com este tipo de evento e entrar em contato">Business</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1 class="hidden">Notícias referentes a FATECon e um menu de navegação para saiba mais e voltar ao topo.</h1>
        <table role="grid">
            <thead>
                <tr>
                    <th scope="col" colspan="2">Notícias</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                        <article aria-labelledby="noticia1">
                            <figure>
                                <img src="imagens/noticia1.jpg" alt="Imagem da notícia">
                            </figure>
                            <h2 id="noticia1">Fatec São Roque realiza a primeira edição do FateconHQs</h2>
                            <p>Exposição contará com trabalhos de quadrinistas, workshops de ilustração de quadrinhos e de orientação à leitura e praça de alimentação.</p>
                            <a href="https://www.cps.sp.gov.br/fatec-sao-roque-realiza-a-primeira-edicao-do-fateconhqs/" aria-label="Saiba mais sobre a Fatec São Roque">Saiba Mais</a>
                        </article>