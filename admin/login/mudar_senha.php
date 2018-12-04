<?php require_once '../../config.php'; ?>
<?php
    require_once LOGIN;
    atualizarSenha();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SAA-EMCM</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>dist/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo BASEURL; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <img src="<?php echo BASEURL; ?>dist/img/senha.png" class="img-circle" alt="User Image" style="height: 30%; width: 30%;">
                <label>Altere sua senha</label>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Mude sua senha para ter acessoa ao sistema</p>
                <form action="mudar_senha.php" method="post" name="form_senha">
                    <div class="form-group" style="display:none;">	      
                        <input class="form-control" id="id"
                                   value="<?php echo $_SESSION['id']; ?>"
                                   name="id">	    
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Digite sua nova senha" 
                               id="senha" name="senha" required="">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Digite sua nova senha novamente" 
                               id="senha2" name="senha2" required="">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    
                    
                    <div id="actions" class="row">	    
                        <div class="col-md-12">	      
                            <button type="submit" class="btn btn-primary" onclick="return validarSenha();">
                                <i class="fa fa-check"></i> Alterar</button>
                            <a href="<?php echo BASEURL;?>model/logout/funcoes.php?id=sair" class="btn btn-default">
                                <i class="fa fa-close"></i> Cancelar</a>	    
                        </div>	  
                    </div>
                </form>


            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
        <script>
            function validarSenha(){
               var senha = form_senha.senha.value;
               var senha2 = form_senha.senha2.value;
               if(senha === "mudar123"){
                   alert("Vixeee, você não poderá usar a senha padrão como sua senha.\nPor favor, digite uma senha diferente");
                   return false;
               }else if(senha === ""){
                   alert("Vixeee, sem digitar você nos complica.\nPor favor, digite sua senha");
                   return false;
               }else if(senha.length < 5){
                   alert("Vixeee, sua senha deve conter no mínimo 6 caracteres.\nPor favor, digite uma senha diferente");
                   return false;
               }else{
                   if(senha !== senha2){
                        alert("Vixeee, ss senhas não conferem!\nDigite as senhas iguais");
                        return false;
                   }
                   else{
                       return true;
                   }
               }
            }
        </script>
        <!-- jQuery 3 -->
        <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="../../plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
    </body>
</html>
