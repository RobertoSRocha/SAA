<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once PATRIMONIO;
    indexPatrimonio();
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
                <li><i class="fa fa-bank"></i>
                    <small> Listagem de Patrimônios</small>
                </li>
                
            </ol>		
        </div>			
        <div class="breadcrumb text-right">		    	
            <a class="btn btn-primary" href="add.php">
                <i class="fa fa-plus">
                </i> Novo Patrimônio</a>		    	
            <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>		    
        </div>		
    </div>	
</section>

<section class="content">

    <!-- *****Alertas de Operações*****-->
    <?php include(ALERT_MSG); ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header text-center">
                    <h3>Listagem de patrimônios do sitema</h3>
                    <hr/>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            
                            <th>Nome</th>
                            <th>Tombo</th>
                            <th>Especificação</th>
                            <th>Emprestável</th>
                            <th>Setor responsável</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>	
                            <?php if ($patrimonios) : ?>	
                            <?php foreach ($patrimonios as $patrimonio) : ?>		
                                <tr>			
                                    			
                                    <td><?php echo $patrimonio['nome']; ?></td>			
                                    <td><?php echo $patrimonio['tombo']; ?></td>
                                    <td><?php echo substr($patrimonio['especificacao'], 0, 30); 
                                        if(strlen($patrimonio['especificacao']) > 50):?>
                                            <a href="view.php?id=<?php echo $patrimonio['id']; ?>">[...]</a>
                                        <?php endif;?>
                                    </td>
                                    
                                    <!-- Mostra se o patrimônio é emprestável -->
                                    <?php if ($patrimonio['permissao'] == 1) : ?>	
                                        <td>Sim</td>
                                    <?php else : ?>				
                                        <td>Não</td>		
                                    <?php endif; ?>
                                    
                                    <!-- Mostra o setor responsável do patrimônio -->
                                    <?php if ($setores) : ?>	
                                        <?php foreach ($setores as $setor) : ?>
                                            <?php if ($setor['id'] == $patrimonio['setor_id']) : ?>	
                                                <td><?php echo $setor['nome']; ?></td>
                                            <?php endif; ?>                            
                                        <?php endforeach; ?>		
                                    <?php endif; ?>

                                    <td class="actions text-center">
                                        <a href="view.php?id=<?php echo $patrimonio['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>				
                                        <a href="edit.php?id=<?php echo $patrimonio['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>				
                                        <a href=# class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $patrimonio['id']; ?>">
                                            <i class="fa fa-trash"></i> Excluir	</a>			
                                    </td>		
                                </tr>	
                                <?php endforeach; ?>	
                                <?php else : ?>		
                                <tr>			
                                    <td colspan="6">Nenhum patrimônio encontrado</td>		
                                </tr>	
                                <?php endif; ?>	
                        </tbody>
                        <tfoot>
                            <tr>
                                
                                <th>Nome</th>
                                <th>Tombo</th>
                                <th>Especificação</th>
                                <th>Emprestável</th>
                                <th>Setor responsável</th>
                                <th>Ações</th>
                            </tr>
                        </tfoot>
                    </table>
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