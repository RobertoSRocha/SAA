<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN;
    verificaLoginOperador();
?>
<?php include(HEADER_TEMPLATE_OPERACIONAL); ?>
    <!-- Main conteudoCentral -->
    <section class="content">
        <?php include(ALERT_MSG); ?>
        <img src="../dist/img/saa.png" class="img-responsive" alt="User Image">
    </section>
    <!-- /.content -->
<?php include(FOOTER_TEMPLATE); ?>

    
    