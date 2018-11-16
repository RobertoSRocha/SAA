</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018 <a href="http://emcm.ufrn.br" target="_blank">Escola Multicampi de Ciências
            Médicas</a>.</strong> Todos os direitos reservados
</footer>

<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo BASEURL; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo BASEURL; ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo BASEURL; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo BASEURL; ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo BASEURL; ?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo BASEURL; ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo BASEURL; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo BASEURL; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo BASEURL; ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo BASEURL; ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo BASEURL; ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo BASEURL; ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo BASEURL; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- DataTables -->
<script src="<?php echo BASEURL; ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo BASEURL; ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo BASEURL; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo BASEURL; ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASEURL; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo BASEURL; ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo BASEURL; ?>dist/js/demo.js"></script>

<script src="<?php echo BASEURL; ?>dist/js/main.js"></script>

<script src="<?php echo BASEURL; ?>dist/js/tabelas.js"></script>

<!-- Tempo de sessão -->
<?php if(isset($_SESSION['id'])): ?>
    <script>
        var tempo = new Number();
        // Tempo em segundos
        //tempo = 1500;
        tempo = 500;
        function startCountdown(){
            // Se o tempo não for zerado
            if((tempo - 1) >= 0){

                    // Pega a parte inteira dos minutos
                    var min = parseInt(tempo/60);
                    // Calcula os segundos restantes
                    var seg = tempo%60;

                    // Formata o número menor que dez, ex: 08, 07, ...
                    if(min < 10){
                            min = "0"+min;
                            min = min.substr(0, 2);
                    }
                    if(seg <=9){
                            seg = "0"+seg;
                    }

                    // Cria a variável para formatar no estilo hora/cronômetro
                    horaImprimivel = '00:' + min + ':' + seg;
                    //JQuery pra setar o valor
                    $("#cronometro").html(horaImprimivel);

                    // Define que a função será executada novamente em 1000ms = 1 segundo
                    setTimeout('startCountdown()',1000);

                    // diminui o tempo
                    tempo--;

            // Quando o contador chegar a zero faz esta ação
            }else {
                    window.open('<?php echo BASEURL;?>model/logout/funcoes.php', '_self');

            }
        }
    // Chama a função ao carregar a tela
    startCountdown();
    </script>
<?php endif; ?>

<!--Tempo das messagens de aletas-->
<script>
    window.setTimeout(function(){
        $("#alertas").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 5000);
</script>

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
                alert("Vixeee, as senhas não conferem!\nDigite as senhas iguais");
                return false;
           }
           else{
               return true;
           }
       }
    }
</script>



</body>
</html>
