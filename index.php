<?php
if(isset($_GET["param"])) {

    $param = $_GET["param"];
    $p = explode("/", $param);
}

     $page = $p[0] ?? "home";
     $jogo = $p[1] ?? null;