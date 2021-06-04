<?php
//Header
require_once __DIR__ . "/components/header.php";
?>
<div class="row mx-auto d-flex justify-content-around mt-4">
    <div class="col-lg-6 col-12 col-sm-6 col-xl-4">

        <h3 class="text-white text-center">Cadastro</h3>

        <!-- Form search -->
        <form action="<?= url() ?>" method="post">
        <?php
        if (isset($_GET['route']) && $_GET['route'] == '/ceperror') : ?>
            <div class="row mt-3">
                <div class=" col-12">
                    <div class="card form-control bg-danger">
                        <h5 class="text-white text-center">CEP inválido</h5>
                    </div>

                </div>
            </div>
        <?php endif; ?>
            <div class="row mt-5">
                <div class="col-lg-9 col-xl-9 col-sm-8 col-12">
                    <input type="text" class="form-control mx-auto" placeholder="Digite seu Cep" name="cep" id="cep" />
                </div>

                <div class="col-lg-3 col-xl-3 col-sm-4 col-12">

                    <button type="submit" class="form-control btn btn-light pr-4" name="search" value="cep"><i class="bi bi-search"></i></button>
                </div>


            </div>
        </form>

        <!-- Form register -->
        <form action="" method="post">
            <label for="name" class="text-white h5 mt-2">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Informe aqui seu nome">
            <div class="row mt-3">
                <div class="col-lg-9 col-xl-9 col-sm-8 col-12">
                    <label for="public-place" class="text-white h5">Logradouro:</label>
                    <input type="text" name="public-place" id="public-place" class="form-control" placeholder="Informe o nome de sua Rua, avenida etc" <?php echo (isset($address) && !empty($address) ?  "value ='{$address->getPublicPlace()}' readonly" : null) ?> required>

                </div>
                <div class="col-lg-3 col-xl-3 col-sm-4 col-12">
                    <label for="numb" class="text-white h5">Nº</label>
                    <input type="text" name="numb" id="numb" class="form-control" placeholder="Número">
                </div>
            </div>

            <label for="district" class="text-white h5 mt-2">Bairro:</label>
            <input type="text" name="district" id="district" class="form-control" placeholder="Informe aqui seu bairro" <?= isset($address) && !empty($address) ? "value ='{$address->getDistrict()}' readonly" : null ?> required>

            <label for="city" class="text-white h5 mt-2">Cidade:</label>
            <input type="tel" name="city" id="city" class="form-control" placeholder="Informe aqui sua cidade" <?= isset($address) && !empty($address) ? "value ='{$address->getCity()}' readonly" : null ?> required>

            <label for="state" class="text-white h5 mt-2">Estado:</label>
            <input type="text" name="state" id="state" class="form-control" placeholder="Digite seu estado" <?= isset($address) && !empty($address) ? "value ='{$address->getState()}' readonly" : null ?> required>

            <label for="complement" class="text-white h5 mt-2">complemento:</label>
            <input type="text" name="complement" id="complement" class="form-control" placeholder="Complemento ex: casa 2">

            <div class="d-flex justify-content-center my-4">
                <button type="submit" name="acao" value="register" id="acao" class="btn btn-lg btn-warning">Cadastrar</button>
            </div>

        </form>

    </div>
</div>

<?php
//Footer
require_once __DIR__ . "/components/footer.php";
?>