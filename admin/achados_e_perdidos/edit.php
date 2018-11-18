<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once ACHADOS_E_PERDIDOS;
    editAchados_e_Perdidos();
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-users"></i> Listagem de Usuários</a></li>
                <li><i class="glyphicon glyphicon-pencil"></i>
                    <small> Editar Usuário</small>
                </li>
            </ol>		
        </div>			
        <div class="breadcrumb text-right">		    		    	
            <a class="btn btn-default" href="index.php"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a>		    
        </div>		
    </div>	
</section>


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="edit.php?id=<?php echo $item['id']; ?>" method="post" enctype="multipart/form-data">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Edite nos campos abaixo as informações do item</h3>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome"
                                   value="<?php echo $item['nome']; ?>"
                                   name="achados_e_perdidos['nome']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="descricao">Descrição </label>	      
                            <textarea class="form-control" id="descricao"
                                      rows="3" name="achados_e_perdidos['descricao']" required=""><?php echo trim($item['descricao']); ?></textarea>	    
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label></br>
                            <select class="form-control" id="status" 
                                    name="achados_e_perdidos['status']" required="">
                                <!-- Mostra permissão do usuário -->
                                <?php if ($item['status'] == 1) : ?>	
                                    <option value=1>Item perdido</option>
                                    <option value=0>Item devolvido</option>
                                <?php else : ?>				
                                    <option value=0>Item devolvido</option>
                                    <option value=1>Item perdido</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <?php if ($item['img']!= null){?>
                                <img src="<?php echo BASEURL; ?>imagens/achados_e_perdidos/<?php echo $item['img']; ?>"
                                     class="img-rounded view_img_1" alt="Cinque Terre"/>
                            <?php }else{?>
                                <img src="<?php echo BASEURL; ?>dist/img/semFoto.png?>"
                                     class="img-rounded view_img_1" alt="Cinque Terre"/>
                            <?php }?>
                        </div>

                        <div class="form-group">
                            <label for="imagem">Alterar Imagem</label>
                            <input type="file" accept="image/png, image/jpeg, image/jpg" name='img'>
                        </div>

                        <div id="actions" class="row">	    
                            <div class="col-md-12">	      
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i> Salvar</button>
                                <a href="index.php" class="btn btn-default"><i class="fa fa-close"></i> Cancelar</a>	    
                            </div>	  
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>


