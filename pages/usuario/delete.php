<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>
<?php require_once USUARIO;
    if (isset($_GET['id'])) {
        deleteUsuario($_GET['id']);
    } else {
        die("ERRO: ID não definido.");
    } 
?>