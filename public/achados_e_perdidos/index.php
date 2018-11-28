<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE_PUBLIC); ?>
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
            <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>		    
        </div>		
    </div>	
</section>

<section class="content">
    <!-- Mostra o setor responsável do patrimônio -->
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length">

                    <form method="post">
                        <div class="form-group">
                            <!--Ordenar valor do select-->
                            <?php $filtro = 1;
                            if (isset($_POST['filtro'])) {
                                $filtro = $_POST['filtro'];
                            } ?>
                            <label class="col-form-label">Filtro:</label>
                            <select name="filtro"
                                    title="selecionar ordenação de itens" id="valor">
                                <?php if ($filtro == null) { ?>
                                    <option value="">Todos os itens</option>
                                    <option value="1">Itens perdidos</option>
                                    <option value="0">Itens devolvidos</option>
                                <?php } elseif ($filtro == 1) { ?>
                                    <option value="1">Itens perdidos</option>
                                    <option value="0">Itens devolvidos</option>
                                    <option value="">Todos os itens</option>

                                <?php } elseif ($filtro == 0) { ?>
                                    <option value="0">Itens devolvidos</option>
                                    <option value="1">Itens perdidos</option>
                                    <option value="">Todos os itens</option>

                                <?php } ?>
                            </select>
                            <button type="submit" class="btn btn-primary btn-xs">Aplicar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <?php if ($itens) : ?>
                <?php foreach ($itens as $item) : ?>
                    <div class="col-sm-12 col-md-6">
                        <div class="box box-solid">
                            <div class="box-body">
                                <a href="view.php?id=<?php echo $item['id']; ?>" class="ad-click-event" style="color:black" title="Visualizar mais informações do item">
                                    <div class="media">
                                        <div class="media-left">
                                            <?php if ($item['img'] != null) { ?>
                                                <img src="<?php echo BASEURL; ?>imagens/achados_e_perdidos/<?php echo $item['img']; ?>"
                                                     alt="Now UI Kit" class="media-object view_img_achados_e_perdidos"/>
                                                 <?php } else { ?>
                                                <img src="<?php echo BASEURL; ?>dist/img/semFoto.png?>" 
                                                     alt="Now UI Kit" class="media-object view_img_achados_e_perdidos"/>
                                                 <?php } ?>
                                        </div>
                                        <div class="media-body">
                                            <br>
                                            <div class="clearfix">
                                                <h4 style="margin-top: 0"><strong><?php echo $item['nome']; ?> - <?php echo status($item['status']); ?></strong></h4>
                                            </div>
                                            <div class="clearfix">
                                                <h4 style="margin-top: 0">Encontrado no dia: <strong><?php echo date('d/m/Y', strtotime($item['data_achado'])); ?></h4>
                                            </div>
                                            <div class="clearfix">
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
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <strong>Não há itens perdidos</strong>
                </div>

            <?php endif; ?>
            <!-- /.col -->
        </div>

    </div>                     
</section>
<?php include(FOOTER_TEMPLATE); ?>