<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprensi</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Link Swiper CSS -->
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <!--Fav Icon-->
    <link rel="shortcut icon" href="img/fav-icon.png" type="image/x-icon">
    <!-- Box Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
    include("settings/settings.php");

    $seleciona = mysqli_query($mysqli, "SELECT * FROM posts ORDER BY id_post DESC");
    $conta = mysqli_num_rows($seleciona);

    if($conta <= 0){
        echo "Nenhuma postagem cadastrada";
    }else{
        while($row = mysqli_fetch_array($seleciona)){
            $id_post = $row['id_post'];
            $titulo = $row['titulo'];
            $descricao = $row['descricao'];
            $imagem = $row['imagem'];
            $postador = $row['postador'];
            $sql = "SELECT * FROM usuarios WHERE nickname = '$postador'";
            $query = mysqli_query($mysqli, $sql);
            $linha = mysqli_fetch_assoc($query);
    ?>
    <?php }} ?>
    <!-- Header -->
    <header>
        <!-- Nav -->
        <div class="nav container">
            <!-- Logo -->
            <a href="index.html" class="logo">
                <img src="img/aprensi_logo.png" alt="" id="aprensi-logo">
            </a>
            <!-- Searc Box -->
            <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="Pesquisar">
                <i class='bx bx-search'></i>
            </div>
            <a href="perfil.html" class="user">
                <i class='bx bx-user'></i>
                <h1>MEU PERFIL</h1>
            </a>
        </div>
    </header>
    <!-- Home -->
    <section class="home container" id="home">
        <!-- Home Image -->
        <img src="img/img.geografia.jpg" alt="" class="home-img">
        <!-- Home Text -->
        <div class="home-text">
            <h1 class="home-title">Guerra Fria <br>História</h1>
            <p>1947-1991</p>
            <a href="#" class="watch-btn">
                <i class='bx bx-right-arrow'></i>
                <span>Assista ao vídeo</span>
            </a>
        </div>
    </section>
    <!-- Home End -->
    <!-- Popular Section Start -->
    <a href="#" class="poste" onclick="showModal()">
        <i class='bx bx-plus'></i> 
    </a>
    <div class="modal" id="modal">
        <div class="modal-content">
            <span id="poste" onclick="hideModal()">&times;</span>
            <form class="centerForm" action="" method="post" enctype="multipart/form-data">
                <?php

                if(isset($_POST['enviar']) && $_POST['enviar'] == "send"){
                    $titulo = $_POST['input_titulo'];
                    $descricao = $_POST['descricao'];

                    $uploaddir = "imagens/uploads/";
                    $uploadfiles = $uploaddir.basename($_FILES['input_file']['name']);
                    $imagename = $uploaddir.basename($_FILES['input_file']['name']);
                    if(move_uploaded_file($_FILES['input_file']['tmp_name'], $uploadfiles)){
                            echo 'Imagem enviada com sucesso';
                            $query = "INSERT INTO posts (titulo, descricao, imagem)
                            VALUES ('$titulo', '$descricao', '$imagename')";

                            if(mysqli_query($mysqli, $query)){
                                echo 'Publicação feita com sucesso!';
                            }
                    }else{
                            echo "Falha ao enviar o arquivo";
                    }
                }
                ?>
                <h1 id="upload">Upload <i class='bx bx-cloud-upload'></i></h1>
                <input type="file" name="input_file" placeholder="Selecione um arquivo..." id="btn-selecionar">
                <input type="text" name="input_titulo" id="input_titulo" placeholder="Título do vídeo">
                <input type="text" name="descricao" id="descricao" placeholder="Descrição">
                <input type="hidden" name="" value="send">
                <button type="hidden" name="enviar" id="btn-enviar" value="send" onclick="showPost()">
                    <i class='bx bx-paper-plane'></i>Enviar arquivo
                </button>
            </form>
        </div>
    </div>
    <section class="popular container" id="popular">
        <!-- Heading -->
        <div class="heading">
            <h2 class="heading-title">Vídeos Populares</h2>
            <!-- Swiper Buttons -->
            <div class="swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <!-- Content -->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">
                <!-- Movies Box 1 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <?php if($imagem != null){?><img src="<?php echo $imagename;?>" <?php }?> alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title"><?php echo $titulo;?></h2>
                            <span class="movie-type"><?php echo $descricao;?></span>
                            <a href="#" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </section>
    <!-- Popular Section End -->
    <script>
        function showPost() {
            var post = document.addElementsByClassName("swiper-slide");
            element.classList.add("show-post")
        }


        function showModal() {
            var element = document.getElementById("modal");
            element.classList.add("show-modal")
        }

        function hideModal() {
            var element = document.getElementById("modal");
            element.classList.remove("show-modal")
        }
    </script>
    <!-- Link Swiper JS-->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Link To JS -->
    <script src="js/main.js"></script>
</body>
</html>
