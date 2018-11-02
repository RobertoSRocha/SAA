<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginOperador();
?>
<?php
    require_once USUARIO;
    atualizarSenha();
    verificaID();
?>
<?php include(HEADER_TEMPLATE_OPERACIONAL); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><i class="ion ion-refresh"></i>
                    <small> Atualizar senha</small>
                </li>
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
    
    <!-- *****Alertas de Operações*****-->
    <?php include(ALERT_MSG); ?>
    
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <form action=atualiza_senha.php method="post" name="form_senha">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Preencha os campos abaixo para atualizar sua senha</h3>
                        <hr />
                        <div class="form-group" style="display:none;">	      
                            <input class="form-control" id="id"
                                   value="<?php echo $_SESSION['id']; ?>"
                                   name="id">	    
                        </div>
                        <div class="form-group has-feedback">
                            <label for="senha_atual">Senha atual </label>
                            <input type="password" class="form-control" placeholder="Digite sua senha atual" 
                                   id="senha_atual" name="senha_atual" required="">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="senha">Nova senha </label>
                            <input type="password" class="form-control" placeholder="Digite sua nova senha" 
                                   id="senha" name="senha" required="">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="senha2">Confirme sua nova senha </label>
                            <input type="password" class="form-control" placeholder="Digite sua nova senha novamente" 
                                   id="senha2" name="senha2" required="">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div id="actions" class="row">	    
                            <div class="col-md-12">	      
                                <button type="submit" class="btn btn-primary" onclick="return validarSenha();">
                                    <i class="ion ion-refresh"></i> Atualizar senha</button>
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

