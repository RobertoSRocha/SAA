<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
require_once USUARIO;
index();
?>
<?php include(HEADER_TEMPLATE); ?>

<section class="content-header" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-sm-6 text-left">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><i class="fa fa-users"></i>
                    <small> Listagem de Usuário</small>
                </li>
            </ol>
        </div>
        <div class="breadcrumb text-right">
            <a class="btn btn-primary" href="add.php">
                <i class="fa fa-plus">
                </i> Novo Usuário</a>
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
                <div class="box-header text-center">
                    <h3>Listagem de usuários do sitema</h3>
                <hr />
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                        <tr>

                            <th>Nome</th>
                            <th>Matricula</th>
                            <th>E-mail</th>
                            <th>Permissão</th>
                            <th class="col-lg-2">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php if ($usuarios) : ?>
                            <?php foreach ($usuarios as $usuario) : ?>
                                <tr>
                                    <td><?php echo $usuario['nome']; ?></td>
                                    <td><?php echo $usuario['matricula']; ?></td>
                                    <td><?php echo $usuario['email']; ?></td>
                                    <?php if ($usuario['permissao'] == 1) : ?>
                                        <td><?php echo "Nível 1 - Administrador"; ?></td>
                                    <?php elseif ($usuario['permissao'] == 2) : ?>
                                        <td><?php echo "Nível 2 - Operador"; ?></td>
                                    <?php else : ?>
                                        <td><?php echo "Nível 3 - Comum"; ?></td>
                                    <?php endif; ?>
                                    <td class="actions text-center">
                                        <a href="view.php?id=<?php echo $usuario['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
                                        <a href="edit.php?id=<?php echo $usuario['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                                        <a href=# class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $usuario['id']; ?>">
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

                                <th>Nome</th>
                                <th>Matricula</th>
                                <th>E-mail</th>
                                <th>Permissão</th>
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