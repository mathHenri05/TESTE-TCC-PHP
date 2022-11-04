<form action="" method="post" enctype="multipart/form-data">
    <p><input type="text" name="titulo" id="titulo" placeholder="Insira um titulo" class="form form-control" ></p>
    <p><textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Diga algo sobre essa publicação" class="form form-control"></textarea></p>
    <p><input type="file" name="image" id="image" class="form form-control"></p>
    <p><input type="submit" value="Publicar" class="btn btn-default"></p>
    <input type="hidden" name="enviar" value="send">
</form>



<?php

include_once("settings/settings.php");

if(isset($_POST['enviar']) && $_POST['enviar'] == "send"){
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $uploaddir = "imagens/uploads/";
        $uploadfile = $uploaddir.basename($_FILES["image"]['name']);
        $imagename = $uploaddir.basename($_FILES['image']['name']);

        if(move_uploaded_file($_FILES["image"]['tmp_name'], $uploadfile)){
            echo "Imagem enviada com sucesso";
            $query = "INSERT INTO posts (titulo, descricao, imagem)
            VALUES ('$titulo', '$descricao', '$imagename')";

            if(mysqli_query($mysqli, $query)){
                echo "Publicação feita com sucesso!";
            }
        }
        else{
            echo "Falha ao enviar o arquivo"; 
        }
    }
?>