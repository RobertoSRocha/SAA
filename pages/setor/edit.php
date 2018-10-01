<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
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

<?php if (!empty($_SESSION['message'])) : ?>		
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">			
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo $_SESSION['message']; ?>		
    </div>		
    <?php clear_messages(); ?>	
<?php endif; ?>	

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="edit.php?id=<?php echo $setor['id']; ?>" method="post">
                        <!-- area de campos do form -->
                        <center><h3>Edite nos campos abaixo as informações do setor</h3></center>
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
                                <option value="" ></option>
                                <?php if ($usuarios) : ?>	
                                    <?php foreach ($usuarios as $usuario) : ?>					
                                    <option value="<?php echo $usuario['id']; ?>"><?php echo $usuario['nome']; ?></option>			
                                    <?php endforeach; ?>	
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="local_id">Localidade </label>
                            <select class="form-control" id="local_id" 
                                    name="setor['local_id']" required="">
                                <option value="" ></option>
                                <?php if ($locais) : ?>	
                                    <?php foreach ($locais as $local) : ?>					
                                    <option value="<?php echo $local['id']; ?>"><?php echo $local['nome']; ?></option>			
                                    <?php endforeach; ?>		
                                <?php endif; ?>
                            </select>
                        </div>
                        <div id="actions" class="row">	    
                            <div class="col-md-12">	      
                                <button type="submit" class="btn btn-primary">Salvar</button>	      
                                <a href="index.php" class="btn btn-default">Cancelar</a>	    
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


