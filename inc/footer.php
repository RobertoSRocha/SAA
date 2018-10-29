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

<!--Ordenacao da tabela-->
<script>
    $(function () {
        $('#example1').DataTable({
            "language":
                {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "Resultados por página: _MENU_",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
        });
    })
</script>

<!--Tempo das messagens de aletas-->
<script>
    window.setTimeout(function(){
        $("#alertas").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 3000);
</script>

<!--  Modal -->

<div id="login-senha" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel">	
    <div class="modal-dialog" role="document">	    
        <div class="modal-content">	      
            <div class="modal-header">	        
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span></button>	        
                <h4 class="modal-title text-center" id="modalLabel">Altere sua senha padrão</h4>	      
            </div>	      
            <div class="modal-body">
                <form class="modal-content animate" method="post" action="<?php echo BASEURL;  ?>operacional/index.php">
                    <div class="user-header text-center">
                        <img src="<?php echo BASEURL;  ?>dist/img/senha.png" class="img-circle" alt="User Image" style="height: 30%; width: 30%;">
                    </div>
                    <div class="form-group">
                        <label for="senha"><b>Digite sua nova senha</b></label>
                        <input type="password" class="form-control" placeholder="Digite sua nova senha" 
                               id="senha" name="senha" required="">

                        <label for="senha2"><b>Digite novamente sua nova senha</b></label>
                        <input type="password" class="form-control" placeholder="Digite sua nova senha" 
                               id="senha2" name="senha2" required="">

                        <div class="form-group" style="display:none;">
                            <label for="id"><b>id</b></label>
                            <input class="form-control" id="id"
                                   value="<?php echo $_SESSION[id];  ?>"
                                   name="id">	    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-sign-in"></i> Cadastrar senha</button>
                        <a id="cancel" class="btn btn-default" data-dismiss="modal">
                            <i class="fa fa-close"></i> Cancelar</a>	      
                    </div>
                </form>
            </div>	      
        </div>	  
    </div>
</div>

<?php if (isset($_SESSION['id']) && $_SESSION['senha'] == "mudar123") : ?>
    <script>
        $(document).ready(function(){
            $('#login-senha').modal('show');
        });
    </script>
<?php endif; ?>

</body>
</html>
