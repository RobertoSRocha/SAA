<script>
    function confirmar() {
        // só permitirá o envio se o usuário responder OK
        alert("Seu tempo expirou! Logue novamente para ter acesso ao sistema.");
        location.replace('../index.php');	
    }
    window.onload = function(){
        confirmar();
    }
</script>