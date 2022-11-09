<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="cadastrar.css">
    <!-- Link Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!--Fav Icon-->
    <link rel="shortcut icon" href="img/fav-icon.png" type="image/x-icon">
    <!-- Box Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Nav -->
        <div class="nav container">
            <!-- Logo -->
            <a href="index.html" class="logo">
                <img src="img/aprensi_logo.png" alt="" id="aprensi-logo">
            </a>
            <nav>
                <ul class="nav-list">
                    <li> <a href="ENTRAR.html">Entrar</a></li>
                    <li> <a href="cadastrar.html">Cadastrar</a></li>
                </ul>
            </nav>
    </header>
    
    <form class="formulario" method="post">
        <div class="container-login">
                <p id="infos">
                    E-mail
                </p>
                <input type="email" name="email">

                <p id="infos">
                    Senha
                </p>
                <input type="password" name="senha">

                <p id="infos">
                    Confirme sua senha
                </p>
                <input type="password" name="confirmasenha">

                <p id="infos">
                    Nome (Nickname)
                </p>
                <input type="text" name="nickname">

                <p id="infos">
                    Data de nasc.
                </p>
                <input type="date">

                <a class="btn-cadastrar" href="ENTRAR.html">Cadastrar</a> 
        </div>
    </form>
</body>
</html>
