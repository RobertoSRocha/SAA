<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginOperador();
?>
<?php include(HEADER_TEMPLATE_OPERACIONAL); ?>
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
                <a href="form01.php" class="small-box-footer" title="Afastamento de Atividades">
                    <div class="small-box bg-orange-active">
                        <div class="inner">
                            <h3>Afastamento</h3>

                            <p>Afastamento de Atividades</p>
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
                <a href="form02.php" class="small-box-footer" title="Participação em Evento">
                    <div class="small-box bg-purple-active">
                        <div class="inner">
                            <h3>Evento</h3>

                            <p>Participação em Evento</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-calendar"></i>
                        </div>

                        <span class="small-box-footer">Requisitar<i class="fa fa-arrow-circle-right"></i></span>

                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="form03.php" class="small-box-footer" title="Troca de Plantão">
                    <div class="small-box bg-aqua-active">
                        <div class="inner">
                            <h3>Plantão</h3>

                            <p>Troca de Plantão</p>
                        </div>
                        <div class="icon">
                            <i class="ion-arrow-swap"></i>
                        </div>

                        <span class="small-box-footer">Requisitar<i class="fa fa-arrow-circle-right"></i></span>

                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a target="_blank" href="<?php echo BASEURL; ?>dist/pdf/Formulario_Solicitacao_Estagio_Opcional.pdf" class="small-box-footer" title="Solicitação de Estágio">
                    <div class="small-box bg-green-active">
                        <div class="inner">
                            <h3>Estágio</h3>

                            <p>Solicitação de Estágio</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-medkit"></i>
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
<?php include(FOOTER_TEMPLATE); ?>