<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once EMPRESTIMOS;
    add_emprestimos();
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-search"></i> Listagem de Itens Emprestados</a></li>
                <li><i class="glyphicon glyphicon-plus-sign"></i>
                    <small> Adicionar Empréstimo</small>
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
                    <h3 class="text-center">Preencha os campos abaixo para adicionar um item perdido</h3>
                    <hr />
                    <div class="dataTables_length">
                        <form method="post">
                            <div class="form-group">
                                <!--Ordenar valor do select-->
                                <?php
                                $filtro = 1;
                                if (isset($_POST['filtro'])) {
                                    $filtro = $_POST['filtro'];
                                }
                                ?>
                                <label class="col-form-label">Documento do usuário: </label>
                                <input type="text" id="nome" 
                                   placeholder="Documento do usuário" 
                                   name="achados_e_perdidos['nome']" required=""
                                   maxlength="100">
                                <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-search">Pesquisar</i></button>
                            </div>

                        </form>
                    </div>   
                    <form action=add.php method="post" enctype="multipart/form-data">
                        <!-- area de campos do form -->	      
                        <div class="form-group">	      
                            <label for="nome">Documento do usuário </label>	      
                            <input type="text" class="form-control" id="nome" 
                                   placeholder="Nome do item perdido" 
                                   name="achados_e_perdidos['nome']" required=""
                                   maxlength="100">	    
                        </div>
                        <div class="form-group">	      
                            <label for="descricao">Descrição do Item Perdido </label>	      
                            <textarea class="form-control" id="descricao" 
                                      placeholder="Descricao do item perdido"
                                      rows="3" name="achados_e_perdidos['descricao']" required=""></textarea>	    
                        </div>
                        <div class="form-group">
                            <label for="id_setor">Setor onde o item foi encontrado </label>
                            <select class="form-control" id="id_setor" 
                                    name="achados_e_perdidos['id_setor']" required="">
                                <option value="" ></option>
                                <?php if ($setores) : ?>	
                                    <?php foreach ($setores as $setor) : ?>					
                                    <option value="<?php echo $setor['id']; ?>"><?php echo $setor['nome']; ?> - <?php echo $nome_setor = (nome_setor_local($setor['local_id'])); ?></option>			
                                    <?php endforeach; ?>		
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                                <label class="title">
                                        <span class="required">Data que o item foi encontrado </span>
                                </label>
                                <div class="item-cont">
                                        <input class="large" data-format="dd-mm-aaaa" type="date" name="achados_e_perdidos['data_achado']" id="data_achado" 
                                               required="required"/>
                                        <span class="icon-place"></span>
                                </div>
                        </div>
                        <div class="form-group" style="display:none;">	      
                            <label for="status">Status </label>	      
                            <input type="number" class="form-control" id="status"
                                   value="1"
                                   name="achados_e_perdidos['status']">	    
                        </div>
                        <div class="form-group">
                            <label for="imagem">Foto do Item </label>
                            <input type="file" accept="image/png, image/jpeg, image/jpg" name='img'>

                        </div>
                        <div id="actions" class="row">	    
                            <div class="col-md-12">	      
                                <button type="submit" class="btn btn-primary">
                                <i class="fa fa-file-pdf-o"></i> Cadastrar</button>
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