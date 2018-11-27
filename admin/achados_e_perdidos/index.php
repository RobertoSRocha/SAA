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
            <a class="btn btn-primary" href="add.php" title="Adicionar novo item perdido">
                <i class="fa fa-plus">
                </i> Novo Item Perdido</a>		    	
            <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>		    
        </div>		
    </div>	
</section>

<section class="content">
    <!-- *****Alertas de Operações*****-->
    <?php include(ALERT_MSG); ?>
    <!-- Mostra o setor responsável do patrimônio -->
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="example1_length">
                    <label>Filtro: 
                        <select name="example1_length" aria-controls="example1" class="form-control input-sm" title="selecionar ordenação de itens">
                            <option value="10">Itens perdidos</option>
                            <option value="25">Itens devolvidos</option>
                            <option value="25">Todos os itens</option>
                        </select>
                    </label>
                </div>  
            </div>
        </div>
        <div class="col-xs-12">
            <?php if ($itens) : ?>
                <?php foreach ($itens as $item) : ?>
                    <div class="col-sm-12 col-md-6">
                        <div class="box box-solid">
                            <div class="box-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="view.php?id=<?php echo $item['id']; ?>" class="ad-click-event">
                                            <?php if ($item['img'] != null) { ?>
                                                <img src="<?php echo BASEURL; ?>imagens/achados_e_perdidos/<?php echo $item['img']; ?>"
                                                     alt="Now UI Kit" class="media-object view_img_achados_e_perdidos"/>
                                                 <?php } else { ?>
                                                <img src="<?php echo BASEURL; ?>dist/img/semFoto.png?>" 
                                                     alt="Now UI Kit" class="media-object view_img_achados_e_perdidos"/>
                                                 <?php } ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <p class="pull-right">
                                                <a href="view.php?id=<?php echo $item['id']; ?>" class="btn btn-sm btn-success" title="Visualizar item">
                                                    <i class="fa fa-eye"></i></a>
                                            </p>
                                            <h4 style="margin-top: 0"><strong><?php echo $item['nome']; ?></strong></h4>
                                        </div>
                                        <div class="clearfix">
                                            <p class="pull-right">
                                                <a href="edit.php?id=<?php echo $item['id']; ?>" class="btn btn-sm btn-warning" title="Editar item">
                                                    <i class="fa fa-pencil"></i></a>
                                            </p>
                                            <h4 style="margin-top: 0">Encontrado no dia: <strong><?php echo date('d/m/Y', strtotime($item['data_achado'])); ?></h4>
                                        </div>
                                        <div class="clearfix">    
                                            <p class="pull-right">
                                                <a href=# class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $item['id']; ?>"
                                                   title="Excluir item"><i class="fa fa-trash"></i></a>
                                            </p>
                                            <h5 style="margin-top: 0">Encontrado na(o) 
                                                <?php if ($setores) : ?>	
                                                    <?php foreach ($setores as $setor) : ?>
                                                        <?php if ($setor['id'] == $item['id_setor']) : ?>	
                                                            <strong><?php echo $setor['nome']; ?></strong> 
                                                            da(o) 
                                                            <strong><?php echo $nome_setor = (nome_setor_local($setor['local_id'])); ?></strong>
                                                        <?php endif; ?>                            
                                                    <?php endforeach; ?>		
                                                <?php endif; ?>
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <strong>N�o h� itens perdidos</strong>
                </div>

            <?php endif; ?>
            <!-- /.col -->
        </div>

    </div>                     
</section>
<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>