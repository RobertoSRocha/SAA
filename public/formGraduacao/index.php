<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>	
<?php include(HEADER_TEMPLATE_PUBLIC); ?>
<!-- Main conteudoCentral -->

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><i class="fa fa-edit"></i>
                    <small> Listagem dos Formulários</small>
                </li>
            </ol>		
        </div>				
        <div class="breadcrumb text-right">		    		    	
            <a class="btn btn-default" href="<?php echo BASEURL; ?>index.php"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a>		    
        </div>		
    </div>	
</section>

<section class="content">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>Form 01</h3>

                        <p>Requerimentos Gerais</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-document"></i>
                    </div>
                    <a href="form01.php" class="small-box-footer">
                        Requisitar <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Form 02</h3>

                        <p>Auxílio Financeiro</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <a href="form02.php" class="small-box-footer">
                        Requisitar <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>Form 03</h3>

                        <p>Exercícios Domiciliares - Evento</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document"></i>
                    </div>
                    <a href="form03.php" class="small-box-footer">
                        Requisitar <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>Form 04</h3>

                        <p>Exercícios Domiciliares - Saúde</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document-text"></i>
                    </div>
                    <a href="form04.php" class="small-box-footer">
                        Requisitar <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
</section>
<!-- /.content -->
<?php include(FOOTER_TEMPLATE); ?>

