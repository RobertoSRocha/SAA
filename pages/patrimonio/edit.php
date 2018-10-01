<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once PATRIMONIO;
    editPatrimonio();
?>
<?php
    require_once SETOR;
    indexSetor();
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-bank"></i> Listagem de Patrimônios</a></li>
                <li><i class="glyphicon glyphicon-pencil"></i>
                    <small> Editar Patrimônio</small>
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
                    <form action="edit.php?id=<?php echo $patrimonio['id']; ?>" method="post">
                        <!-- area de campos do form -->
                        <center><h3>Edite nos campos abaixo as informações do patrimônio</h3></center>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome"
                                   value="<?php echo $patrimonio['nome']; ?>"
                                   name="patrimonio['nome']" required="">	    
                        </div>
                        
                        <div class="form-group">	      
                            <label for="especificacao">Especificação </label>	      
                            <textarea class="form-control" id="especificacao"
                                      rows="3" name="patrimonio['especificacao']" required="">
                                          <?php echo $patrimonio['especificacao']; ?>
                            </textarea>	    
                        </div>
                        <div class="form-group">	      
                            <label for="tombo">Tombo </label>	      
                            <input type="text" class="form-control" id="tombo" 
                                   value="<?php echo $patrimonio['tombo']; ?>"
                                   name="patrimonio['tombo']" required="">	    
                        </div>
                        <div class="form-group">
                            <label for="setor_id">Setor responsável </label>
                            <select class="form-control" id="setor_id" 
                                    name="patrimonio['setor_id']" required="">
                                <option value="" ></option>
                                <?php if ($setores) : ?>	
                                    <?php foreach ($setores as $setor) : ?>					
                                    <option value="<?php echo $setor['id']; ?>"><?php echo $setor['nome']; ?></option>			
                                    <?php endforeach; ?>	
                                <?php else : ?>				
                                    <option>Nenhum registro encontrado</option>		
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="permissao">Emprestável</label></br>
                            <select class="form-control" id="permissao" 
                                    name="patrimonio['permissao']" required="">
                                <option value="" ></option>
                                <option value=0>Não</option>
                                <option value=1>Sim</option>

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


