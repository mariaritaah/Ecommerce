<?php

$url = 'http://localhost/ecommerce/views/';

$head = '<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Painel de Controle</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <script type="text/javascript">
    $(document).ready(function(){
    $("input[name=\'status[]\']").click(function(){
      var $this = $( this );//guardando o ponteiro em uma variavel, por performance


      var status = $this.attr(\'checked\') ? 1 : 0;
      var id = $this.next(\'input\').val();


      $.ajax({
        url: \'action.php\',
        type: \'GET\',
        data: \'status=\'+status+\'&id=\'+id,
        success: function( data ){
          alert( data );
        }
      });
    });
  }); 
  </script>
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">';

$header = '<header class="main-header">
<!-- Logo -->
<a href="index2.html" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>A</b>LT</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>Admin</b>LTE</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown messages-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-envelope-o"></i>
          <span class="label label-success">4</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">Você tem 4 mensagens</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li><!-- start message -->
                <a href="#">
                  <div class="pull-left">
                    <img src="dist/img/wlad.jpg" class="img-circle" alt="User Image">
                  </div>
                  <h4>
                    Suporte
                    <small><i class="fa fa-clock-o"></i> Há 5 minutos</small>
                  </h4>
                  <p>Temos itens em promoção!</p>
                </a>
              </li>
              <!-- end message -->
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="dist/img/user8-128x128.jpg" class="img-circle" alt="User Image">
                  </div>
                  <h4>
                    Compras
                    <small><i class="fa fa-clock-o"></i> Em 2 Horas</small>
                  </h4>
                  <p>Porquê você não faz uma nova compra?</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                  </div>
                  <h4>
                    Marketing
                    <small><i class="fa fa-clock-o"></i> Hoje</small>
                  </h4>
                  <p>Itens que você vializou está com descontos imperdíveis!</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                  </div>
                  <h4>
                    Developers
                    <small><i class="fa fa-clock-o"></i> Ontem</small>
                  </h4>
                  <p>Nos fale sobre mais sobre as possíveis modificações que você deseja!</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="pull-left">
                    <img src="dist/img/user5-128x128.jpg" class="img-circle" alt="User Image">
                  </div>
                  <h4>
                    Transporte
                    <small><i class="fa fa-clock-o"></i> Há 2 Dias</small>
                  </h4>
                  <p>Produto à caminho</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="footer"><a href="#">Ver todas mensagens</a></li>
        </ul>
      </li>
      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">10</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">Você têm 10 notificações</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li>
                <a href="#">
                  <i class="fa fa-users text-aqua"></i> Temos 5 novos membros hoje!
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                  page and may cause design problems
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-users text-red"></i> Temos 5 novos membros hoje!
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-shopping-cart text-green"></i> Foram feitas 25 vendas!
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-user text-red"></i> Você mudou seu nome com sucesso!
                </a>
              </li>
            </ul>
          </li>
          <li class="footer"><a href="#">Ver Tudo</a></li>
        </ul>
      </li>
      <!-- Tasks: style can be found in dropdown.less -->
      <li class="dropdown tasks-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-flag-o"></i>
          <span class="label label-danger">9</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">Você têm 09 tarefas</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Crie alguns botões
                    <small class="pull-right">20%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">20% Completo</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Atualize o tema
                    <small class="pull-right">40%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Algumas tarefas você precisa fazer
                    <small class="pull-right">60%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">60% Completo</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Faça belas transições
                    <small class="pull-right">80%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">80% Completo</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
            </ul>
          </li>
          <li class="footer">
            <a href="#">Ver todas tarefas</a>
          </li>
        </ul>
      </li>
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="dist/img/wlad.jpg" class="user-image" alt="User Image">
          <span class="hidden-xs">'.$usuario.'</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="dist/img/wlad.jpg" class="img-circle" alt="User Image">

            <p>
              '.$usuario.' - Web Developer
              <small>Membro desde Set. 2018</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-xs-4 text-center">
                <a href="#">Seguidores</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Vendas</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Amigos</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Perfil</a>
            </div>
            <div class="pull-right">
              <a href="destroy.php" class="btn btn-default btn-flat">Sair</a>
            </div>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li>
    </ul>
  </div>
</nav>
</header>';

$aside = '<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="'.$url.''.$foto.'" class="img-circle" style="height:50px; width:50px;" alt="User Image">
         
        </div>
        <div class="pull-left info">
          <p>'.$usuario.'</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="'.$url.'">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Produtos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="'.$url.'prod/"><i class="fa fa-circle-o"></i>Produtos</a></li>
            <li><a href="'.$url.'prod/addprod.php"><i class="fa fa-circle-o"></i>Add Produtos</a></li>
            <li><a href="'.$url.'itens/"><i class="fa fa-circle-o"></i>Itens</a></li>
             <li><a href="'.$url.'itens/totalitens.php"><i class="fa fa-circle-o"></i>Total Itens</a></li>
            <li><a href="'.$url.'itens/additens.php"><i class="fa fa-circle-o"></i>Add Itens</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Fabricante</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="'.$url.'fabricante/"><i class="fa fa-circle-o"></i>Fabricantes</a></li>
            <li><a href="'.$url.'fabricante/addfabricante.php"><i class="fa fa-circle-o"></i>Add Fabricante</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Representante</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="'.$url.'representante/"><i class="fa fa-circle-o"></i>Representantes</a></li>
            <li><a href="'.$url.'representante/addRepresentante.php"><i class="fa fa-circle-o"></i>Add Representante</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Usuários</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="'.$url.'usuarios/"><i class="fa fa-circle-o"></i>Lista</a></li>
            <li><a href="'.$url.'usuarios/addusuarios.php"><i class="fa fa-circle-o"></i>Add Usuários</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Vendas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="'.$url.'vendas/"><i class="fa fa-circle-o"></i>Vendas</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Elementos de Interface</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Geral</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Ícones</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Botões</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Deslizar</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Linha do Tempo</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modelos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Elementos Gerais</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Elementos Avançados</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editores</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tabelas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Tabelas simples</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Tabelas de dados</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendário</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Caixa de E-mail</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Exemplos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Fatura</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Perfil</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Logar</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Registrar</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Bloqueio de tela</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> Erro 404</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> Erro 500</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Página em Branco</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level Um</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level Um
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Dois</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Dois
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Três</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Três</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentação</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Importante</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Atenção</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Informação</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>';

  $footer = '<footer class="main-footer">
  <div class="pull-right hidden-xs">
  <b>Version</b> 2.4.0
</div>
<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Create the tabs -->
<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
  <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
  <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <!-- Home tab content -->
  <div class="tab-pane" id="control-sidebar-home-tab">
    <h3 class="control-sidebar-heading"> Atividade Recente</h3>
    <ul class="control-sidebar-menu">
      <li>
        <a href="javascript:void(0)">
          <i class="menu-icon fa fa-birthday-cake bg-red"></i>

          <div class="menu-info">
            <h4 class="control-sidebar-subheading">Seu Aniversário</h4>

            <p>09 de maio</p>
          </div>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="menu-icon fa fa-user bg-yellow"></i>

          <div class="menu-info">
            <h4 class="control-sidebar-subheading">Wladmyr Atualizou Seu Perfil</h4>

            <p>Novo Número (83)98713-7778</p>
          </div>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

          <div class="menu-info">
            <h4 class="control-sidebar-subheading">Você recebeu um novo Email</h4>

            <p>maria@exemplo.com</p>
          </div>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="menu-icon fa fa-file-code-o bg-green"></i>

          <div class="menu-info">
            <h4 class="control-sidebar-subheading">Rita Atualizou 254 Linhas de Código</h4>

            <p>O tempo de execução foi 5 segundos</p>
          </div>
        </a>
      </li>
    </ul>
    <!-- /.control-sidebar-menu -->

    <h3 class="control-sidebar-heading">Barra de Tarefas</h3>
    <ul class="control-sidebar-menu">
      <li>
        <a href="javascript:void(0)">
          <h4 class="control-sidebar-subheading">
            Customizar design
            <span class="label label-danger pull-right">70%</span>
          </h4>

          <div class="progress progress-xxs">
            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
          </div>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <h4 class="control-sidebar-subheading">
            Atualização atual
            <span class="label label-success pull-right">95%</span>
          </h4>

          <div class="progress progress-xxs">
            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
          </div>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <h4 class="control-sidebar-subheading">
            Integrar com git hub
            <span class="label label-warning pull-right">50%</span>
          </h4>

          <div class="progress progress-xxs">
            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
          </div>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <h4 class="control-sidebar-subheading">
            Back End
            <span class="label label-primary pull-right">68%</span>
          </h4>

          <div class="progress progress-xxs">
            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
          </div>
        </a>
      </li>
    </ul>
    <!-- /.control-sidebar-menu -->

  </div>
  <!-- /.tab-pane -->
  <!-- Stats tab content -->
  <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
  <!-- /.tab-pane -->
  <!-- Settings tab content -->
  <div class="tab-pane" id="control-sidebar-settings-tab">
    <form method="post">
      <h3 class="control-sidebar-heading">Configurações Gerais</h3>

      <div class="form-group">
        <label class="control-sidebar-subheading">
          Reportar uso do painel
          <input type="checkbox" class="pull-right" checked>
        </label>

        <p>
          Algumas informações serão usadas para melhoria da usabilidade.
        </p>
      </div>
      <!-- /.form-group -->

      <div class="form-group">
        <label class="control-sidebar-subheading">
          Permitir redericionamento de emails
          <input type="checkbox" class="pull-right" checked>
        </label>

        <p>
          Outras opções estarão disponíveis em breve
        </p>
      </div>
      <!-- /.form-group -->

      <div class="form-group">
        <label class="control-sidebar-subheading">
          Expôr nome do author nos posts
          <input type="checkbox" class="pull-right" checked>
        </label>

        <p>
          Permitir que meu nome seja exibido nos meus posts
        </p>
      </div>
      <!-- /.form-group -->

      <h3 class="control-sidebar-heading">Configurações de Chat</h3>

      <div class="form-group">
        <label class="control-sidebar-subheading">
          Ficar online
          <input type="checkbox" class="pull-right" checked>
        </label>
      </div>
      <!-- /.form-group -->

      <div class="form-group">
        <label class="control-sidebar-subheading">
          Desativar notificações
          <input type="checkbox" class="pull-right">
        </label>
      </div>
      <!-- /.form-group -->

      <div class="form-group">
        <label class="control-sidebar-subheading">
          Deletar histórico do chat
          <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
        </label>
      </div>
      <!-- /.form-group -->
    </form>
  </div>
  <!-- /.tab-pane -->
</div>
</aside>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar\'s background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>';

  $javascript = '

  </div>
  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge(\'uibutton\', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="bower_components/raphael/raphael.min.js"></script>
  <script src="bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="bower_components/moment/min/moment.min.js"></script>
  <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  </body>
  </html>
';

