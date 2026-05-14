<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Pytaia</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="cadastrobody">

<header class="top-header">
    <h1>Pytaia</h1>
    <p>A rede social acadêmica para estudantes, professores e pesquisadores.</p>
</header>

<main class="main-content">

    <section class="login-card">

        <h2>Criar Conta</h2>

        <p class="subtitle">
            Cadastre-se na comunidade acadêmica Pytaia.
        </p>

        <form action="#" method="POST" class="cadastro-form">

<div class="form-grid">
    <div class="input-group full">
        <label for="nome">Nome Completo</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
    </div>

    <div class="input-group">
        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>
    </div>

    <div class="input-group">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
    </div>

    <div class="input-group full">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="exemplo@email.com" required>

        <small id="erro-email" class="hidden">
            E-mail inválido
        </small>
    </div>
</div>

<h3 class="form-section-title">Formações Acadêmicas</h3>

<div class="formacoes-grid">

    <div class="formation-card">
        <label>Formação 1</label>
        <select name="formacoes[1][nivel]">
            <option value="">Selecione o nível</option>
            <option value="graduado">Graduado</option>
            <option value="pos_graduado">Pós-Graduado</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
            <option value="pos_doutorado">Pós-Doutorado</option>
        </select>
        <input type="text" name="formacoes[1][instituicao]" placeholder="Instituição de ensino">
    </div>

    <div class="formation-card">
        <label>Formação 2</label>
        <select name="formacoes[2][nivel]">
            <option value="">Selecione o nível</option>
            <option value="graduado">Graduado</option>
            <option value="pos_graduado">Pós-Graduado</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
            <option value="pos_doutorado">Pós-Doutorado</option>
        </select>
        <input type="text" name="formacoes[2][instituicao]" placeholder="Instituição de ensino">
    </div>

    <div class="formation-card">
        <label>Formação 3</label>
        <select name="formacoes[3][nivel]">
            <option value="">Selecione o nível</option>
            <option value="graduado">Graduado</option>
            <option value="pos_graduado">Pós-Graduado</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
            <option value="pos_doutorado">Pós-Doutorado</option>
        </select>
        <input type="text" name="formacoes[3][instituicao]" placeholder="Instituição de ensino">
    </div>

    <div class="formation-card">
        <label>Formação 4</label>
        <select name="formacoes[4][nivel]">
            <option value="">Selecione o nível</option>
            <option value="graduado">Graduado</option>
            <option value="pos_graduado">Pós-Graduado</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
            <option value="pos_doutorado">Pós-Doutorado</option>
        </select>
        <input type="text" name="formacoes[4][instituicao]" placeholder="Instituição de ensino">
    </div>

    <div class="formation-card">
        <label>Formação 5</label>
        <select name="formacoes[5][nivel]">
            <option value="">Selecione o nível</option>
            <option value="graduado">Graduado</option>
            <option value="pos_graduado">Pós-Graduado</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
            <option value="pos_doutorado">Pós-Doutorado</option>
        </select>
        <input type="text" name="formacoes[5][instituicao]" placeholder="Instituição de ensino">
    </div>

</div>

<div class="btn-area">
    <button type="submit" class="btn-login">
        Criar Conta
    </button>
</div>

</form>

    </section>

</main>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>