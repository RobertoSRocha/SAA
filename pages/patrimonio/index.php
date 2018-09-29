<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
require_once PATRIMONIO;
indexPatrimonio();
?>	
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">		
    <div class="row">			
        <div class="col-sm-6 text-left">				
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-dashboard"></i>Página Inicial</a></li>
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

<?php if (!empty($_SESSION['message'])) : ?>		
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">			
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo $_SESSION['message']; ?>		
    </div>		
    <?php clear_messages(); ?>	
<?php endif; ?>	


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <h3>Lista de patrimônios do sitema</h3>
                        <hr />
                        <tr>
                            <th>id</th>
                            <th>Nome</th>
                            <th>Tombo</th>
                            <th>Especificação</th>
                            <th>Permissão</th>
                            <th>Setor responsável</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>	
                            <?php if ($patrimonios) : ?>	
                            <?php foreach ($patrimonios as $patrimonio) : ?>		
                                <tr>			
                                    <td><?php echo $patrimonio['id']; ?></td>			
                                    <td><?php echo $patrimonio['nome']; ?></td>			
                                    <td><?php echo $patrimonio['tombo']; ?></td>			
                                    <td><?php echo $patrimonio['especificacao']; ?></td>			
                                    <td><?php echo $patrimonio['permissao']; ?></td>
                                    <td><?php echo $patrimonio['setor_id']; ?></td>
                                    <td class="actions">				
                                        <a href="#?id=<?php echo $patrimonio['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>				
                                        <a href="#?id=<?php echo $patrimonio['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>				
                                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $patrimonio['id']; ?>">
                                            <i class="fa fa-trash"></i> Excluir	</a>			
                                    </td>		
                                </tr>	
                                <?php endforeach; ?>	
                                <?php else : ?>		
                                <tr>			
                                    <td colspan="6">Nenhum registro encontrado.</td>		
                                </tr>	
                                <?php endif; ?>	
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Tombo</th>
                                <th>Especificação</th>
                                <th>Permissão</th>
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

<?php include(FOOTER_TEMPLATE); ?>