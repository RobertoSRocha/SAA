<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>

<?php
    require_once LOGIN2;
    verificaLoginAdmin();
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

            </div>
        </div>
    </div>
</section>
<?php include(FOOTER_TEMPLATE); ?>
