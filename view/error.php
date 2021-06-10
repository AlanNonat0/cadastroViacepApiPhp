<?php
require_once __DIR__ . "/components/header.php"; # Header
?>

<div class="row mx-auto d-flex justify-content-center mt-5">

<h1 class="text-white text-center mt-5">Oops! Ocorreu um erro ao processar</h1>
    <div class="col-lg-6 col-12 col-sm-6 col-xl-4 mt-2">
        <div class="row mt-3">

            <div class=" col-12 text-white text-center">
                <?php
                switch ($error['errcode']):
                    case 404: ?>
                            <h5 class="text-white text-center">
                                <h1 class="fw-bold"><?= $error['errcode'] ?></h1> 
                                Página não encontrada
                            </h5>
                    <?php break;

                    default: ?>
                            <h5 class="text-white text-center">
                                <h1><?= $error['errcode'] ?></h1>
                                Tente novamente em alguns minutos
                            </h5>
                <?php break;
                endswitch;
                ?>
                <a href="<?= url()?>" class="text-decoration-none">clique para voltar</a>
            </div>

        </div>
    </div>
</div>
<?php
require_once __DIR__ . "/components/footer.php"; # Footer
?>