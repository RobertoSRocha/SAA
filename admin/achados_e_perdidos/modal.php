<!-- Modal de Delete-->	
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">	  
    <div class="modal-dialog" role="document">	    
        <div class="modal-content">	      
            <div class="modal-header">	        
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span></button>	        
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>	      
            </div>	      
            <div class="modal-body">Deseja realmente excluir este item?</div>	      
            <div class="modal-footer">	        
                <a id="confirm" class="btn btn-primary" href="#">Sim</a>
                <a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>	      
            </div>	    
        </div>	  
    </div>	
</div> <!-- /.modal -->

<!-- Modal de Redefinir senha-->	

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Visualizando item <?php echo $item['nome']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p><?php echo $item['id']; ?></p>
          <p><?php echo $item['nome']; ?></p>
          <p><?php echo $item['descricao']; ?></p>
      </div>
    </div>
  </div>
</div>