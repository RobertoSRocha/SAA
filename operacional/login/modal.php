<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel">	
    <div class="modal-dialog" role="document">	    
        <div class="modal-content">	      
            <div class="modal-header">	        
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span></button>	        
                <h4 class="modal-title text-center" id="modalLabel">Digite suas credenciais para ter acesso ao sistema</h4>	      
            </div>	      
            <div class="modal-body">
                <form class="modal-content animate" method="post" action="<?php echo BASEURL; ?>public/index.php">
                    <div class="user-header text-center">
                        <img src="<?php echo BASEURL; ?>dist/img/senha.png" class="img-circle" alt="User Image" style="height: 30%; width: 30%;">
                    </div>
                    <div class="form-group">
                        <label for="matricula"><b>Matrícula</b></label>
                        <input type="number" class="form-control" placeholder="Digite sua matrícula" 
                               id="matricula" name="matricula" required="">

                        <label for="senha"><b>Senha</b></label>
                        <input type="password" class="form-control" placeholder="Digite sua senha" 
                               id="senha" name="senha" required="">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-sign-in"></i> Login</button>
                        <a id="cancel" class="btn btn-default" data-dismiss="modal">
                            <i class="fa fa-close"></i> Cancelar</a>	      
                    </div>
                </form>
            </div>	      
            	    
        </div>	  
    </div>
</div>

	  
    	
