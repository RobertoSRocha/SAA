<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAA-EMCM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo BASEURL; ?>operacional/index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>SAA</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>SAA</b> - EMCM</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo BASEURL; ?>dist/img/iconousuario.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $_SESSION['nome'] ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo BASEURL; ?>dist/img/iconousuario.jpg" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo $_SESSION['nome'] ?>
                                    Operador
                                    <small title="tempo de sessão" id="cronometro" onload="startCountdown();"> </small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo BASEURL; ?>operacional/usuario/view.php?id=<?php echo $_SESSION['id']; ?>" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo BASEURL;?>model/logout/funcoes.php?id=sair" class="btn btn-default btn-flat">Sair</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <ul class="sidebar-menu" data-widget="tree">
                
                <li class="header">MENU DE NAVEGAÇÃO</li>
                <!-- ACHADOS E PERDIDOS -->
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-search"></i>
                        <span>Achados e perdidos</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Cadastrar itens</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Consultar itens</a></li>
                    </ul>
                </li>
                <!-- EMPRÉSTIMOS-->
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        <span>Empréstimos</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Consultar Empréstimo</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Devolver Empréstimo</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Realizar Empréstimo</a></li>
                    </ul>
                </li>
                <!-- FORMULÁRIOS-->
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Formulários</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo BASEURL; ?>operacional/formGraduacao/index.php"><i class="fa fa-circle-o"></i> Alunos Graduação</a></li>
                        <li><a href="<?php echo BASEURL; ?>operacional/formResidencia/index.php"><i class="fa fa-circle-o"></i> Alunos Residência</a></li>
                        <li><a href="<?php echo BASEURL; ?>operacional/formProfessor/index.php"><i class="fa fa-circle-o"></i> Professores</a></li>
                    </ul>
                </li>
                
                <!-- GERENCIAR PATRIMÔNIOS-->
                <li>
                    <a href="<?php echo BASEURL; ?>operacional/patrimonio/index.php">
                        <i class="fa fa-bank"></i><span>Gerenciar Patrimônios</span>
                    </a>
                </li>
                
                <!-- GERENCIAR LOCALIDADES-->
                <li>
                    <a href="<?php echo BASEURL; ?>operacional/local/index.php">
                        <i class="fa fa-cube"></i><span>Visualizar Localidades</span>
                    </a>
                </li>
                
                <!-- GERENCIAR SETORES-->
                <li>
                    <a href="<?php echo BASEURL; ?>operacional/setor/index.php">
                        <i class="fa fa-cubes"></i><span>Visualizar Setores</span>
                    </a>
                </li>
                
            </ul>
        </section>
    </aside>
    
    <!-- Div conteúdo central -->
    <div class="content-wrapper">
