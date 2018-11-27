<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once ACHADOS_E_PERDIDOS;
    editAchados_e_Perdidos();
?>
<?php
    require_once SETOR;
    indexSetor();
?>
<?php
    require_once LOCAL;
    indexLocal();
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><a href="index.php"><i class="fa fa-users"></i> Listagem de Itens perdidos</a></li>
                <li><i class="glyphicon glyphicon-pencil"></i>
                    <small> Editar Itens perdidos</small>
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
                    <form action="edit.php?id=<?php echo $item['id']; ?>" method="post" enctype="multipart/form-data">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Edite nos campos abaixo as informações do item</h3>
                        <hr />	      
                        <div class="form-group">	      
                            <label for="nome">Nome </label>	      
                            <input type="text" class="form-control" id="nome"
                                   value="<?php echo $item['nome']; ?>"
                                   name="achados_e_perdidos['nome']" required="">	    
                        </div>
                        <div class="form-group">	      
                            <label for="descricao">Descrição </label>	      
                            <textarea class="form-control" id="descricao"
                                      rows="3" name="achados_e_perdidos['descricao']" required=""><?php echo trim($item['descricao']); ?></textarea>	    
                        </div>
                        <div class="form-group">
                            <label for="id_setor">Setor onde o item foi encontrado </label>
                            <select class="form-control" id="id_setor" 
                                    name="achados_e_perdidos['id_setor']" required="">
                                <?php if ($setores) : ?>	
                                    <?php foreach ($setores as $setor) : ?>
                                        <?php if($setor['id'] == $achados_e_perdidos['id_setor']){?>
                                            <option value="<?php echo $setor['id']; ?>"><?php echo $setor['nome']; ?> - <?php echo $nome_setor = (nome_setor_local($setor['local_id'])); ?></option>			
                                    <?php } endforeach; ?>
                                    <?php foreach ($setores as $setor) : ?>
                                        <?php if($setor['id'] != $achados_e_perdidos['id_setor']){?>
                                            <option value="<?php echo $setor['id']; ?>"><?php echo $setor['nome']; ?> - <?php echo $nome_setor = (nome_setor_local($setor['local_id'])); ?></option>			
                                    <?php } endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label></br>
                            <select class="form-control" 
                                    name="achados_e_perdidos['status']" required="" 
                                    id="status" onchange="optionCheck()">
                                <!-- Mostra permissão do usuário -->
                                <?php if ($item['status'] == 1) : ?>	
                                    <option value=1>Item perdido</option>
                                    <option value=0>Item devolvido</option>
                                <?php else : ?>				
                                    <option value=0>Item devolvido</option>
                                    <option value=1>Item perdido</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group" id="nome_pessoa_entregou" style="visibility:hidden;">	      
                            <label for="nome_pessoa_entregou">Nome da pessoa que recebeu o item </label>	      
                            <input type="text" class="form-control"
                                   value="<?php echo $item['nome_pessoa_entregou']; ?>"
                                   name="achados_e_perdidos['nome_pessoa_entregou']">	    
                        </div>
                        <div class="form-group" id="documento_pessoa_entregou" style="visibility:hidden;">	      
                            <label for="documento_pessoa_entregou">Documento da pessoa que recebeu o item </label>	      
                            <input type="text" class="form-control"
                                   value="<?php echo $item['documento_pessoa_entregou']; ?>"
                                   name="achados_e_perdidos['documento_pessoa_entregou']">
                            <input class="form-check-input" type="radio" name="achados_e_perdidos['tipo_documento']" id="inlineRadio1" value="MATRICULA">
                            <label class="form-check-label" for="inlineRadio1">MATRICULA</label>
                            <input class="form-check-input" type="radio" name="achados_e_perdidos['tipo_documento']" id="inlineRadio2" value="RG">
                            <label class="form-check-label" for="inlineRadio2">RG</label>
                            <input class="form-check-input" type="radio" name="achados_e_perdidos['tipo_documento']" id="inlineRadio3" value="CPF">
                            <label class="form-check-label" for="inlineRadio3">CPF</label>
                            <input class="form-check-input" type="radio" name="achados_e_perdidos['tipo_documento']" id="inlineRadio4" value="CNH">
                            <label class="form-check-label" for="inlineRadio4">CNH</label>
                            <input class="form-check-input" type="radio" name="achados_e_perdidos['tipo_documento']" id="inlineRadio5" value="OUTRO">
                            <label class="form-check-label" for="inlineRadio5">OUTRO</label>
                        </div>
                        <div class="form-group" id="telefone" style="visibility:hidden;">	      
                            <label for="telefone">Telefone da pessoa que recebeu o item </label>	      
                            <input type="text" class="form-control"
                                   value="<?php echo $item['telefone']; ?>"
                                   name="achados_e_perdidos['telefone']">	    
                        </div>
                        <div class="form-group">
                            <?php if ($item['img']!= null){?>
                                <img src="<?php echo BASEURL; ?>imagens/achados_e_perdidos/<?php echo $item['img']; ?>"
                                     class="img-rounded view_img_1" alt="Cinque Terre"/>
                            <?php }else{?>
                                <img src="<?php echo BASEURL; ?>dist/img/semFoto.png?>"
                                     class="img-rounded view_img_1" alt="Cinque Terre"/>
                            <?php }?>
                        </div>

                        <div class="form-group">
                            <label for="imagem">Alterar Imagem</label>
                            <input type="file" accept="image/png, image/jpeg, image/jpg" name='img'>
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


