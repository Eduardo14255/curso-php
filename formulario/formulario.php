<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulario</div>

<h2>Cadastro</h2>

<?php
if (count($_POST) > 0) {
    $erros = [];

    //if(isset($_POST['nome']))
    if (!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = 'Nome é obrigatorio!!';
    }

    if (filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if (!$data) {
            $erros['nascimento'] =  'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] =  'Email inválido';
    }

    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] =  'Site inválido';
    }
    $filhosConfig = ["options" => ["min_range" => 0, "max_range" => 20]];

    if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0) {
        $erros['filhos'] =  'Quatidade de filhos inválida';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] =  'Salario deve ser descrito com , ';
    }
}
?>

<?php foreach ($erros as $erro) : ?>
    <!--<div class="alert alert-danger" role="alert"> -->
    <?= "" //$erro 
    ?>
    <!--</div>-->
<?php endforeach ?>

<form action="#" method="post">


    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback"><?= $erros['nome'] ?></div>
        </div>

        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="date" name="nascimento" id="nascimento" placeholder="Nascimento" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label><br>
            <input type="email" name="email" id="email" placeholder="E-mail" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" value="<?= $_POST['email'] ?>" value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>

        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" name="site" id="site" placeholder="Site" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" value="<?= $_POST['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site'] ?></div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input type="number" name="filhos" id="filhos" placeholder="Quantidade de filhos" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" value="<?= $_POST['filhos'] ?>">
            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>

        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" name="salario" id="salario" placeholder="Salário" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" value="<?= $_POST['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>

    <button class="btn btn-primary btn-lg">Enviar</button>
</form>