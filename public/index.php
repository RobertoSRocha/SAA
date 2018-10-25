<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
<?php require_once LOGIN;
    verificaLoginPublic();
?>
<?php require_once LOGIN; 
    fazerLogin();
?>
<?php include(HEADER_TEMPLATE_PUBLIC); ?>
<!-- Main conteudoCentral -->
    <section class="content">

        <?php include(ALERT_MSG); ?>
        <img src="<?php echo BASEURL; ?>dist/img/saa.png" class="img-responsive" alt="User Image">
    </section>
<!-- /.content -->
<?php include(FOOTER_TEMPLATE); ?>