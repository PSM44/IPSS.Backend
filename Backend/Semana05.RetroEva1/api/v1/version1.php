<?php
echo'<pre>';
//print_r($_SERVER); 
$_host = $_SERVER['HTTP_HOST'];
$_port = $_SERVER['SERVER_PORT'];
$_uri = $_SERVER['REQUEST_URI'];
$_method = $_SERVER['REQUEST_METHOD'];
$_parts = explode('/', $_uri);
/*echo"<p>{$_host}</p>";
echo"<p>{$_port}</p>";*/
/*echo"<p>{$_uri}</p>";
echo"<p>{$_method}</p>";
echo'<pre>';*/

//configuración headers
header("Access-Control-Allow-Origin:*"); //restriccion de acceso desde otros servidores
header("Access-Control-Allow-Method: GET"); //metodos permitidos
//header("Content-Type: application/json; charset=UTF-8"); //restriccion de acceso desde otros servidores

//configuracion de Autorización
$_authorization = null;
try {
    if (isset(getallheaders()['Authorization'])) {
        $_authorization = getallheaders()['Authorization'];
       // echo 'tenemos una autorización';
    }else {
        http_response_code(401);
        echo json_encode(['error'=> 'no tiene autorizacion']);
    }
} catch (Exception $e) {
    echo 'error';
}
