<?php
require_once('../../config.php');
require_once(DBAPI);

/* guardar um conjunto de registros de usuario */
$usuarios = null;
/* guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE) */
$usuario = null;

/** *  Listagem de Clientes     */
function index()
{
    global $usuarios;
    $usuarios = find_all('usuario');
}

function addUsuario()
{
    if (!empty($_POST['usuario'])) {


            $usuario = $_POST['usuario'];

        save('usuario', $usuario);
        //saveIMG($usuario2);
        header('location: index.php');
        exit();
    }
}

function addImagem()
{

    $mysqli = open_database();

    if (isset($_FILES['arquivo'])) {
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = '../../imagens/'; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome); //efetua o upload
        $sql_code = "INSERT INTO usuario (nome,permissao,matricula,email,img ) VALUES('aaaaaaa', '1', '0','a@a','$novo_nome')";
        if ($mysqli->query($sql_code))
            $msg = "Arquivo enviado com sucesso!";
        else
            $msg = "Falha ao enviar arquivo.";
    }

    close_database($mysqli);

}

function editUsuario()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['usuario'])) {
            $usuario = $_POST['usuario'];
            //$customer['modified'] = $now->format("Y-m-d H:i:s");
            update('usuario', $id, $usuario);
            header('location: index.php');
            exit();
        } else {
            global $usuario;
            $usuario = find('usuario', $id);
        }
    } else {
        header('location: index.php');
        exit();
    }
}

function viewUsuario($id = null)
{
    global $usuario;
    $usuario = find('usuario', $id);
}

function deleteUsuario($id = null)
{
    global $usuario;
    $usuario = remove('usuario', $id);
    header('location: index.php');
    exit();
}

function verificaID()
{
    if (isset($_GET['id'])) {
        if ($_GET['id'] != $_SESSION['id']) {
            header("Location: " . BASEURL . "erros/erro.php");
            exit();
        }
    }
}

function redefinirSenha($id = null)
{
    global $usuario;
    $usuario = updateSenha('usuario', $id, 'mudar123');
    header('location: index.php');
}

function atualizarSenha()
{
    if (isset($_POST['id']) && isset($_POST['senha']) && isset($_POST['senha2']) && isset($_POST['senha_atual'])) {
        $senha_atual = (isset($_POST['senha_atual'])) ? $_POST['senha_atual'] : '';
        if (md5($senha_atual) === $_SESSION['senha']) {
            $id = (isset($_POST['id'])) ? $_POST['id'] : '';
            $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
            if ($result = updateSenhaLogin('usuario', $id, $senha)/* usuario existir na base de dados */) {
                if ($result == 1/* usuario administrador */) {
                    header("Location: " . BASEURL . "admin/index.php");
                    exit();
                } elseif ($result == 2/* usuario operacional */) {
                    header("Location: " . BASEURL . "operacional/index.php");
                    exit();
                } else {
                    header("Location: " . BASEURL . "index.php");
                    exit();
                }
            }
        } else {
            $_SESSION['message'] = "Viiixe, você informou sua senha atual errada";
            $_SESSION['type'] = 'warning';
        }
    }
}
