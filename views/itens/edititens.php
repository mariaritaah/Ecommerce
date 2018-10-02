<?php
require_once '../../App/auth.php';
require_once '../../layout/script.php';
require_once '../../App/Models/produtos.class.php';
require_once '../../App/Models/fabricante.class.php';
require_once '../../App/Models/itens.class.php';

if(isset($_GET['q'])){

$resp = $itens->editItens($_GET['q']);


echo $head;
echo $header;
echo $aside;
echo '<div class="content-wrapper">';

echo '<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Adicionar <small>Produtos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Itens</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">';


echo ' 
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Produto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="../../App/Database/insertitens.php" method="POST">
              <div class="box-body">
              	<div class="form-group">
                  <label for="exampleInputEmail1">Nome do Produto</label>

            <select class="form-control" name="codProduto">
            ';
            $produtos->listProdutos($resp['Itens']['CodRefProduto']);
            echo '</select>
            </div>

            <div class="form-group">
                  <label for="exampleInputEmail1">Fabricante</label>

            <select class="form-control" name="idFabricante">
            ';
            $fabricante->listfabricante($resp['Itens']['idFabricante']);
            echo '</select>
            </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Quantidade</label>
                  <input type="text" name="QuantItens" class="form-control" id="exampleInputEmail1" placeholder="Quantidade" value="'.$resp['Itens']['QuantItens'].'">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Valor da Compra</label>
                  <input type="text" name="ValCompItens" class="form-control" id="exampleInputEmail1" placeholder="Valor da Compra" value="'.$resp['Itens']['ValCompItens'].'">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Valor da Venda</label>
                  <input type="text" name="ValVendItens" class="form-control" id="exampleInputEmail1" placeholder="Valor da Venda" value="'.$resp['Itens']['ValVendItens'].'">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Data da Compra</label>
                  <input type="text" name="DataCompraItens" class="form-control" id="exampleInputEmail1" placeholder="Data da Compra" value="'.$resp['Itens']['DataCompraItens'].'">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Data de Vencimento</label>
                  <input type="text" name="DataVenci_Itens" class="form-control" id="exampleInputEmail1" placeholder="Data de Vencimento" value="'.$resp['Itens']['DataVenci_Itens'].'">
                </div>

                 <input type="hidden" name="iduser" value="'.$idUsuario.'">
                 <input type="hidden" name="idItens" value="'.$resp['Itens']['idItens'].'">


              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="upload" class="btn btn-primary" value="Cadastrar">Cadastrar</button>
                <a class="btn btn-danger" href="../../views/prod">Cancelar</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
          </div>
</div>';

echo '</div>';
echo '</div>';
echo '</section>';
echo '</div>';
echo  $footer;
echo $javascript;
}else{
	header('Location: ./');
}
?>