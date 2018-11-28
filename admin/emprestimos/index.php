<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once EMPRESTIMOS;
    index_emprestimos();
?>
<?php include(HEADER_TEMPLATE); ?>
<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><i class="glyphicon glyphicon-list-alt"></i>
                    <small> Listagem de Itens Emprestados</small>
                </li>

            </ol>		
        </div>			
        <div class="breadcrumb text-right">		    	
            <a class="btn btn-primary" href="add.php" title="Adicionar novo empréstimo">
                <i class="fa fa-plus">
                </i> Novo Empréstimo</a>		    	
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
            <div class="col-sm-12 col-md-10">
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
            <?php if ($itens_emprestimos) : ?>
                <?php foreach ($itens_emprestimos as $item_emprestimos) : ?>
                    <div class="col-sm-12 col-md-6">
                        <div class="box box-solid">
                            <div class="box-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="view.php?id=<?php echo $item_emprestimos['id']; ?>" class="ad-click-event">
                                            <?php if ($item_emprestimos['img'] != null) { ?>
                                                <img src="<?php echo BASEURL; ?>imagens/achados_e_perdidos/<?php echo $item_emprestimos['img']; ?>"
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
                                                <a href="view.php?id=<?php echo $item_emprestimos['id']; ?>" class="btn btn-sm btn-success" 
                                                   title="Visualizar item"><i class="fa fa-eye"></i></a>
                                            </p>
                                            <h4 style="margin-top: 0"><strong><?php echo $item_emprestimos['user_realizou']; ?></strong></h4>
                                        </div>
                                        <div class="clearfix">
                                            <p class="pull-right">
                                                <a href="edit.php?id=<?php echo $item_emprestimos['id']; ?>" class="btn btn-sm btn-warning" 
                                                   title="Editar item"><i class="fa fa-pencil"></i></a>
                                            </p>
                                            <h4 style="margin-top: 0">Encontrado no dia: <strong><?php echo date('d/m/Y', strtotime($item_emprestimos['user_realizou'])); ?></h4>
                                        </div>
                                        <div class="clearfix">    
                                            <p class="pull-right">
                                                <a href=# class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $item_emprestimos['id']; ?>"
                                                   title="Excluir item"><i class="fa fa-trash"></i></a>
                                            </p>
                                            <h4 style="margin-top: 0"><strong><?php echo $item_emprestimos['user_realizou']; ?></strong></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <strong>Não há itens emprestados</strong>
                </div>

            <?php endif; ?>
            <!-- /.col -->
        </div>

    </div>                     
</section>
<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>