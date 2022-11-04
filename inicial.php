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

<p><a href=""><?php echo $titulo;?></a></p>
<?php if($descricao != null){?><p><?php echo $descricao;?></p><?php } ?>
<?php if($imagem != null){?><p><img src="<?php echo $imagem;?>"></p><?php }?>
<p>Postado por: <?php echo $postador;?></p>

<?php }} ?>