<?php
include_once '../version1.php';// trae todo el contenido
/*
//print_r(getallheaders()['Authorization']);
Echo '<hr>';
echo $_method;
Echo '<hr>';
print_r($_host);
Echo '<hr>';
print_r($_port);
Echo '<hr>';
print_r($_parts);
Echo '<hr>';
echo 'schema; http - https';
Echo '<hr>';
echo "<p>El mantenedor es: {$_parts[5]}</p>";
echo "<p>La version es: {$_parts[4]}</p>";
echo "<p>Es un API?: {$_parts[3]}</p>";
Echo '<hr>';
Echo '<hr>';
echo "<p>El mantenedor es: ".$_parts[(count($_parts)-2)] . "</p>";
echo "<p>La version es: ".$_parts[(count($_parts)-3)] . "</p>";
echo "<p>Es un API?: ".$_parts[(count($_parts)-4)] . "</p>";
Echo '<hr>';
Echo '<hr>';*/

switch ($_method) {
    case 'GET':
        if ($_authorization === 'Bearer IPSS') {
            $data = array(
                array(
                    'id'=>1,
                    //atributos
                    'codigo'=>'uf',
                    'nombre'=>'Unidad de Fomento (UF)',
                    'Unidade de Medida'=>'pesos',
                    'valor'=>'37968.98,',
                    'activo'=>true,
                ),
                array(
                    'id'=>2,
                    //atributos
                    'codigo'=>'ivp',
                    'nombre'=>'indice de valor promedio (IVP)',
                    'Unidade de Medida'=>'pesos',
                    'valor'=>'39443.16,',
                    'activo'=>true,
                ),
                array(
                    'id'=>3,
                    //atributos
                    'codigo'=>'dolar',
                    'nombre'=>'dolar observado',
                    'Unidade de Medida'=>'pesos',
                    'valor'=>'945.8,,',
                    'activo'=>true,
                )
            );

            http_response_code(200);
            echo json_encode(['data'=> $data]);
        }else {
            http_response_code(403);
            echo json_encode(['error'=>'prohibido']);
        }
        break;
    
    default:
    http_response_code (501);
    echo json_encode(['error'=>'No implementado']);
        break;
}
