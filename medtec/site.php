<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/site.css">
    <link rel="shortcut icon" type="image/png" href="assets/medtec-logo.png">
    <title>Med-Tec Sistemas</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/medtec-logo.png" alt="Logo da Med-Tec">
        </div>
        <div class="user">
            <h1>Olá <?php echo $_SESSION['usuario']; ?>.</h1>
            <a href="logout.php">Sair</a>
        </div>
    </header>
    <section>

    </section>
</body>
</html>