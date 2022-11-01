<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulario</div>

<h2>Cadastro</h2>

<?php
if (count($_POST) > 0) {
    //if(isset($_POST['nome']))
    if (!filter_input(INPUT_POST, "nome")) {
        echo 'Nome é obrigatorio"",<br>';
    }
}
?>
<form action="#" method="POST">

    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control" value="<?= $_POST['nome'] ?>">
        </div>

        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="date" name="nascimento" id="nascimento" placeholder="Nascimento" class="form-control" value="<?= $_POST['nascimento'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="E-mail" class="form-control" value="<?= $_POST['email'] ?>">
        </div>

        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" name="site" id="site" placeholder="Site" class="form-control" value="<?= $_POST['site'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input type="text" name="filhos" id="filhos" placeholder="Quantidade de filhos" class="form-control" value="<?= $_POST['filhos'] ?>">
        </div>

        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" name="salario" id="salario" placeholder="Salário" class="form-control" value="<?= $_POST['filhos'] ?>">

        </div>
    </div>

    <button class="btn btn-primary btn-lg">Enviar</button>
</form>