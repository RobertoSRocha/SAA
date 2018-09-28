<?php
    //LISTA TODOS USUÁRIOS 
    function acoesUsers() {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from users");
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                echo
                "<tr>
                <td>" . $row['nome'] . "</td>
                    <td>" . $row['idCartao'] . "</td>
                    <td>" . $row['matricula'] . "</td>";
                    if($row['permissao']){
                        echo "<td>Administrador</td>";
                    }
                    else{
                        echo "<td>Usuário padrão</td>";
                    }
                    $idUser=$row['idUser'];
                    echo
                    "<td class='actions'>
			
			<a class='btn btn-success btn-xs' href='../View/gerenciarUserEdit.php?id=$idUser'>Editar</a>
			<a class='btn btn-danger btn-xs'  href='javascript:excluirUser($idUser)'>Excluir</a>
                    </td>
                </tr>";
  
            }
        }
        else{
            //header('Location: ../View/mensagensErro.php');
        }
        $conn->close();
    }
?>
