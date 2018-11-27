<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once FORMULARIO_GRADUACAO;
    form02();
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-edit"></i> Listagem dos Formulários</a></li>
                <li><i class="ion ion-android-document"></i>
                    <small> Auxílio Financeiro</small>
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
                    <form target="_blank" action=form02.php method="post">
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
                                   placeholder="Matrícula do usuário"
                                   name="matricula" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="evento">Evento </label>	      
                            <input type="text" class="form-control" id="evento" 
                                   placeholder="Nome do evento"
                                   name="evento" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="titulo_trabalho">Título </label>	      
                            <input type="text" class="form-control" id="titulo_trabalho" 
                                   placeholder="Título do trabalho"
                                   name="titulo_trabalho" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="cidade">Cidade </label>	      
                            <input type="text" class="form-control" id="cidade" 
                                   placeholder="Nome da cidade"
                                   name="cidade" required="">	    
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado </label></br>
                            <select class="form-control" id="estado" 
                                    name="estado" required="">
                                <option value="true" ></option>
                                <option value="AC">Acre - AC</option>
                                <option value="AL">Alagoas - AL</option>
                                <option value="AP">Amapá - AP</option>
                                <option value="AM">Amazonas - AM</option>
                                <option value="BA">Bahia - BA</option>
                                <option value="CE">Ceará - CE</option>
                                <option value="DF">Distrito Federal - DF</option>
                                <option value="ES">Espírito Santo - ES</option>
                                <option value="GO">Goiás - GO</option>
                                <option value="MA">Maranhão - MA</option>
                                <option value="MT">Mato Grosso - MT</option>
                                <option value="MS">Mato Grosso do Sul - MS</option>
                                <option value="MG">Minas Gerais - MG</option>
                                <option value="PA">Pará - PA</option>
                                <option value="PB">Paraíba - PB</option>
                                <option value="PR">Paraná - PR</option>
                                <option value="PE">Pernambuco - PE</option>
                                <option value="PI">Piauí - PI</option>
                                <option value="RJ">Rio de Janeiro - RJ</option>
                                <option value="RN">Rio Grande do Norte - RN</option>
                                <option value="RS">Rio Grande do Sul - RS</option>
                                <option value="RO">Rondônia - RO</option>
                                <option value="RR">Roraima - RR</option>
                                <option value="SC">Santa Catarina - SC</option>
                                <option value="SP">São Paulo - SP</option>
                                <option value="SE">Sergipe - SE</option>
                                <option value="TO">Tocantins - TO</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label class="title">
                                        <span class="required">Data do Início do Evento </span>
                                </label>
                                <div class="item-cont">
                                        <input class="large" data-format="dd-mm-aaaa" type="date" name="data1" required="required" placeholder="Data de Início"/>
                                        <span class="icon-place"></span>
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="title">
                                        <span class="required">Data do Término do Evento </span>
                                </label>
                                <div class="item-cont">
                                        <input class="large" data-format="dd-mm-aaaa" type="date" name="data2" required="required" placeholder="Data de Término"/>
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

