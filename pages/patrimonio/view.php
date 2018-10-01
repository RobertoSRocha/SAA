<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once PATRIMONIO;
    view($_GET['id']);
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
                <li><i class="glyphicon glyphicon-eye-open"></i>
                    <small> Visualizar Patrimônio</small>
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
                    <center><h3>informações do patrimônio</h3></center>
                        <hr />	      
                        <dl class="dl-horizontal">		
                            <dt>Nome:</dt>		
                            <dd><?php echo $patrimonio['nome']; ?></dd>	
                            <dt>Especificação:</dt>		
                            <dd><?php echo $patrimonio['especificacao']; ?></dd>	
                            <dt>Tombo:</dt>		
                            <dd><?php echo $patrimonio['tombo']; ?></dd>	
                            <dt>Emprestável:</dt>
                            <!-- Mostra se o patrimônio é emprestável -->
                            <?php if ($patrimonio['permissao'] == 1) : ?>	
                                <dd>Sim</dd>
                            <?php else : ?>				
                                <dd>Não</dd>		
                            <?php endif; ?>
                            <dt>Setor:</dt>
                            <!-- Mostra o setor responsável do patrimônio -->
                            <?php if ($setores) : ?>	
                                <?php foreach ($setores as $setor) : ?>
                                    <?php if ($setor['id'] == $patrimonio['setor_id']) : ?>	
                                        <dd><?php echo $setor['nome']; ?></dd>
                                    <?php endif; ?>                            
                                <?php endforeach; ?>	
                            <?php else : ?>				
                                <dd>Nenhum registro encontrado</dd>		
                            <?php endif; ?>
                            
                        </dl>	
                        <div id="actions" class="row">		
                            <div class="col-md-12">
                                <a href="edit.php?id=<?php echo $patrimonio['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
                                <a href="index.php" class="btn btn-default">Voltar</a>		
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


