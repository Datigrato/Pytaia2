<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">  
</head>

<body>

<header class="top-header">
    <h1>Pytaia</h1>
    <p>A rede social acadêmica para estudantes, professores e pesquisadores.</p>
</header>

<aside class="sidebar">
    <div>
     
      <nav class="menu">
        <a href="#" class="active">Entrar</a>
        <a href="/cadastro">Criar conta</a>
        <a href="/quemsomos">Quem somos</a>
        <a href="/contato">Contatos</a>
      </nav>
    </div>

    <div class="sidebar-footer">
      Compartilhe artigos, participe de grupos de estudo e conecte-se com a comunidade acadêmica.
    </div>
  </aside>

  <main class="main-content">
    <section class="login-card">
      <h2>Bem-vindo de volta</h2>
      <p class="subtitle">Entre na sua conta para acessar a Pytaia.</p>

      <form action="#" method="POST">
        <div class="input-group">
          <label for="email">E-mail acadêmico</label>
          <input type="email" id="email" name="email" placeholder="exemplo@faculdade.edu.br" required />
        </div>

        <div class="input-group">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required />
        </div>

        <div class="options">
          <label>
            <input type="checkbox" name="lembrar" />
            Lembrar-me
          </label>

          <a href="#">Esqueci a senha</a>
        </div>

        <button type="submit" class="btn-login">Entrar</button>
      </form>

      <div class="create-account-mobile">
        Ainda não tem conta? <a href="/cadastro">Criar conta</a>
      </div>
    </section>
  </main>
</body>
</html>