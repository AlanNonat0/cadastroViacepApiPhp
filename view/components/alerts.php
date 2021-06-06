<?php
if (isset($_GET['route'])) :
?>
    <div class="row mt-3">
        <div class=" col-12">
            <?php
            switch ($_GET['route']):
                case '/ceperror': ?>
                    <div class="card form-control bg-danger">
                        <h5 class="text-white text-center">CEP inválido</h5>
                    </div>
                <?php break;

                case '/emptyfield': ?>
                    <div class="card form-control bg-danger">
                        <h5 class="text-white text-center">Campo em branco</h5>
                    </div>
                <?php break;
                case '/connecterror': ?>
                    <div class="card form-control bg-danger">
                        <h5 class="text-white text-center">Conexão não estabelecida tente novamente mais tarde</h5>
                    </div>
                <?php break;
                case '/success': ?>
                    <div class="card form-control bg-success">
                        <h5 class="text-white text-center">Dados registrados com sucesso!</h5>
                    </div>
            <?php break;

            endswitch;
            ?>
        </div>
    </div>
<?php endif; ?>