<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginOperador();
?>
<?php
    require_once USUARIO;
    index();
?>
<?php
    require_once EMPRESTIMOS;
    edit_emprestimos();
?>
<?php
    require_once PATRIMONIO;
    indexPatrimonio();
?>

<?php include(HEADER_TEMPLATE_OPERACIONAL); ?>

<section class="content-header">
    <!-- *****Alertas de Operações*****-->
    <?php include(ALERT_MSG); ?>		
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
                    <h3 class="text-center">Edite nos campos para devolver o item</h3>
                    <hr />
                    <?php if ($patrimonios) : ?>	
                        <?php foreach ($patrimonios as $patrimonio) : ?>
                            <?php if ($patrimonio['id'] == $item_emprestimos['patrimonio_id']) : ?>
                                <div class="form-group">	      
                                    <label for="nome">Nome - Tombo </label>	      
                                    <input type="text" class="form-control" id="nome"
                                           value="<?php echo $patrimonio['nome']; ?> - <?php echo $patrimonio['tombo']; ?>"
                                           name="emprestimos['status']"
                                           disabled="">	    
                                </div>
                            <?php endif; ?>                            
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="form-group">	      
                        <label for="nome">Prazo de devolução </label>	      
                        <input type="text" class="form-control" id="nome"
                               value="<?php echo date('d/m/Y', strtotime($item_emprestimos['data_prazo_devolucao'])); ?> - <?php echo verifica_atraso($item_emprestimos['id']); ?>"
                               name="emprestimos['status']"
                               disabled="">	    
                    </div>
                    <div class="form-group">
                        <input class="form-check-input" type="radio" name="FlgPontua" value="Sim">
                        <label class="form-check-label" for="inlineRadio2">Outro usuário devolveu</label>
                        <input type="radio" name="FlgPontua" value="Nao"  checked="">
                        <label class="form-check-label" for="inlineRadio1">O mesmo usuário devolveu</label>
                    </div>
                    <!-- class outro usuario -->
                    <div class="outro_usuario dataTables_length">
                        <form action="devolucao.php?id=<?php echo $item_emprestimos['id']; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <!-- Usuário que entregou -->
                                <label for="user_entregou">Usuário que entregou </label>
                                <select class="form-control" id="user_entregou" 
                                        name="emprestimos['user_entregou']" required="">
                                    <option value="" ></option>
                                    <?php if ($usuarios) : ?>
                                        <?php foreach ($usuarios as $usuario) : ?>
                                            <option value="<?php echo $usuario['id']; ?>"><?php echo $usuario['nome'];?> - <?php echo $usuario['matricula'];?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                                <!-- data de devolucao -->
                                <div class="form-group" style="display:none;">	      
                                    <input type="text" class="large" id="data_devolucao"
                                           value="<?php echo $data_atual = date('y-m-d'); ?>"
                                           name="emprestimos['data_devolucao']">
                                </div>
                                <!-- Usuário que recebeu -->
                                <div class="form-group" style="display:none;">	      
                                    <input type="number" class="form-control" id="user_recebeu"
                                           value="<?php echo $_SESSION['id']; ?>"
                                           name="emprestimos['user_recebeu']">	    
                                </div>
                                <!-- Status do empréstimo -->
                                <div class="form-group" style="display:none;">	      
                                    <input type="text" class="form-control" id="status"
                                           value="devolvido"
                                           name="emprestimos['status']">	    
                                </div>
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
                    <!-- class mesmo usuario -->
                    <div class="mesmo_usuario dataTables_length">
                        <form action="devolucao.php?id=<?php echo $item_emprestimos['id']; ?>" method="post" enctype="multipart/form-data">
                            <?php if ($usuarios) : ?>
                                <?php foreach ($usuarios as $usuario) : ?>
                                    <?php if ($usuario['id'] == $item_emprestimos['user_solicitou']) { ?>
                                        <div class="form-group">	      
                                            <label for="nome">Emprestado para </label>	      
                                            <input type="text" class="form-control" id="nome"
                                                   value="<?php echo $usuario['nome']; ?>"
                                                   name="emprestimos['status']"
                                                   disabled="disabled">	    
                                        </div>
                                        <div class="form-group">	      
                                            <label for="nome">Matrícula </label>	      
                                            <input type="text" class="form-control" id="nome"
                                                   value="<?php echo $usuario['matricula']; ?>"
                                                   name="emprestimos['status']"
                                                   disabled="disabled">	    
                                        </div>
                                        <!-- Usuário que entregou -->
                                        <div class="form-group" style="display:none;">	      
                                            <input type="number" class="form-control" id="user_entregou"
                                                   value="<?php echo $usuario['id']; ?>"
                                                   name="emprestimos['user_entregou']">	    
                                        </div>
                                        <!-- data de devolucao -->
                                        <div class="form-group" style="display:none;">	      
                                            <input type="text" class="large" id="data_devolucao"
                                                   value="<?php echo $data_atual = date('y-m-d'); ?>"
                                                   name="emprestimos['data_devolucao']">
                                        </div>
                                        <!-- Usuário que recebeu -->
                                        <div class="form-group" style="display:none;">	      
                                            <input type="number" class="form-control" id="user_recebeu"
                                                   value="<?php echo $_SESSION['id']; ?>"
                                                   name="emprestimos['user_recebeu']">	    
                                        </div>
                                        <!-- Status do empréstimo -->
                                        <div class="form-group" style="display:none;">	      
                                            <input type="text" class="form-control" id="status"
                                                   value="devolvido"
                                                   name="emprestimos['status']">	    
                                        </div>
                                    <?php } endforeach; ?>
                            <?php endif; ?>
                            <div id="actions" class="row">	    
                                <div class="col-md-12">	      
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fa fa-repeat"></i> Devolver</button>
                                    <a href="index.php" class="btn btn-default"><i class="fa fa-close"></i> Cancelar</a>
                                </div>	  
                            </div>
                        </form>
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

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>


