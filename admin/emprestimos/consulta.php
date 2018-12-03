<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>

<?php
require_once LOGIN2;
verificaLoginAdmin();
?>
<?php
require_once PATRIMONIO;
//indexPatrimonio();

?>
<?php
require_once LOCAL;
indexLocal();
?>

<?php
require_once SETOR;
indexSetor();
?>

<?php
require_once EMPRESTIMOS;
filtro();
?>


<?php include(HEADER_TEMPLATE); ?>

<section class="content-header">
    <div class="row">
        <div class="col-sm-6 text-left">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><i class="glyphicon glyphicon-search"></i>
                    <small> Consultar Emprestimos</small>
                </li>
            </ol>
        </div>
        <div class="breadcrumb text-right">
            <a class="btn btn-default" href="<?php echo BASEURL; ?>index.php"><i
                        class="glyphicon glyphicon-arrow-left"></i> Voltar</a>
        </div>
    </div>
</section>

<section class="content">
    <!-- *****Alertas de Operações*****-->
    <?php include(ALERT_MSG); ?>
    <!-- Mostra o setor responsável do patrimônio -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header text-center">
                    <h3>Selecione os campos para a busca</h3>
                    <hr/>
                </div>

                <!-- /.box-header -->
                <div class="box-body">

                    <form method="get" action="consulta.php">
                        <div class="form-group  ">

                            <label for="nome"> Nome</label>

                            <input class="CaixaNome" name="nome" type="text"/>


                        </div>
                        <div class="form-group">
                            <label> Tombo </label>
                            <input class="CaixaTombo" name="tombo" type="text"/>
                        </div>

                        <div class="form-group">
                            <label> Local: </label>

                            <select class="filtro" id="local" name="local">
                                <option value=""></option>
                                <option value="2">EMCM</option>
                                <option value="3">CLINICA</option>
                                <option value="4">Hospital do Serido</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Setor: </label>
                            <select class="filtro" id="setor" name="setor">
                                <option value=""></option>
                                <option>TI</option>
                                <option>Biblioteca</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i> Pesquisar
                        </button>
                    </form>
                </div>


                <div class="box text-center">
                    <hr/>
                    <h3>Listagem de itens encontrado</h3>
                    <hr/>
                </div>
                <div class="box-body">

                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th title="Ordenar Tabela">Nome</th>
                            <th title="Ordenar Tabela">Tombo</th>
                            <th title="Ordenar Tabela">Especificação</th>
                            <th title="Ordenar Tabela">Setor</th>
                            <th title="Ordenar Tabela">Local</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if ($itens_emprestimos) : ?>
                                <?php foreach ($itens_emprestimos as $patrimonio) : ?>
                                    <tr>
                                        <td><?php echo $patrimonio['nome']; ?></td>
                                        <td><?php echo $patrimonio['tombo']; ?></td>
                                        <td><?php echo $patrimonio['especificacao']; ?></td>

                                        <td>
                                            <?php if ($setores) : ?>
                                                <?php foreach ($setores as $setor) : ?>
                                                    <?php if ($setor['id'] == $patrimonio['setor_id']) : ?>
                                                        <dd><?php echo $setor['nome']; ?></dd>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($locais) : ?>
                                                <?php foreach ($locais as $local) : ?>
                                                    <?php if ($local['id'] == $setor['local_id']) : ?>
                                                        <dd><?php echo $local['nome']; ?></dd>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>

                                            <?php endif; ?>
                                        </td>
                                        <td><a href="viewconsulta.php?id=<?php echo $patrimonio['id']; ?>"
                                               class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
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
                        <tr style="background: #F4F4F4">
                            <th>FILTROS</th>
                            <th></th>
                            <th></th>
                            <th title="Filtrar por categoria"></th>
                            <th title="Filtrar por permissão"></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include(FOOTER_TEMPLATE); ?>
