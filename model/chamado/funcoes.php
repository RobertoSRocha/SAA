<?php
    require_once('../../config.php');
    require_once(DBAPI);

    /* Cadastrar o chamado ao sistema */
    if(isset($_POST['cadastrar_chamado']) ){
        if (!empty($_POST['user_id']) && !empty($_POST['setor_id']) && !empty($_POST['mensagem-chamado'])) {
         
             $user_id = $_POST['user_id'];
             $setor_id = $_POST['setor_id'];
             $mensagem_camado = $_POST['mensagem_chamado'];
             
             date_default_timezone_set('America/Recife');
             $data_pedido = date("Y/m/d H:i:s");
 
             $image_nome = add_Imagem_chamado();
  
             echo $image_nome;
 
                 
             /* Adicionar emprestimo no banco de dados */
        //     if (save_emp($user_solicitou, $patrimonio_id, 'emprestado', $data_prazo_devolucao)) {
             /* Se adicionou, edita o status do patrimônio */
        //         update_status('patrimonio', $patrimonio_id, 'indisponivel');
       //      }
 
        //     $id_emprestimo = id_empretimo();
        //     header('location: '.EMPRESTIMOS_PDF.'?id='.$id_emprestimo);
 
         //    exit();
 
         //    cadastrar();
       //  }
        }
     }
 
     function add_Imagem_chamado(){
         
         if (isset($_FILES['img'])) {
             $extensao = strtolower(substr($_FILES['img']['name'], -4)); //pega a extensao do arquivo
             $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
             $diretorio = '../../imagens/chamado/'; //define o diretorio para onde enviaremos o arquivo
             move_uploaded_file($_FILES['img']['tmp_name'], $diretorio . $novo_nome); //efetua o upload            
             return $diretorio.$novo_nome;
         }
         else
             return 'null';       
 
     }


    /* campos nescessarios para o cadastramento de um chamado */
    function index_cadastro(){

    }

    /* cadastrar chamado  */
    function casdastrar(){

        //chamado_cad();
    }

    /** *  Listagem de Setores	 */
    function Setor_all() {        
        return find_all('setor');
    }