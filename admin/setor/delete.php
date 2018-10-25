<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginAdmin();
?>
<?php require_once SETOR;
    if (isset($_GET['id'])) {
        deleteSetor($_GET['id']);
    } else {
        die("ERRO: ID não definido.");
    } 
?>