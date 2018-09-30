<?php
require_once '../App/auth.php';
require_once '../layout/script.php';

echo $head;
echo $header;
echo $aside;
echo '<div class="content-wrapper">';
echo '<b>Seja bem vindo '.$usuario.'</br>Você têm permissões de: </b>';
    if($perm == 1){
        echo '<b><i> Administrador </b></i>', $perm;
    }else{
        echo '<b><i> Usuário </b></i>', $perm;
    }

echo '</div>';

echo  $footer;
echo $javascript;
?>