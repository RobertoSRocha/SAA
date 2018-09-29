<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once PATRIMONIO;
    addPatrimonio();
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
                <li><i class="glyphicon glyphicon-plus-sign"></i>
                    <small> Adicionar Patrimônio</small>
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
                    <form action="add.php" method="post">
                        <!-- area de campos do form -->
                        <center><h3>Preencha os campos abaixo para adicionar um patrimônio</h3></center>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" name="patrimonio['nome']">	    
                        </div>
                        <div class="form-group">	      
                            <label for="especificacao">Especificação </label>	      
                            <textarea class="form-control" rows="3" name="patrimonio['especificacao']"></textarea>	    
                        </div>
                        <div class="form-group">	      
                            <label for="tombo">Tombo </label>	      
                            <input type="text" class="form-control" name="patrimonio['tombo']">	    
                        </div>
                        <div class="form-group">
                            <label for="permissao">Setor responsável </label>
                            <select class="form-control" id="permissao" name="patrimonio['permissao']">
                                <?php if ($setores) : ?>	
                                    <?php foreach ($setores as $setor) : ?>					
                                    <option><?php echo $setor['nome']; ?></option>			
                                    <?php endforeach; ?>	
                                <?php else : ?>				
                                    <option>Nenhum registro encontrado</option>		
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="permissao">Emprestável </label>
                            <select class="form-control" id="permissao" name="patrimonio['permissao']">
                                <option>Sim</option>
                                <option>Não</option>
                            </select>
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