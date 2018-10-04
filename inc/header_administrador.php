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
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>dist/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo BASEURL; ?>admin/index.php" class="logo">
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
                            <span class="hidden-xs">Artur Carlos</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo BASEURL; ?>dist/img/iconousuario.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Artur - Administrador
                                    <small>Departamento de Tecnologia da Informação</small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sair</a>
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
                <!-- GERENCIAR PATRIMÔNIOS-->
                <li>
                    <a href="<?php echo BASEURL; ?>admin/patrimonio/index.php">
                        <i class="fa fa-bank"></i><span>Gerenciar Patrimônios</span>
                    </a>
                </li>
                <!-- GERENCIAR USUÁRIOS-->
                <li>
                    <a href="<?php echo BASEURL; ?>admin/usuario/index.php">
                        <i class="fa fa-users"></i><span>Gerenciar Usuários</span>
                    </a>
                </li>
                <!-- GERENCIAR LOCALIDADES-->
                <li>
                    <a href="<?php echo BASEURL; ?>admin/local/index.php">
                        <i class="fa fa-cube"></i><span>Gerenciar Localidades</span>
                    </a>
                </li>
                <!-- GERENCIAR SETORES-->
                <li>
                    <a href="<?php echo BASEURL; ?>admin/setor/index.php">
                        <i class="fa fa-cubes"></i><span>Gerenciar Setores</span>
                    </a>
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
                        <li><a href="#"><i class="fa fa-circle-o"></i> Realizar empréstimo</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Devolver empréstimo</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Consultar empréstimo</a></li>
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
                        <li><a href="#"><i class="fa fa-circle-o"></i> Formulário 01</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Formulário 02</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Formulário 03</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
    
    <!-- Div conteúdo central -->
    <div class="content-wrapper">