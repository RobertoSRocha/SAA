
<!-- *****Alertas de Operações*****-->
<?php if (!empty($_SESSION['message'])) : ?>
    <div id="alertas" class="alert
         alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
        <?php echo $_SESSION['message']; ?>
    </div>
    <?php unset($_SESSION['message']) ?>
<?php endif; ?>