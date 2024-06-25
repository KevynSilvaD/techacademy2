<!DOCTYPE html>
<html lang="pt-br">

<?php
    $backgroundImage =
'http://localhost/techacademy2/images/back.jpg';
    $someCondition = true; 
    if ($someCondition) {
        $backgroundImage =
'http://localhost/techacademy2/images/back.jpg';
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stem Verde</title>
    <meta name="description" content="Sua página de Games pagos e gratuitos">
    <meta name="keywords" content="games, jogos, gratuitos">

    <base href="http://localhost/techacademy2/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icone.png">
   
   <style>
        body {
            background-image: url('<?php echo $backgroundImage; ?>');   
            background-size: 100%;
        }
    </style>
</head>

<body> 
    <div>
    <?php
    $url = "http://localhost/techacademy2/api/games.php";
    //importar dados
    $dadosApi = file_get_contents($url);
    $dadosJogos = json_decode($dadosApi);

    ?>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="Stem verde">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem-somos">Quem Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Games
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            foreach ($dadosJogos as $dados) {
                                echo "<li><a class='dropdown-item' href='game/{$dados->id}'>{$dados->nome}</a>
                                    </li>";
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="arquivo.zip" title="Download dos Arquivos" class="btn btn-warning">
                        <i class="fa-solid fa-file-arrow-down"></i>
                        <strong>Arquivos</strong>
                    </a>
                    <a href="contato" title="Contato" class="btn btn-info">
                        <i class="fa-solid fa-square-envelope"></i>
                        <strong>Fale Comigo</strong>
                    </a>
                </div>
            </div>
        </div>
    </nav>
                            
        <main>
            <?php
            $pagina = "home";
            if (isset($_GET["pagina"])) {
            $pagina = $_GET["pagina"] ?? "home";
            $pagina = explode("/", $pagina);
            $codigo = $pagina[1] ?? NULL;
            $pagina = $pagina[0] ?? "home";
             }   

            $pagina = "pages/{$pagina}.php";

            if (file_exists($pagina)) {
            include $pagina;
             } else {
            include "pages/erro.php";
            }
            ?>
        </main>



    <footer class="footer" data-aos="fade">
        <p class="text-center">
            <strong>Stem verde - Sua Página de Jogos Gratuitos e Pagos</strong>
        </p>
        <p class="text-center">
            Desenvolvido por Kevyn silva de oliveira
        </p>
    </footer>

    <!-- Scripts -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>