<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once USUARIO;
    addUsuario();
?>
<?php include(HEADER_TEMPLATE); ?>

<?php $senha = "mudar123";
$criptografada = md5($senha) ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-users"></i> Listagem de Usuários</a></li>
                <li><i class="glyphicon glyphicon-plus-sign"></i>
                    <small> Adicionar Usuário</small>
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
                    <form action=add.php method="post" enctype="multipart/form-data">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Preencha os campos abaixo para adicionar um usuário</h3>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome" 
                                   placeholder="Nome do usuário" 
                                   name="usuario['nome']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="matricula">Matrícula </label>	      
                            <input type="number" class="form-control" id="matricula" 
                                   placeholder="Matrícula do usuário"
                                   name="usuario['matricula']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="email">E-mail </label>	      
                            <input type="email" class="form-control" id="email" 
                                   placeholder="E-mail do usuário"
                                   name="usuario['email']" required="">	    
                        </div>
                        <!--style="display:none;"-->
                        <div class="form-group" style="display:none;">	      
                            <label for="senha">Senha </label>	      
                            <input type="text" class="form-control" id="senha"
                                   value="<?php echo $criptografada; ?>"
                                   name="usuario['senha']">	    
                        </div>
                        <div class="form-group">
                            <label for="permissao">Permissão</label></br>
                            <select class="form-control" id="permissao" 
                                    name="usuario['permissao']" required="">
                                <option value="" ></option>
                                <option value=1>Nível 1 - Administrador</option>
                                <option value=2>Nível 2 - Operador</option>
                                <option value=3>Nível 3 - Comum</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="imagem">Foto do Usuário </label>
                            <input type="file" accept="image/png, image/jpeg, image/jpg" name='img'>

                        </div>

                        <div id="actions" class="row">	    
                            <div class="col-md-12">	      
                                <button type="submit" class="btn btn-primary">
                                <i class="fa fa-check"></i> Cadastrar</button>
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