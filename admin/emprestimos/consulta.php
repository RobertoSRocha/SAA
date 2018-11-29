<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>

<?php
    require_once LOGIN2;
    verificaLoginAdmin();
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

                    <form>
                        <div class="form-group  ">

                            <input class="CheckboxNome" type="checkbox" value="idProduto" name="checkboxvar"/>
                            <label>Nome</label>
                            <input class="CaixaNome" name="inputquant" type="text"/>


                        </div>
                        <div class="form-group">

                            <input class="CheckboxTombo" type="checkbox" value="idProduto" name="checkboxvar"/>
                            <label>Tombo</label>

                            <input class="CaixaTombo" name="inputquant" type="text"/>


                        </div>

                        <div class="form-group">
                            <input class="CheckboxSetor" type="checkbox" value="idProduto" name="checkboxvar"/>
                            <label>Local: </label>
                            <select class="filtro" id="setor">
                                <option></option>
                                <option>EMCM</option>
                                <option>CLINICA</option>
                                <option>Hospital do Serido</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input class="CheckboxSetor" type="checkbox" value="idProduto" name="checkboxvar"/>
                            <label>Setor: </label>
                            <select class="filtro" id="setor">
                                <option></option>
                                <option>TI</option>
                                <option>Biblioteca</option>
                            </select>

                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<?php include(FOOTER_TEMPLATE); ?>


<script>
    $(function () {
        $(".CaixaNome").keyup(function () {
            if ($(this).val().length > 0) {
                $(this).parent().parent().find(".CheckboxNome").prop("checked", true);
            } else {
                $(this).parent().parent().find(".CheckboxNome").prop("checked", false);
            }
        });

        $(".CaixaTombo").keyup(function () {
            if ($(this).val().length > 0) {
                $(this).parent().parent().find(".CheckboxTombo").prop("checked", true);
            } else {
                $(this).parent().parent().find(".CheckboxTombo").prop("checked", false);
            }
        });
    });
</script>
