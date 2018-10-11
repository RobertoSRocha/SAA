<?php

mysqli_report(MYSQLI_REPORT_STRICT);

session_start();
function open_database() {
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

function close_database($conn) {
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

/* Pesquisa um Registro pelo ID em uma Tabela */
function find($table = null, $id = null) {
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
function find_all($table) {
    return find($table);
}

/** *  Insere um registro no BD	 */ 
function save($table = null, $data = null) { 
    $database = open_database();
    $columns = null;
    $values = null;    
    //print_r($data);		  
    foreach ($data as $key => $value) {	    
        $columns .= trim($key, "'") . ",";	    
        $values .= "'$value',";
    }		  

    // remove a ultima virgula	  
    $columns = rtrim($columns, ',');	  
    $values = rtrim($values, ',');	  	  
    $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";		  
    try {
        $database->query($sql);
        if (($database->affected_rows) > 0) {
            $_SESSION['message'] = 'Registro cadastrado com sucesso.';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Registro já cadastrado no sistema';
            $_SESSION['type'] = 'warning';
        }
    } 
    catch (Exception $e) { 	  	    
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';	    
        $_SESSION['type'] = 'danger';	  
        
    } 		  
    close_database($database);	
 }
 
function update($table = null, $id = 0, $data = null) {
    $database = open_database();
    $items = null;
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
        }else{
            $_SESSION['message'] = 'Não foi possível realizar essa operacão! Verifique se os dados editados estão corretos ou já estão cadastrados.';
            $_SESSION['type'] = 'danger';
        }
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

/*function login($matricula, $senha) {
    $database = open_database();
    $found = null;
    try {
        global $_SG;
        $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';
        $sql = "SELECT * FROM `" . $_SG['usuario'] . "` WHERE " . $cS . " `matricula` = '" . $matricula . "' AND " . $cS . " `senha` = '" . $senha . "' LIMIT 1";
        $query = mysql_query($sql);
        
        $resultado = mysql_fetch_assoc($query);
        if (empty($resultado)) {
            // Nenhum registro foi encontrado => o usuário é inválido
            //$_SESSION['message'] = $e->GetMessage();
            //$_SESSION['type'] = 'danger'; //usuario ou senha invalidos
            close_database($database);
            $found = false;
        } else {
            // Definimos dois valores na sessão com os dados do usuário
            $_SESSION['usuarioID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
            $_SESSION['usuarioNome'] = $resultado['nome']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
            // Verifica a opção se sempre validar o login
            if ($_SG['validaSempre'] == true) {
                // Definimos dois valores na sessão com os dados do login
                $_SESSION['usuarioLogin'] = $matricula;
                $_SESSION['usuarioSenha'] = $senha;
            }
            $found = true;
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
        $found = false;
    }
    close_database($database);
    return $found;
}*/

/*function validaUsuario($usuario, $senha) {
  global $_SG;
  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';
  // Usa a função addslashes para escapar as aspas
  $nusuario = addslashes($usuario);
  $nsenha = addslashes($senha);
  // Monta uma consulta SQL (query) para procurar um usuário
  $sql = "SELECT `id`, `nome` FROM `".$_SG['tabela']."` WHERE ".$cS." `usuario` = '".$nusuario."' AND ".$cS." `senha` = '".$nsenha."' LIMIT 1";
  $query = mysql_query($sql);
  $resultado = mysql_fetch_assoc($query);
  // Verifica se encontrou algum registro
  if (empty($resultado)) {
    // Nenhum registro foi encontrado => o usuário é inválido
    return false;
  } else {
    // Definimos dois valores na sessão com os dados do usuário
    $_SESSION['usuarioID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
    $_SESSION['usuarioNome'] = $resultado['nome']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
    // Verifica a opção se sempre validar o login
    if ($_SG['validaSempre'] == true) {
      // Definimos dois valores na sessão com os dados do login
      $_SESSION['usuarioLogin'] = $usuario;
      $_SESSION['usuarioSenha'] = $senha;
    }
    return true;
  }
}*/

function remove($table = null, $id = null) {
    $database = open_database();
    try {
        if ($id) {
            $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);
            if ($result = $database->query($sql)) {
                $_SESSION['message'] = "Registro Removido com Sucesso.";
                $_SESSION['type'] = 'success';
            }else{

                $_SESSION['message'] = "Viiixe! Não foi possivel realizar a operação. Verifique se esse registro está sendo referenciado em outro local";
                $_SESSION['type'] = 'danger';
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    } close_database($database);
}
