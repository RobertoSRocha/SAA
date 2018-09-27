<?php require_once '../../config.php'; ?>


<?php include(HEADER_TEMPLATE); ?>

<!-- Div conteúdo central -->
<div class="content-wrapper">

    <!-- Main conteudoCentral -->
    <section class="content">

        <div class="content-header">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <section class="content-header">

                    <h1>Usuários
                        <small> - Lista de Usuários do sitema</small>
                    </h1>

                </section>
                <ol class="breadcrumb">
                    <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-dashboard"></i>Página Inicial</a></li>
                    <li><i class="fa fa-users"></i>
                        <small> Listagem de Usuário</small>
                    </li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-tools pull-right">
                                <a href="#">
                                    <button type="button" class="btn btn-block btn-primary">Cadastrar Usuário
                                    </button>
                                </a>


                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nome</th>
                                        <th>Matricula</th>
                                        <th>E-mail</th>
                                        <th>Permissão</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Artur Carlos Santiago de Oliveira</td>
                                        <td>2015111111</td>
                                        <td> arturcarlos@gmail.com</td>
                                        <td>Administrador</td>
                                        <td>
                                            <div class="btn-group-xs">
                                                <button type="button" class="btn btn-warning">Editar</button>
                                                <button type="button" class="btn btn-danger">Excluir</button>
                                            </div>
                                        </td>
                                    <tr>
                                        <td>02</td>
                                        <td>GERSON NASCIMENTO PEREIRA</td>
                                        <td>2014112221</td>
                                        <td> gersonnascimento@gmail.com</td>
                                        <td>Administrador</td>
                                        <td>
                                            <div class="btn-group-xs">
                                                <button type="button" class="btn btn-warning">Editar</button>
                                                <button type="button" class="btn btn-danger">Excluir</button>
                                            </div>
                                        </td>
                                    <tr>
                                        <td>03</td>
                                        <td>Roberto de Sousa Rocha</td>
                                        <td>2014000000</td>
                                        <td>robertosrocha@gmail.com</td>
                                        <td>Administrador</td>
                                        <td>
                                            <div class="btn-group-xs">
                                                <button type="button" class="btn btn-warning">Editar</button>
                                                <button type="button" class="btn btn-danger">Excluir</button>
                                            </div>
                                        </td>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>id</th>
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
            <!-- /.content -->
        </div>


    </section>
    <!-- /.content -->

</div>
<?php include FOOTER_TEMPLATE ?>