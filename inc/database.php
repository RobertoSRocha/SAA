<?php

mysqli_report(MYSQLI_REPORT_STRICT);

session_start();

/** *  Inicia a conexão com o BD    */
function open_database()
{
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

/** *  Fecha a conexão com o BD     */
function close_database($conn)
{
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

/* Pesquisa um Registro pelo ID em uma Tabela */
function find($table = null, $id = null)
{
    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);
            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else {
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);
            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
                /* Metodo alternativo
                 * $found = array();
                 * while ($row = $result->fetch_assoc()) {
                 * array_push($found, $row);
                 * } */
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
    return $found;
}

/* Pesquisa Todos os Registros de uma Tabela */
function find_all($table)
{
    return find($table);
}

/** *  Insere um registro no BD     */
function save($table = null, $data = null)
{
    $database = open_database();

    $columns = null;
    $values = null;
    //print_r($data);		  
    foreach ($data as $key => $value) {
        $columns .= trim($key, "'") . ",";
        $values .= "'$value',";
    }

    //Verifica se o arquivo foi enviado
    if (is_uploaded_file($_FILES['img']['tmp_name'])) {
        //pega a extensao do arquivo
        $extensao = strtolower(substr($_FILES['img']['name'], -4));
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $columns .= 'img';
        $values .= "'$novo_nome',";
    }

    // remove a ultima virgula
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');

    $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

    try {
        $database->query($sql);
        if (($database->affected_rows) > 0) {

            //move a tofo para pasta
            if (isset($_FILES['img'])) {
                $diretorio = '../../imagens/'; //define o diretorio para onde enviaremos o arquivo
                move_uploaded_file($_FILES['img']['tmp_name'], $diretorio . $table . '/' . $novo_nome); //efetua o upload
            }
            $_SESSION['message'] = 'Registro cadastrado com sucesso.';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Registro já cadastrado no sistema';
            $_SESSION['type'] = 'warning';
        }
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';

    }
    close_database($database);
}

/** *  Atualiza um registro no BD   */
function update($table = null, $id = 0, $data = null)
{
    $database = open_database();

    $img = recupera_img($table, $id);
    $items = null;

    //Verifica se um arquivo foi enviado
    if (is_uploaded_file($_FILES['img']['tmp_name'])) {
        //pega a extensao do arquivo
        $extensao = strtolower(substr($_FILES['img']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        //define o nome do arquivo
        $items .= trim('img', "'") . "='$novo_nome',";

        //move a foto para pasta
        $diretorio = '../../imagens/';//define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['img']['tmp_name'], $diretorio . $table . '/' . $novo_nome); //efetua o upload

        //diretorio da imagem da imagem antida
        $dir_img = ABSPATH . 'imagens/' . $table . '/' . $img;
        //apaga imagem antiga
        unlink($dir_img);

    }

    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }    // remove a ultima virgula


    $items = rtrim($items, ',');
    $sql = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE id=" . $id . ";";
    try {
        $database->query($sql);
        //verifica se ouve alguma alteracão no banco
        if (($database->affected_rows) > 0) {
            $_SESSION['message'] = 'Registro atualizado com sucesso.';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Não foi possível realizar essa operacão! Verifique se os dados editados estão corretos ou já estão cadastrados.';
            $_SESSION['type'] = 'warning';
        }
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

/** *  Faz login no sistema */
function login($table, $matricula, $senha)
{
    $database = open_database();
    $found = null;
    try {
        if ($matricula != null && $senha != null) {
            $senha = md5($senha);
            $sql = "SELECT * FROM " . $table . " WHERE matricula =" . $matricula . " AND senha='" . $senha . "'";
            $result = $database->query($sql);
            if ($result->num_rows == 1 /*usuario existe na base */) {
                $row = $result->fetch_assoc();
                if ($row['permissao'] == 1 /*usuario administrador */) {

                    $nome = explode(" ", $row['nome']);

                    $_SESSION['message'] = "Bem Vindo(a) " . $nome[0];
                    $_SESSION['type'] = 'success';
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['matricula'] = $matricula;
                    $_SESSION['senha'] = $senha;
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['permissao'] = $row['permissao'];
                    $found = $row['permissao'];
                } elseif ($row['permissao'] == 2 /*usuario operacional */) {

                    $nome = explode(" ", $row['nome']);

                    $_SESSION['message'] = "Bem Vindo(a): " . $nome[0];
                    $_SESSION['type'] = 'success';
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['matricula'] = $matricula;
                    $_SESSION['senha'] = $senha;
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['permissao'] = $row['permissao'];
                    $found = $row['permissao'];
                } else /*usuario comum */ {
                    $_SESSION['message'] = "Você não tem permissão para logar no sistema";
                    $_SESSION['type'] = 'danger';
                    $found = $row['permissao'];
                }
            } else {
                // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
                $_SESSION['message'] = "Viiixe, não foi possivel logar, usuário não encontrado ou dados inválidos";
                $_SESSION['type'] = 'danger';
                $found = 0;
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
        $found = 0;
    }
    close_database($database);
    return $found;
}

/** *  Remove um registro no BD     */
function remove($table = null, $id = null)
{
    $database = open_database();

    $img = recupera_img($table, $id);

    try {
        if ($id) {
            $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);
            if ($result = $database->query($sql)) {
                if ($img != null) {
                    //diretorio da imagem
                    $dir_img = ABSPATH . 'imagens/' . $table . '/' . $img;
                    //exclui a imagem
                    unlink($dir_img);
                }
                $_SESSION['message'] = "Registro Removido com Sucesso";
                $_SESSION['type'] = 'success';
            } else {

                $_SESSION['message'] = "Viiixe! Não foi possivel realizar a operação. Verifique se esse registro está sendo referenciado em outro local";
                $_SESSION['type'] = 'danger';
            }
        }

    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

function updateSenha($table, $id, $senha)
{
    $database = open_database();
    $found = null;
    try {
        if ($id != null && $senha != null) {
            $senha = md5($senha);
            $sql = "UPDATE " . $table . " SET senha='" . $senha . "' WHERE id=" . $id;
            $database->query($sql);
            //verifica se ouve alguma alteracão no banco
            if (($database->affected_rows) > 0) {
                $_SESSION['message'] = 'Senha redefinida com sucesso.';
                $_SESSION['type'] = 'success';
                $found = $_SESSION['permissao'];
            } else {
                $_SESSION['message'] = 'O usuário já está com a senha padrão.';
                $_SESSION['type'] = 'warning';
            }
        } else {
            $_SESSION['message'] = "Viiixe, não foi possivel mudar a senha";
            $_SESSION['type'] = 'danger';
        }
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
    return $found;
}

function updateSenhaLogin($table, $id, $senha)
{
    $database = open_database();
    $found = null;
    try {
        if ($id != null && $senha != null) {
            $senha = md5($senha);
            $sql = "UPDATE " . $table . " SET senha='" . $senha . "' WHERE id=" . $id;
            $database->query($sql);
            //verifica se ouve alguma alteracão no banco
            if (($database->affected_rows) > 0) {
                $_SESSION['senha'] = $senha;
                $_SESSION['message'] = 'Senha atualizada com sucesso. Bem vindo ao sistema!';
                $_SESSION['type'] = 'success';
                $found = $_SESSION['permissao'];
            } else {
                $_SESSION['message'] = 'Não foi possível realizar essa operacão! Verifique se os dados editados estão corretos ou já estão cadastrados.';
                $_SESSION['type'] = 'warning';
            }
        } else {
            $_SESSION['message'] = "Viiixe, não foi possivel mudar a senha";
            $_SESSION['type'] = 'danger';
        }
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
    return $found;
}

function recupera_img($table = null, $id = null)
{

    $database = open_database();
    //Recupera o valor da imagem
    $img = mysqli_fetch_array($database->query("SELECT img FROM " . $table . " WHERE id = " . $id));
    $img = $img[0];
    close_database($database);
    return $img;

}

/* Pesquisa um setor pelo ID de um local */
function findSetor($table = null, $idLocal = null)
{
    $database = open_database();
    $found = null;
    try {
        if($idLocal != NULL){
            $sql = "SELECT * FROM " . $table . " WHERE local_id = " . $idLocal;
            $result = $database->query($sql);
            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
                $_SESSION['message'] = 'true';
                $_SESSION['type'] = 'success';
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
    return $found;
}