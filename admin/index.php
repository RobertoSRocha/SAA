<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN;
    verificaLoginAdmin();
?>
<?php include(HEADER_TEMPLATE); ?>
    <!-- Main conteudoCentral -->
    <section class="content">

        <!-- *****Alertas de Operações*****-->
        <?php include(ALERT_MSG); ?>
        <img src="../dist/img/saa.png" class="img-responsive" alt="User Image">
    </section>
    <!-- /.content -->
<?php include(FOOTER_TEMPLATE); ?>

    
    