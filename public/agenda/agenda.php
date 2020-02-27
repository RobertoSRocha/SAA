<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
require_once FORMULARIO_GRADUACAO;
form01();
?>
<?php include(HEADER_TEMPLATE_PUBLIC); ?>

<section class="content-header">
    <div class="row">
        <div class="col-sm-6 text-left">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i>Página Inicial</a></li>
                <li><i class="ion ion-android-document"></i>
                    <small>Agenda</small>
                </li>
            </ol>
        </div>
        <div class="breadcrumb text-right">
            <a class="btn btn-default" href="<?php echo BASEURL; ?>index.php"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a>
        </div>
    </div>
</section>


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box-body">
                <!-- /.box-header -->

                <div class="box" style="height: 80%;">
                    <iframe src="http://emcm.ufrn.br/agenda/Web/view-schedule.php" width="100%" height="800"
                            frameborder="0"
                            sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"
                            allow="camera *; encrypted-media *;"></iframe>
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
