<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
require_once LOGIN2;
verificaLoginAdmin();
?>
<?php

require_once USUARIO;
addImagem();

$msg = false;
?>
<?php include(HEADER_TEMPLATE);

?>

<?php $senha = "mudar123";
$criptografada = md5($senha) ?>

    <section class="content-header">
        <div class="row">
            <div class="col-sm-6 text-left">
                <ol class="breadcrumb">
                    <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                    <li><a href="index.php"><i class="fa fa-users"></i> Listagem de Usuários</a></li>
                    <li><i class="glyphicon glyphicon-plus-sign"></i>
                        <small> Adicionar Usuário</small>
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
                        <h1>Upload de Arquivos</h1>
                        <?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            Arquivo: <input type="file" required name="arquivo">
                            <input type="submit" value="Salvar">
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