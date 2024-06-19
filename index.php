<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SG</title>


    <base href="http://localhost/techacademy2/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
</head>

<body>
    <header class="header">
        <a href="home" title="home" class="header-logo" data-aos="fade-right">
            <img src="imagens/logo.png" alt="SG">
        </a>

        <a href="javascript:showMenu()" title="Mostrar menu" class="header-menu" data-aos="fade-left">
            <img src="imagens/menu.webp" alt="Menu">
        </a>

        <nav class="header-nav" data-aos="fade-left">
            <ul>
                <li><a href="home" title="home">HOME</a></li>
                <li><a href="quem-somos" title="quem somos">Quem somos</a></li>
                <li><a href="lançamentos" title="quem somos">lançamentos</a></li>
                <li><a href="contato" title="quem somos">Contato</a></li>

            </ul>
        </nav>
    </header>
    <main>
        <?php
        if (isset($_GET["param"])) {

            $param = $_GET["param"];
            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? null;

        if ($page == "jogo") {
            $pagina = "jogo/{$jogo}.php";
        } else {
            $pagina = "paginas/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>
    </main>
    <footer class="footer">
        <p>Desenvolvido por Kevyn silva</p>
    </footer>


    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        AOS.init();
        function showMenu() {
            var menu = document.querySelector(".header-nav");
            menu.classList.toggle("show");
        }
    </script>

</body>

</html>