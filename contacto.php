<?php

$host='localhost';
$port='5432';
$database='ccsolutionsweb';
$password='postgresql';
$username='postgres';

$conexion=pg_connect($host+$port+$database+$username+$password);
if ($conexion== true) {
echo 'conexion exitosa';

}
else {
   echo 'error en parametros';
}
?>