<?php
include_once '../version1.php';// trae todo el contenido

switch ($_method) {
    case 'GET':
        if ($_authorization === 'Bearer IPSS') {
            $data = array(
                array(
                    //atributos
                    'titulo'=>array(
                        'esp' => 'Mision',
                        'eng' => 'Mission'
                    ),
                    'descripcion'=>array(
                        'esp' => 'bla.esp.bla.esp.bla.esp',
                        'eng' => "bla.eng.bla.eng.'bla'.eng."
                    
                ),
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
