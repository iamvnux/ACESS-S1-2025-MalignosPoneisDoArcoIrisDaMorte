<?php include ('php/conectar.php') ?>
<?php

$pagina = 'quemsomos';

$sql = "SELECT conteudo FROM paginas WHERE nome = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $pagina);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


$conteudo = $row['conteudo'] ?? "";

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Quem Somos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="css/css.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>

    <header role="banner" aria-label="Cabeçalho do site">
        <?php include('php/header.php'); ?>
    </header>

    <main role="main" id="conteudo-principal" tabindex="-1" aria-label="Conteúdo principal da página">
        <section class="container py-4" aria-label="Seção principal">
        <?php include('php/integrantesQuemSomos.php'); ?>
        </section>
    </main>

    <footer role="contentinfo" aria-label="Rodapé do site">
        <?php include('php/footer.php'); ?>
    </footer>

</body>
</html>

