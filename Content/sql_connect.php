<?php

$serverName = "OUTSIDEPERSON\SQLEXPRESS";

/* Get UID and PWD from application-specific files.  */
$connectionInfo = array( "UID"=>'sa',
                         "PWD"=>'sa_sa',
                         "Database"=>"OFWDB");

/* Connect using SQL Server Authentication. */
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false )
{
     echo "Unable to connect.</br>";
     die( print_r( sqlsrv_errors(), true));
}

?>
