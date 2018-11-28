<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<section class="content">
    <!-- *****Alertas de Operações*****-->
    <?php include(ALERT_MSG); ?>
    <!-- Mostra o setor responsável do patrimônio -->
    <div class="row">
        
        
    </div>
</section>
<?php include(FOOTER_TEMPLATE); ?>