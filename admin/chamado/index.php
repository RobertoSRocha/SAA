<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php
    require_once ACHADOS_E_PERDIDOS;
    indexAchados_e_Perdidos();
?>
<?php
    require_once SETOR;
    indexSetor();
?>
<?php
    require_once LOCAL;
    indexLocal();
?>

<?php include(HEADER_TEMPLATE); ?>











<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>