<?php
//Header
require_once __DIR__ . "/components/header.php";
?>
<div class="row mx-auto d-flex justify-content-around mt-4">
    <div class="col-lg-6 col-12 col-sm-6 col-xl-4">

        <h3 class="text-white text-center">Cadastro</h3>

        <form action="" method="post">
            <div class="row mt-5">
                <div class="col-lg-9 col-xl-9 col-sm-8 col-12">
                    <input type="text" class="form-control mx-auto" placeholder="Digite seu Cep" name="find" id="find" onkeyup="cepmask()" />
                </div>

                <div class="col-lg-3 col-xl-3 col-sm-4 col-12">
                
                    <button type="submit" class="form-control btn btn-light pr-4" name="busca-caderno" value="search"><i class="bi bi-search"></i></button>
                </div>


            </div>
        </form>

        <form action="" method="post">


            <label for="nome" class="text-white h5">Cep:</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe seu nome completo" required>

            <label for="email" class="text-white h5 mt-2">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Informe aqui seu e-mail" required>

            <label for="telefone" class="text-white h5 mt-2">Telefone:</label>
            <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="Informe seu telefone" maxlength="13" required>


            <label for="senha" class="text-white h5 mt-2">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" maxlength="255" required>

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