<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once ACHADOS_E_PERDIDOS;
    indexAchados_e_Perdidos();
?>
<?php
    require_once SETOR;
    indexSetor();
?>
<?php
    require_once LOCAL;
    indexLocal();
?>

<?php include(HEADER_TEMPLATE); ?>

    

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

            <div class="col-md-4">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-yellow">               
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                        <h5 class="widget-user-desc">Lead Developer</h5>
                    </div>
                    <div class="box-footer no-padding">
                   <p>
                       sdfasdfasdf
                       asdfasdfasdfasdfas ewrwe rwe rfjsdkfjasd fjasdj adasd
                       fasdf
                       asdfasdfasdfasdfas
                       dfasdfasdfasdf

                   </p>
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>


            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="form01.php" class="small-box-footer" title="Requerimentos Gerais">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>Geral</h3>

                            <p>Requerimentos Gerais</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-document"></i>
                        </div>

                        <span class="small-box-footer">Requisitar<i class="fa fa-arrow-circle-right"></i></span>

                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="form02.php" class="small-box-footer" title="Auxílio Financeiro">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>Financeiro</h3>

                            <p>Auxílio Financeiro</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>

                        <span class="small-box-footer">Requisitar<i class="fa fa-arrow-circle-right"></i></span>

                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="form03.php" class="small-box-footer" title="Exercícios Domiciliares - Evento">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>Evento</h3>

                            <p>Exercícios Domiciliares - Evento</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-document"></i>
                        </div>

                        <span class="small-box-footer">Requisitar<i class="fa fa-arrow-circle-right"></i></span>

                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="form04.php" title="Exercícios Domiciliares - Saúde" class="small-box-footer">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>Saúde</h3>

                            <p>Exercícios Domiciliares - Saúde</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-document-text"></i>
                        </div>

                        <span class="small-box-footer">Requisitar<i class="fa fa-arrow-circle-right"></i></span>

                    </div>
                </a>
            </div>
            <!-- ./col -->
        </div>
    </div>
</section>
<!-- /.content -->







<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>