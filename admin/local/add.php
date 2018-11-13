<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once LOCAL;
    addLocal();
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-cube"></i> Listagem de Localidades</a></li>
                <li><i class="glyphicon glyphicon-plus-sign"></i>
                    <small> Adicionar Local</small>
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
                        <h3 class="text-center">Preencha os campos abaixo para adicionar um local</h3>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome" 
                                   placeholder="Nome do local" 
                                   name="locais['nome']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="rua">Rua </label>	      
                            <input type="text" class="form-control" id="rua" 
                                   placeholder="Rua do local"
                                   name="locais['rua']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="Bairro">Bairro </label>	      
                            <input type="text" class="form-control" id="Bairro" 
                                   placeholder="Bairro do local"
                                   name="locais['Bairro']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="numero">Número </label>	      
                            <input type="text" class="form-control" id="numero" 
                                   placeholder="Número do local"
                                   name="locais['numero']" required="">	    
                        </div>

                        <div class="form-group">
                            <label for="imagem">Foto do Local </label>
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