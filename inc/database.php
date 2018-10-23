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

function login($table, $matricula, $senha) {
    $database = open_database();
    $found = null;
    try {
        if($matricula != null && $senha != null){
            $sql = "SELECT * FROM " . $table . " WHERE matricula =".$matricula. " AND senha='".$senha."'";
            $result = $database->query($sql);
            if ($result->num_rows == 1 /*usuario existe na base */) {
                $row = $result->fetch_assoc();
                if($row['permissao'] == 1 /*usuario administrador */){
                    session_start();
                    $_SESSION['message'] = "Logado com sucesso! Seja bem vindo ao SAA";
                    $_SESSION['type'] = 'success';
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['matricula'] = $matricula;
                    $_SESSION['senha'] = $senha;
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['permissao'] = $row['permissao'];
                    $found = $row['permissao'];
                }
                elseif($row['permissao'] == 2 /*usuario operacional */){
                    session_start();
                    $_SESSION['message'] = "Logado com sucesso! Seja bem vindo ao SAA";
                    $_SESSION['type'] = 'success';
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['matricula'] = $matricula;
                    $_SESSION['senha'] = $senha;
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['permissao'] = $row['permissao'];
                    $found = $row['permissao'];
                }else /*usuario comum */{
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
