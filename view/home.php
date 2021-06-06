<?php
require_once __DIR__ . "/components/header.php"; # Header
require_once __DIR__ . "/components/states.php"; # States
?>
<div class="row mx-auto d-flex justify-content-around mt-4">
    <div class="col-lg-6 col-12 col-sm-6 col-xl-4">

        <h3 class="text-white text-center">Cadastro</h3>

        <!-- Form search -->
        <form action="<?= url() ?>" method="post">

            <?php
            # Response
            include_once __DIR__ . "/components/alerts.php";
            ?>
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
        <form action="<?= url("save") ?>" method="post">
            <input type="text" name="cepRegister" id="cepRegister" <?= isset($address) && !empty($address->getCep()) ? "value ='{$address->getCep()}'" : null ?> hidden>

            <label for="name" class="text-white h5 mt-2">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Informe aqui seu nome" required>
            <div class="row mt-3">
                <div class="col-lg-9 col-xl-9 col-sm-8 col-12">
                    <label for="public-place" class="text-white h5">Logradouro:</label>
                    <input type="text" name="public-place" id="public-place" class="form-control" placeholder="Informe o nome de sua Rua, avenida etc" <?php echo (isset($address) && !empty($address->getPublicPlace()) ?  "value ='{$address->getPublicPlace()}' readonly" : null) ?> required>

                </div>
                <div class="col-lg-3 col-xl-3 col-sm-4 col-12">
                    <label for="numb" class="text-white h5">Número</label>
                    <input type="text" name="numb" id="numb" class="form-control" placeholder="Nº" required>
                </div>
            </div>

            <label for="district" class="text-white h5 mt-2">Bairro:</label>
            <input type="text" name="district" id="district" class="form-control" placeholder="Informe aqui seu bairro" <?= isset($address) && !empty($address->getDistrict()) ? "value ='{$address->getDistrict()}' readonly" : null ?> required>

            <label for="city" class="text-white h5 mt-2">Cidade:</label>
            <input type="tel" name="city" id="city" class="form-control" placeholder="Informe aqui sua cidade" <?= isset($address) && !empty($address->getCity()) ? "value ='{$address->getCity()}' readonly" : null ?> required>

            <label for="state" class="text-white h5 mt-2">Estado:</label>

            <?php if (isset($address) && !empty($address->getState())) : ?>
                <select class="form-control" name="state" id="state" required readonly>
                    <option value="<?= $address->getState() ?>" selected='true'><?= $address->getState() ?></option>

                <?php else : ?>
                    <select class="form-control" name="state" id="state" required>
                        <option value="" disabled selected='true'>Selecione...</option>
                        <?php foreach ($states as $key => $value) : ?>
                            <option value="<?= $key ?>"><?= $value ?></option>
                        <?php endforeach ?>

                    <?php endif; ?>
                    </select>
                    <label for="complement" class="text-white h5 mt-2">complemento:</label>
                    <input type="text" name="complement" id="complement" class="form-control" placeholder="Complemento ex: casa 2">

                    <div class="d-flex justify-content-center my-4">
                        <button type="submit" name="action" value="register" id="action" class="btn btn-lg btn-warning">Cadastrar</button>
                    </div>

        </form>

    </div>
</div>

<?php
require_once __DIR__ . "/components/footer.php"; # Footer
?>