<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once EMPRESTIMOS;
    edit_emprestimos();
?>
<?php
    require_once PATRIMONIO;
    indexPatrimonio();
?>
<?php
    require_once USUARIO;
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="glyphicon glyphicon-list-alt"></i> Listagem de Itens Emprestados</a></li>
                <li><i class="glyphicon glyphicon-pencil"></i>
                    <small> Devolver empréstimo</small>
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
                    <form action="edit.php?id=<?php echo $item_emprestimos['id']; ?>" method="post" enctype="multipart/form-data">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Edite nos campos para devolver o item</h3>
                        <hr />
                        <?php if ($patrimonios) : ?>	
                        <?php foreach ($patrimonios as $patrimonio) : ?>
                        <?php if ($patrimonio['id'] == $item_emprestimos['patrimonio_id']) : ?>
                        <div class="form-group">	      
                            <label for="nome">Nome - Tombo </label>	      
                            <input type="text" class="form-control" id="nome"
                                   value="<?php echo $patrimonio['nome']; ?> - <?php echo $patrimonio['tombo']; ?>"
                                   name="achados_e_perdidos['nome']" disabled="">	    
                        </div>
                        <?php endif; ?>                            
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="FlgPontua" value="Sim" checked>
                            <label class="form-check-label" for="inlineRadio2">Outro usuário devolveu</label>
                            <input type="radio" name="FlgPontua" value="Nao">
                            <label class="form-check-label" for="inlineRadio1">O mesmo usuário devolveu</label>
                        </div>
                        <div class="camposExtras dataTables_length">
                            <form method="post" action=add.php>
                                <div class="form-group">
                                    <label class="col-form-label">Matricula/SIAPE do usuário: </label>
                                    <input type="number" id="matricula" 
                                       placeholder="Matricula/SIAPE do usuário" 
                                       name="matricula" required=""
                                       >
                                    <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-search">Pesquisar</i></button>
                                </div>
                            </form>
                        </div>
                        <div class="form-group" style="display:none;">	      
                            <label for="status">Status </label>	      
                            <input type="text" class="form-control" id="status"
                                   value="devolvido"
                                   name="emprestimos['status']">	    
                        </div>
                        <div id="actions" class="row">	    
                            <div class="col-md-12">	      
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i> Salvar</button>
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


