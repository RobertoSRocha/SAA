<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once LOCAL;
    editLocal();
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-cube"></i> Listagem de Localidades</a></li>
                <li><i class="glyphicon glyphicon-pencil"></i>
                    <small> Editar Local</small>
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
                    <form action="edit.php?id=<?php echo $local['id']; ?>" method="post" enctype="multipart/form-data">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Edite nos campos abaixo as informações do local</h3>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome"
                                   value="<?php echo $local['nome']; ?>"
                                   name="locais['nome']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="rua">Rua </label>	      
                            <input type="text" class="form-control" id="rua" 
                                   value="<?php echo $local['rua']; ?>"
                                   name="locais['rua']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="Bairro">Bairro </label>	      
                            <input type="text" class="form-control" id="Bairro" 
                                   value="<?php echo $local['Bairro']; ?>"
                                   name="locais['Bairro']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="numero">Número </label>	      
                            <input type="text" class="form-control" id="numero" 
                                   value="<?php echo $local['numero']; ?>"
                                   name="locais['numero']" required="">	    
                        </div>

                        <div class="form-group">
                            <?php if ($local['img']!= null){?>
                                <img src="<?php echo BASEURL; ?>imagens/locais/<?php echo $local['img']; ?>"
                                     class="img-rounded view_img_1" alt="Cinque Terre"/>
                            <?php }else{?>
                                <img src="<?php echo BASEURL; ?>dist/img/semFoto.png?>"
                                     class="img-rounded view_img_1" alt="Cinque Terre"/>
                            <?php }?>
                        </div>

                        <div class="form-group">
                            <label for="imagem">Altera Imagem</label>
                            <input type="file" accept="image/png, image/jpeg, image/jpg" name='img'>
                        </div>


                        <div id="actions" class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i> Salvar</button>
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-close"></i> Cancelar</a>
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

<?php include(FOOTER_TEMPLATE); ?>
