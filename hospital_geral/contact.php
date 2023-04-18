<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/icon.png">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contato - Hospital Geral</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/logo.png" alt="Logo do Hospital Geral">
        </div>
        <div class="menu">
            <a href="index.php">Página Principal</a>
            <a href="contact.php">Contato</a>
            <a href="login.php">Entrar</a>
        </div>
    </header>
    <section>
    <div class="content">
                <div class="title">
                    <h1>Agende uma consulta com nós</h1>
                </div>
                <div class="appot">
                    <form action="#" method="post">
                        <div class="name">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" name="nome" id="name">
                        </div>
                        <div class="surname">
                            <label for="surname">Sobrenome</label>
                            <input type="text" class="form-control" name="sobrenome" id="surname">
                        </div>
                        <div class="email">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="sobrenome" id="surname">
                        </div>
                        <div class="textM">
                            <label for="text">Motivo da consulta</label>
                            <textarea id="text" name="texto" rows="5" maxlength="500" placeholder="Nos descreva a sua situação"></textarea>
                        </div>
                        <div class="button">
                                <input type="submit" value="Agendar Consulta" class="btn btn-block btn-primary">
                            </div>
                    </form>
                </div>
            </div>
    </section>
</body>
</html>