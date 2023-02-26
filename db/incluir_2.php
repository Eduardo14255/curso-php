<div class="titilo">Incluir Registro #2</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php
if (count($_POST) > 0) {
    $dados = $_POST;
    $erros = [];

    if (trim($dados["nome"]) === "") {
        $erros['nome'] = 'Nome é obrigatorio!!';
    }

    if (isset($dados["nascimento"])) {
        $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
        if (!$data) {
            $erros['nascimento'] =  'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] =  'Email inválido';
    }

    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }
    $filhosConfig = ["options" => ["min_range" => 0, "max_range" => 20]];

    if (!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0) {
        $erros['filhos'] =  'Quatidade de filhos inválida';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] =  'Salario invalido';
    }

    if (!count($erros)) {
        require_once "conexao.php";

        $sql = "INSERT INTO cadastro
        (nome, nascimento, email, site, filhos, salario)
        VALUES (?, ?, ?, ?, ?, ?)";

        $conexao = novaConexao();
        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $data ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'],
        ];
        

        $stmt->bind_param("ssssid", ...$params);

        if ($stmt->execute()) {
            unset($dados);
        }
    }
}
?>


<form action="#" method="post">


    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" value="<?= $dados['nome'] ?>">
            <div class="invalid-feedback"><?= $erros['nome'] ?></div>
        </div>

        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" name="nascimento" id="nascimento" placeholder="Nascimento" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" value="<?= $dados['nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label><br>
            <input type="text" name="email" id="email" placeholder="E-mail" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" value="<?= $dados['email'] ?>" value="<?= $dados['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>

        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $dados['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site'] ?>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input type="number" name="filhos" id="filhos" placeholder="Quantidade de filhos" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" value="<?= $dados['filhos'] ?>">
            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>

        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" name="salario" id="salario" placeholder="Salário" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" value="<?= $dados['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>

    <button class="btn btn-primary btn-lg">Enviar</button>
</form>