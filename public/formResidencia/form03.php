<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOCAL;
    addLocal();
?>
<?php include(HEADER_TEMPLATE_PUBLIC); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-edit"></i> Listagem dos formulários</a></li>
                <li><i class="ion ion-android-document"></i>
                    <small> Formulário de Troca de Plantões</small>
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
                    <form action=add.php method="post">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Preencha os campos abaixo para fazer seu requerimento</h3>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome" 
                                   placeholder="Nome do requisitante" 
                                   name="formResidencia03['nome']" required="">	    
                        </div>
                        <div class="form-group">
                            <label for="area_atuacao">Área de Atuação</label></br>
                            <select class="form-control" id="area_atuacao" 
                                    name="formResidencia03['area_atuacao']" required="">
                                <option value="" ></option>
                                <option value=coordenador>Saúde Materno-Infantil</option>
                                <option value=professor>Atenção Básica</option>

                            </select>
                        </div>
                        <div class="form-group">	      
                            <label for="matricula">Matrícula </label>	      
                            <input type="number" class="form-control" id="matricula" 
                                   placeholder="Matrícula do requisitante"
                                   name="formResidencia03['matricula']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="justificativa">Justificativa </label>	      
                            <textarea class="form-control" id="justificativa" 
                                      placeholder="Digite a sua justificativa"
                                      rows="7" name="formResidencia03['justificativa']" required=""></textarea>	    
                        </div>
                        <div class="form-group">
                                <label class="title">
                                        <span class="required">Do Dia </span>
                                </label>
                                <div class="item-cont">
                                        <input class="large" data-format="dd-mm-aaaa" type="date" name="date" required="required" placeholder="Data de Início"/>
                                        <span class="icon-place"></span>
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="title">
                                        <span class="required">Para o Dia </span>
                                </label>
                                <div class="item-cont">
                                        <input class="large" data-format="dd-mm-aaaa" type="date" name="date1" required="required" placeholder="Data de Término"/>
                                        <span class="icon-place"></span>
                                </div>
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

