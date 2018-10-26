<?php if (isset($_SESSION['id']) && $_SESSION['senha'] == "mudar123") : ?>
    <!-- <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel">	
        <div class="modal-dialog" role="document">	    
            <div class="modal-content">	      
                <div class="modal-header">	        
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span></button>	        
                    <h4 class="modal-title text-center" id="modalLabel">Altere sua senha padrão</h4>	      
                </div>	      
                <div class="modal-body">
                    <form class="modal-content animate" method="post" action="<?php //echo BASEURL; ?>operacional/index.php">
                        <div class="user-header text-center">
                            <img src="<?php //echo BASEURL; ?>dist/img/senha.png" class="img-circle" alt="User Image" style="height: 30%; width: 30%;">
                        </div>
                        <div class="form-group">
                            <label for="senha"><b>Senha</b></label>
                            <input type="password" class="form-control" placeholder="Digite sua senha" 
                                   id="senha" name="senha" required="">

                            

                            <div class="form-group" style="display:none;">
                                <label for="id"><b>id</b></label>
                                <input class="form-control" id="id"
                                       value="<?php //echo $_SESSION[id]; ?>"
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
    </div>-->
    
    <div id="alertas" class="alert
        <?php //echo $_SESSION['type'] = "info"; ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
        <?php //echo $_SESSION['message'] = "vai dar certo"; ?>
    </div>
    
    
    <div class="modal fade" id="exemplomodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">teste</h4>
                    </div>
                    <div class="modal-body">
                        teste

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
<?php endif; ?>


