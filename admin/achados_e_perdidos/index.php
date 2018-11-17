<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
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
            <a class="btn btn-primary" href="add.php">
                <i class="fa fa-plus">
                </i> Novo Item</a>		    	
            <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>		    
        </div>		
    </div>	
</section>

<section class="content">
    <!-- *****Alertas de Operações*****-->
    <?php include(ALERT_MSG); ?>
    <!-- Mostra o setor responsável do patrimônio -->
    <div class="row">
        <?php if ($itens) : ?>
            <?php foreach ($itens as $item) : ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#">
                        <div class="info-box">
                            <?php if ($item['img'] != null) { ?>
                                <img src="<?php echo BASEURL; ?>imagens/achados_e_perdidos/<?php echo $item['img']; ?>"
                                     class="info-box-icon"/>
                            <?php } else { ?>
                                <img src="<?php echo BASEURL; ?>dist/img/semFoto.png?>" class="info-box-icon"/>
                            <?php } ?>
                            <!--<img src="<?php echo BASEURL; ?>dist/img/semFoto.png" class="info-box-icon">-->
                            <div class="info-box-content">
                                <span class="info-box-number"><font color = "black"><?php echo $item['nome']; ?></span>
                                <span>Encontrado no dia: <strong><?php echo $item['data_achado']; ?></strong></span>
                                <span> na(o) 
                                    <?php if ($setores) : ?>	
                                        <?php foreach ($setores as $setor) : ?>
                                            <?php if ($setor['id'] == $item['id_setor']) : ?>	
                                                <strong><?php echo $setor['nome']; ?></strong>
                                            <?php endif; ?>                            
                                        <?php endforeach; ?>		
                                    <?php endif; ?> 
                                    da(o) 
                                    <?php if ($locais) : ?>	
                                        <?php foreach ($locais as $local) : ?>
                                            <?php if ($local['id'] == $item['id_local']) : ?>	
                                                <strong><?php echo $local['nome']; ?></strong>
                                            <?php endif; ?>                            
                                        <?php endforeach; ?>		
                                    <?php endif; ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
            <?php endforeach; ?>
        <?php else : ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <strong>Não há itens perdidos</strong>
        </div>
            
        <?php endif; ?>
        <!-- /.col -->
    </div>                     
</section>
<?php include(FOOTER_TEMPLATE); ?>