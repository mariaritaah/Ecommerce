<?php
require_once '../auth.php';
require_once '../Models/itens.class.php';

if(isset($_POST['upload']) == 'Cadastrar'){

    $QuantItens = $_POST['QuantItens'];
    $ValCompItens = $_POST['ValCompItens'];
    $ValVendItens = $_POST['ValVendItens'];
    $DataCompraItens = $_POST['DataCompraItens'];
    $DataVenci_Itens = $_POST['DataVenci_Itens'];
    $Produto_CodRefProdutos = $_POST['codProduto'];
    $Fabricante_idFabricante = $_POST['idFabricante'];
    $idUser = $_POST['idUser'];/////////////


    if($idUser == $idUsuario && $QuantItens != null){
        if(isset($_POST['idItens'])){
            
            $idItens = $_POST['idItens'];
            $itens->updateItens($idItens, $QuantItens, $ValCompItens, $ValVendItens, $DataCompraItens, $DataVenci_Itens, $Produto_CodRefProduto, $Fabricante_idFabricante, $idUsuario);
        }else{
            $itens->insertItens($QuantItens, $ValCompItens, $ValVendItens, $DataCompraItens, $DataVenci_Itens, $Produto_CodRefProduto, $Fabricante_idFabricante, $idUsuario);
        }
    }else{
        header('Location: ../../views/itens/index.php?alert=3');
    }
}else{
    header('Location: ../../views/itens/index.php');
}


?>