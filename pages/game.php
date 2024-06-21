<?php
    $dados = $dadosJogos->$codigo; 
?>
<div class="banner">
    <img src="<?=$dados->banner?>" alt="<?=$dados->banner?>" class="w-100">
</div>
<div class="container">
    <h1 class="text-center"><?=$dados->nome?></h1>
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="<?=$dados->poster?>" alt="<?=$dados->nome?>" class="w-100">
        </div>
        <div class="col-12 col-md-8">
            <p>
                <?=$dados->descricao?>
            </p>
        </div>
    </div>
    <h2 class="text-center">Vídeo do Jogo</h2>
    <iframe width="100%" height="600" src="<?=$dados->trailer?>"></iframe>
    
    <h2 class="text-center">Fotos do Jogo</h2>
    <div class="row">
        <?php
            $dadosFotos = file_get_contents("https://stemverde.000webhostapp.com/stem/api/fotos.php");
            $dadosFotos = json_decode($dadosFotos);
            //só as fotos do jogo
            $dados = $dadosFotos->$codigo;

            $i = 1;
            foreach($dados as $foto) {
                ?>
                <div class="col-12 col-md-3">
                    <a 
                    data-fslightbox href="<?=$foto->foto?>" title="Foto <?=$i?>">
                        <img src="<?=$foto->foto?>"
                        alt="Foto <?=$i?>" class="w-100">
                    </a>
                </div>
                <?php
                $i++;
            }
        ?>
    </div>
</div>