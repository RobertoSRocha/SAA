<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once FORMULARIO_GRADUACAO;
    form01();
?>
<?php include(HEADER_TEMPLATE_PUBLIC); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-edit"></i> Listagem dos Formulários</a></li>
                <li><i class="ion ion-android-document"></i>
                    <small> Requerimentos Gerais</small>
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
                    <form target="_blank" action=form01.php method="post">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Preencha os campos abaixo para fazer seu requerimento</h3>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome" 
                                   placeholder="Nome do requisitante" 
                                   name="nome" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="matricula">Matrícula </label>	      
                            <input type="number" class="form-control" id="matricula" 
                                   placeholder="Matrícula do requisitante"
                                   name="matricula" required="">	    
                        </div>
                        <div class="form-group">
                            <label for="destinatario">Destinatário</label></br>
                            <select class="form-control" id="destinatario" 
                                    name="destinatario" required="">
                                <option value="" ></option>
                                <option value="Coordenador">Ao Coordenador do Módulo</option>
                                <option value="Professor">Ao Professor</option>
                                <option value="Diretor">Ao Diretor</option>
                                <option value="Secretário">Ao Secretário</option>

                            </select>
                        </div>
                        <div class="form-group">	      
                            <label for="nome_destinatario">Nome do Destinatário</label>	      
                            <input type="text" class="form-control" id="nome_destinatario" 
                                   placeholder="Nome do destinatario" 
                                   name="nome_destinatario" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="requerimento">Requerimento </label>	      
                            <textarea class="form-control" id="requerimento" 
                                      placeholder="Descreva o tipo de requerimento"
                                      rows="7" name="requerimento" required=""></textarea>	    
                        </div>
                        <div id="actions" class="row">	    
                            <div class="col-md-12">	      
                                <button type="submit" class="btn btn-primary">
                                <i class="fa fa-file-pdf-o"></i> Gerar PDF para requisição</button>
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
