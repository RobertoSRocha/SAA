<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel">	
    <div class="modal-dialog" role="document">	    
        <div class="modal-content">	      
            <div class="modal-header">	        
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span></button>	        
                <h4 class="modal-title" id="modalLabel">Digite suas credenciais para ter acesso ao sistema</h4>	      
            </div>	      
            <div class="modal-body">
                <form class="modal-content animate" action="#">
                    <div class="user-header text-center">
                        <img src="<?php echo BASEURL; ?>dist/img/user.png" class="img-circle" alt="User Image" style="height: 30%; width: 30%;">
                    </div>
                    <div class="form-group">
                        <label for="matricula"><b>Matrícula</b></label>
                        <input type="text" class="form-control" placeholder="Digite sua matrícula" 
                               id="matricula" name="matricula" required="">

                        <label for="senha"><b>Senha</b></label>
                        <input type="password" class="form-control" placeholder="Digite sua senha" 
                               id="senha" name="senha" required="">
                    </div>
                    <div class="modal-footer">	        
                        <a id="confirm" type="submit" class="btn btn-primary">Login</a>
                        <a id="cancel" class="btn btn-default" data-dismiss="modal">Cancelar</a>	      
                    </div>
                </form>
            </div>	      
            	    
        </div>	  
    </div>
</div>

	  
    	
