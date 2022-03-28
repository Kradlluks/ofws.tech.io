<?php
function gettable(){
include("sql_connect.php");

$output="";
$table = "SELECT Cliente_id, pnome, unome, ativo, produtos, morada, observacoes FROM tbclientes";
$RS=sqlsrv_query($conn, $table);
while ($row = sqlsrv_fetch_array($RS, SQLSRV_FETCH_ASSOC)){

    $id = $row["Cliente_id"];
    $pnome = $row["pnome"];
    $unome = $row["unome"];
    $morada = $row["morada"];
    $ativo = $row["ativo"];
    $produtos = $row["produtos"];
    $observacoes = $row["observacoes"];

    $output .="<tr>";
    $output .="<td>$id</td>";
    $output .="<td>$pnome</td>";
    $output .="<td>$unome</td>";
    $output .="<td>$ativo</td>";
    $output .="<td>$produtos</td>";
    $output .="<td>$morada</td>";
    $output .="<td>$observacoes</td>";
    $output .="</tr>";

}

echo $output;
}
?>
