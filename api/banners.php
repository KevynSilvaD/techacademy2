<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/techacademy2/images/";

    $banners[0] = array("nome"=>"Dream OF Gear","imagem"=>"{$path}banner1.png","id_game"=>1);
    $banners[1] = array("nome"=>"Street Fighter 6","imagem"=>"{$path}banner2.jpg","id_game"=>2);
    $banners[2] = array("nome"=>"Mortal Kombal 1","imagem"=>"{$path}banner3.jpg","id_game"=>3);
   

    echo json_encode($banners);