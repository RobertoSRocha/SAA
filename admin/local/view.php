<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOCAL;
    viewLocal($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-cube"></i> Listagem de Localidades</a></li>
                <li><i class="glyphicon glyphicon-eye-open"></i>
                    <small> Visualizar Local</small>
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
                    <center><h3>Informações do patrimônio</h3></center>
                        <hr />
                        <center><img src="<?php echo BASEURL; ?>dist/img/semFoto.png" 
                                     class="img-rounded" alt="Cinque Terre"></center>
                        <dl class="dl-horizontal">		
                            <dt>Nome:</dt>		
                            <dd><?php echo $local['nome']; ?></dd>	
                            <dt>Rua:</dt>		
                            <dd><?php echo $local['rua']; ?></dd>	
                            <dt>Bairro:</dt>		
                            <dd><?php echo $local['Bairro']; ?></dd>	
                            <dt>Número:</dt>
                            <dd><?php echo $local['numero']; ?></dd>	
                        </dl>	
                        <div id="actions" class="row">		
                            <div class="col-md-12">		  
                                <a href="edit.php?id=<?php echo $local['id']; ?>" class="btn btn-primary">
                                    <i class="fa fa-pencil"></i> Editar</a>
                                <a href="index.php" class="btn btn-default">
                                    <i class="glyphicon glyphicon-arrow-left"></i> Voltar</a>
                            </div>	
                        </div>

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
                                    
                                    
                        