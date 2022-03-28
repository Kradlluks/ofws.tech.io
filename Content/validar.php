<?php
include ('sql_connect.php');

// Inicia sessões
session_start();

// Recupera o login
$logintc = ($_POST["logintc"]);
// Recupera a senha, a criptografando em MD5
$passtc = ($_POST["passtc"]);

// Usuário não forneceu a senha ou o login
if(empty($logintc) || empty($passtc))
{
	echo "<p>Você deve digitar sua senha e login!</p>";

}else{
    // Recupera o login
$logintc = ($_POST["logintc"]);
// Recupera a senha, a criptografando em MD5
$passtc = ($_POST["passtc"]);

 echo "<p>Dados Adquiridos</p> ";
}

/**
* Executa a consulta no banco de dados.
* Caso o número de linhas retornadas seja 1 o login é válido,
* caso 0, inválido.
*/
$tsql = "SELECT * FROM Logintb WHERE [logintc] ='{$logintc}' AND [passtc]='{$passtc}'";
$stmt = sqlsrv_query($conn, $tsql);
if (!$stmt) {

    die( print_r( sqlsrv_errors(), true));
 }


if( sqlsrv_fetch( $stmt ) === false )
    {
         die( print_r( sqlsrv_errors(), true));
    }

	// Agora verifica a senha
	else
	{
        $dados1 = sqlsrv_get_field( $stmt,1);
        $dados2 = sqlsrv_get_field( $stmt,2);
        echo "$dados1:$dados2 ";

	}
	if($dados1 === $_POST['logintc'] || $dados2 === $_POST['passtc'])
    {
echo "<p>Login bem sucedido</p>";
header("Location: ./ofw/forgot.php");
    }
    else {
        echo "<p>login nao existe</p>";
    }
?>
