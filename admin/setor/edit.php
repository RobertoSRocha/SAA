<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once SETOR;
    editSetor();
?>

<?php
    require_once LOCAL;
    indexLocal();
?>

<?php
    require_once USUARIO;
    index();
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-cubes"></i> Listagem de Setores</a></li>
                <li><i class="glyphicon glyphicon-pencil"></i>
                    <small> Editar Setor</small>
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
                    <form action="edit.php?id=<?php echo $setor['id']; ?>" method="post" enctype="multipart/form-data">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Edite nos campos abaixo as informações do setor</h3>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome"
                                   value="<?php echo $setor['nome']; ?>"
                                   name="setor['nome']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="numero">Número </label>	      
                            <input type="text" class="form-control" id="numero" 
                                   value="<?php echo $setor['numero']; ?>"
                                   name="setor['numero']" required="">	    
                        </div>
                        <div class="form-group">
                            <label for="usuario_id">Usuário responsável </label>
                            <select class="form-control" id="usuario_id" 
                                    name="setor['usuario_id']" required="">

                                <!--Usuario Cadastrado no Setor-->
                                <?php if ($usuarios) : ?>
                                    <?php foreach ($usuarios as $usuario) : ?>
                                        <?php if($usuario['id'] == $setor['usuario_id']){?>
                                            <option value="<?php echo $usuario['id']; ?>"><?php echo $usuario['nome']; ?> - <?php echo $usuario['matricula'];?></option>
                                        <?php } endforeach; ?>
                                <?php endif; ?>

                                <!--Lista usuarios niveis 1 e 2-->
                                <?php if ($usuarios) :
                                    foreach ($usuarios as $usuario) :
                                        if ($usuario['id'] != $setor['usuario_id']) {
                                            if ($usuario['permissao'] == 1 || $usuario['permissao'] == 2) : ?>
                                                <option value="<?php echo $usuario['id']; ?>"><?php echo $usuario['nome']; ?> - <?php echo $usuario['matricula'];?></option>
                                            <?php endif;
                                        } endforeach;
                                endif; ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="local_id">Localidade </label>
                            <select class="form-control" id="local_id" 
                                    name="setor['local_id']" required="">
                                <?php if ($locais) : ?>	
                                    <?php foreach ($locais as $local) : ?>
                                        <?php if($local['id'] == $setor['local_id']){?>
                                            <option value="<?php echo $local['id']; ?>"><?php echo $local['nome']; ?></option>			
                                    <?php } endforeach; ?>
                                    <?php foreach ($locais as $local) : ?>
                                        <?php if($local['id'] != $setor['local_id']){?>
                                            <option value="<?php echo $local['id']; ?>"><?php echo $local['nome']; ?></option>			
                                    <?php } endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <?php if ($setor['img']!= null){?>
                                <img src="<?php echo BASEURL; ?>imagens/setor/<?php echo $setor['img']; ?>"
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


