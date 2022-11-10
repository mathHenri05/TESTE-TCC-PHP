<?php
echo 'Now: '.str_replace('.','', strval(microtime(true))).'<br />';
$e = 'img.historia.jpg';
echo substr($e, strrpos($e, '.')).'<br />';
$novo_nome = str_replace('.','', strval(microtime(true))).substr($e, strrpos($e, '.'));
echo $novo_nome;
?>