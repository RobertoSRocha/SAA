<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once USUARIO;
    editUsuario();
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
                    <form action="edit.php?id=<?php echo $usuario['id']; ?>" method="post" enctype="multipart/form-data">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Edite nos campos abaixo as informações do usuário</h3>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome"
                                   value="<?php echo $usuario['nome']; ?>"
                                   name="usuario['nome']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="matricula">Matrícula </label>	      
                            <input type="number" class="form-control" id="matricula" 
                                   value="<?php echo $usuario['matricula']; ?>"
                                   name="usuario['matricula']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="email">E-mail </label>	      
                            <input type="text" class="form-control" id="email" 
                                   value="<?php echo $usuario['email']; ?>"
                                   name="usuario['email']" required="">	    
                        </div>
                        <div class="form-group">
                            <label for="permissao">Permissão</label></br>
                            <select class="form-control" id="permissao" 
                                    name="usuario['permissao']" required="">
                                <!-- Mostra permissão do usuário -->
                                <?php if ($usuario['permissao'] == 1) : ?>	
                                    <option value=1>Nível 1 - Administrador</option>
                                    <option value=2>Nível 2 - Operador</option>
                                    <option value=0>Nível 3 - Comum</option>
                                <?php elseif ($usuario['permissao'] == 2) : ?>	
                                    <option value=2>Nível 2 - Operador</option>
                                    <option value=1>Nível 1 - Administrador</option>
                                    <option value=0>Nível 3 - Comum</option>
                                <?php else : ?>				
                                    <option value=0>Nível 3 - Comum</option>
                                    <option value=1>Nível 1 - Administrador</option>
                                    <option value=2>Nível 2 - Operador</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <?php if ($usuario['img']!= null){?>
                                <img src="<?php echo BASEURL; ?>imagens/usuario/<?php echo $usuario['img']; ?>"
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
                                <?php if ($_SESSION['id'] == $usuario['id']) : ?>
                                    <a href="atualiza_senha.php?id=<?php echo $usuario['id']; ?>" class="btn btn-warning">
                                        <i class="fa fa-pencil"></i> Alterar senha</a>
                                <?php else : ?>
                                    <a href=# class="btn btn-warning" data-toggle="modal" data-target="#resetar-senha" data-customer="<?php echo $usuario['id']; ?>">
                                            <i class="fa fa-pencil"></i> Redefinir senha</a>
                                <?php endif; ?>
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


