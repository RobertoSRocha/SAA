<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOCAL;
    addLocal();
?>
<?php
    require_once LOGIN2;
    verificaLoginOperador();
?>
<?php include(HEADER_TEMPLATE_OPERACIONAL); ?>

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
                    <form target="_blank" action=pdfaf.php method="post">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Preencha os campos abaixo para fazer seu requerimento</h3>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome" 
                                   placeholder="Nome do local" 
                                   name="formGraduacao02['nome']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="matricula">Matrícula </label>	      
                            <input type="text" class="form-control" id="matricula" 
                                   placeholder="Matrícula do usuário"
                                   name="formGraduacao02['matricula']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="evento">Evento </label>	      
                            <input type="text" class="form-control" id="evento" 
                                   placeholder="Nome do evento"
                                   name="formGraduacao02['evento']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="titulo_trabalho">Título </label>	      
                            <input type="text" class="form-control" id="titulo_trabalho" 
                                   placeholder="Título do trabalho"
                                   name="formGraduacao02['titulo_trabalho']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="cidade">Cidade </label>	      
                            <input type="text" class="form-control" id="cidade" 
                                   placeholder="Nome da cidade"
                                   name="formGraduacao02['cidade']" required="">	    
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado </label></br>
                            <select class="form-control" id="estado" 
                                    name="formGraduacao02['estado']" required="">
                                <option value="" ></option>
                                <option value=acre>Acre - AC</option>
                                <option value=alagoas>Alagoas - AL</option>
                                <option value=amapa>Amapá - AP</option>
                                <option value=amazonas>Amazonas - AM</option>
                                <option value=bahia>Bahia - BA</option>
                                <option value=ceara>Ceará - CE</option>
                                <option value=distrito_federal>Distrito Federal - DF</option>
                                <option value=espirito_santo>Espírito Santo - ES</option>
                                <option value=goias>Goiás - GO</option>
                                <option value=maranhao>Maranhão - MA</option>
                                <option value=mato_grosso>Mato Grosso - MT</option>
                                <option value=mato_grosso_sul>Mato Grosso do Sul - MS</option>
                                <option value=minas_gerais>Minas Gerais - MG</option>
                                <option value=para>Pará - PA</option>
                                <option value=paraiba>Paraíba - PB</option>
                                <option value=parana>Paraná - PR</option>
                                <option value=pernambuco>Pernambuco - PE</option>
                                <option value=piaui>Piauí - PI</option>
                                <option value=rio_de_janeiro>Rio de Janeiro - RJ</option>
                                <option value=rio_grande_norte>Rio Grande do Norte - RN</option>
                                <option value=rio_grande_sul>Rio Grande do Sul - RS</option>
                                <option value=rondonia>Rondônia - RO</option>
                                <option value=roraima>Roraima - RR</option>
                                <option value=santa_catarina>Santa Catarina - SC</option>
                                <option value=sao_paulo>São Paulo - SP</option>
                                <option value=sergipe>Sergipe - SE</option>
                                <option value=tocantins>Tocantins - TO</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label class="title">
                                        <span class="required">Data do Início do Evento </span>
                                </label>
                                <div class="item-cont">
                                        <input class="large" data-format="dd-mm-aaaa" type="date" name="date" required="required" placeholder="Data de Início"/>
                                        <span class="icon-place"></span>
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="title">
                                        <span class="required">Data do Término do Evento </span>
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

