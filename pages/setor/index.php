<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
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
                <li><i class="fa fa-cubes"></i>
                    <small> Listagem de Setores</small>
                </li>
            </ol>		
        </div>			
        <div class="breadcrumb text-right">		    	
            <a class="btn btn-primary" href="#">
                <i class="fa fa-plus">
                </i> Novo Setor</a>		    	
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
                        <h3>Lista de setores do sitema</h3>
                        <tr>
                            <th>id</th>
                            <th>Nome</th>
                            <th>Número</th>
                            <th>Local pertencente</th>
                            <th>Usuário responsável</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>	
                            <?php if ($setores) : ?>	
                            <?php foreach ($setores as $setor) : ?>		
                                <tr>			
                                    <td><?php echo $setor['id']; ?></td>			
                                    <td><?php echo $setor['nome']; ?></td>			
                                    <td><?php echo $setor['numero']; ?></td>			
                                    <td><?php echo $setor['local_id']; ?></td>			
                                    <td><?php echo $setor['usuario_id']; ?></td>
                                    <td class="actions">				
                                        <a href="#?id=<?php echo $setor['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>				
                                        <a href="#?id=<?php echo $setor['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>				
                                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $setor['id']; ?>">
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
                                <th>Número</th>
                                <th>Local pertencente</th>
                                <th>Usuário responsável</th>
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