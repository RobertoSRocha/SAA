<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>



<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="" method="post">
                        <!-- area de campos do form -->
                        <h3 class="text-center">Buscar usuário</h3>
                        <hr/>
                        <div class="form-group">
                            <label for="nome">Nome </label>
                            <input type="text" class="form-control" id="nome"
                                   name="usuario['nome']" required="">
                        </div>
                        <div class="form-group">
                            <label for="matricula">Matrícula </label>
                            <input type="text" class="form-control" id="matricula"
                                   name="usuario['matricula']" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail </label>
                            <input type="text" class="form-control" id="email"
                                   name="usuario['email']" required="">
                        </div>
                        <div id="actions" class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i> Salvar</button>
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


