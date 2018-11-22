<script>
    function confirmar() {
        // só permitirá o envio se o usuário responder OK
        alert("Você não pode realizar essa operação!");
        location.replace('index.php');	
    }
    window.onload = function(){
        confirmar();
    }
</script>