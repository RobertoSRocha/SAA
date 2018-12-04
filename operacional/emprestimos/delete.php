<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php
    require_once LOGIN2;
    verificaLoginOperador();
?>
<?php require_once EMPRESTIMOS;
    if (isset($_GET['id'])) {
        delete_emprestimos($_GET['id']);
    } else {
        die("ERRO: ID não definido.");
    } 
?>