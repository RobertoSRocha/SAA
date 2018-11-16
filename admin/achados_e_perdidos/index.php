<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><i class="fa fa-search"></i>
                    <small> Listagem de Itens perdidos</small>
                </li>
                
            </ol>		
        </div>			
        <div class="breadcrumb text-right">		    	
            <a class="btn btn-primary" href="#">
                <i class="fa fa-plus">
                </i> Novo Item</a>		    	
            <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>		    
        </div>		
    </div>	
</section>

<section class="content">
    <!-- *****Alertas de Operações*****-->
    <?php include(ALERT_MSG); ?>
    
    <div class="row">
        <?php for($i=1; $i<10; $i++){ ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="#">
                <div class="info-box">
                    <img src="<?php echo BASEURL; ?>dist/img/semFoto.png" class="info-box-icon">
                    <div class="info-box-content">
                        <span class="info-box-number"><font color = "black">NOME DO ITEM PERDIDO</span>
                        <span class="info-box-text">DATA ENCONTRADO</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </a>
            <!-- /.info-box -->
        </div>
        <?php }?>
        <!-- /.col -->
    </div>
</section>
<?php include(FOOTER_TEMPLATE); ?>