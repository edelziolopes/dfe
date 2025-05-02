<?php
$erro = $_GET['erro'] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-white p-4 rounded shadow" style="max-width: 400px; width: 100%;">
      <h4 class="text-center mb-4">Login</h4>

      <?php if ($erro == 1): ?>
        <div class="alert alert-danger text-center">
          E-mail ou senha inválidos.
        </div>
      <?php endif; ?>

      <form method="POST" action="adm_login.php">
        <div class="mb-3">
          <label for="txt_email" class="form-label">E-mail</label>
          <input type="text" name="txt_email" class="form-control" id="txt_email" required>
        </div>
        <div class="mb-3">
          <label for="txt_senha" class="form-label">Senha</label>
          <input type="password" name="txt_senha"  class="form-control" id="txt_senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
    </div>
  </div>
</body>
</html>
