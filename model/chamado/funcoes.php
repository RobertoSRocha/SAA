<?php
    require_once('../../config.php');
    require_once(DBAPI);



    /* Cadastrar o chamado ao sistema */
    if(isset($_POST['cadastrar_chamado']) ){

        if (!empty($_POST['setor_id_user']) && !empty($_POST['mensagem_chamado']) && !empty($_POST['setor_id_pedido'])) {
        
            $user_id = $_SESSION['id'];
            $setor_id_user = $_POST['setor_id_user'];
            $mensagem_chamado = $_POST['mensagem_chamado'];
            $setor_id_pedido = $_POST['setor_id_pedido'];
            
            date_default_timezone_set('America/Recife');
            $date = new DateTime();
            $chamado_id = $date->getTimestamp();
            $data_pedido = date("Y-m-d H:i:s");
            $image_nome = add_Imagem_chamado();
   
            add_chamado($chamado_id,$user_id, $setor_id_user, $mensagem_chamado, $setor_id_pedido, $data_pedido, $image_nome);
       
            header('location: index.php');
 
            exit();
        }
     }
     function add_Imagem_chamado(){         
         if (isset($_FILES['img']) ) {
            $extensao = strtolower(substr($_FILES['img']['name'], -4)); //pega a extensao do arquivo
            $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
            $diretorio = '../../imagens/chamado/'; //define o diretorio para onde enviaremos o arquivo  
            move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome);          
            return $diretorio.$novo_nome;
         }
         else
             return 'null';  
     }

    /** *  Listagem de Setores	 */
    function Setor_all() {        
        return find_all('setor');
    }