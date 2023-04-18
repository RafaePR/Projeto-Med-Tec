<?php
  if ($_POST) {
    include('connection/Connection.php');
    include('connection/UserDAO.php');

    $userDAO = new UserDAO();

    $username = addslashes($_POST['usuario']);
    $password = addslashes(md5($_POST['senha']));

    $user = $userDAO->login($username, $password);

    if($user == true) {
      session_start();
      $_SESSION['usuario'] = $username;
      $_SESSION['senha'] = $password;
      header('location: site.php');
    }
    else {
      header('location: login.php?erro=senha');
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" type="image/png" href="assets/medtec-logo.png">
    <title>Entrar - Med-Tec Sistemas</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="assets/medtec-logo.png" alt="Logo da Med-Tec">
        </div>
        <form action="#" method="post">
            <div class="username">
                <label for="username">Usuário</label>
                <input type="text" class="form-control" name="usuario" id="username">
            </div>
            <div class="password">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="senha" id="password">
            </div>
            <div class="button">
                <input type="submit" value="Entrar" class="btn btn-block btn-primary">
            </div>
        </form>
        <div class="back">
            <a href="index.php">< Voltar</a>
        </div>
    </div>
</body>
<?php
  if(isset($_GET['erro'])) {
    echo "<script>alert('Usuário ou senha incorretos.');</script>";
  }
?>
</html>