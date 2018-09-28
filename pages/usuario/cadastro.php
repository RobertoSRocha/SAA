<?php require_once '../../config.php'; ?>
<?php require_once DBAPI; ?>

<?php require_once USUARIO;
index();
?>

<?php include(HEADER_TEMPLATE); ?>

    <section class="content-header">
        <div class="row">
            <div class="col-sm text-left">
                <ol class="breadcrumb">
                    <li><a href="<?php echo BASEURL; ?>index.php"><i class="fa fa-home"></i> Página Inicial</a></li>
                    <li><a href="index.php"><i class="fa fa-users"></i> Listagem de Usuário</a></li>
                    <li><i class="fa fa-user"></i>
                        <small> Cadrastro</small>
                    </li>
                </ol>
            </div>
    </section>

    <section class="content-header">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
    </section>

<?php include FOOTER_TEMPLATE ?>