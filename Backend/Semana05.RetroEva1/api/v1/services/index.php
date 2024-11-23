<?php
include_once '../version1.php';// trae todo el contenido

switch ($_method) {
    case 'GET':
        if ($_authorization === 'Bearer IPSS') {
            $data = array(
                array(
                    //atributos
                    'id'=>1,
                    'titulo'=>array(
                        'esp' => 'Consultoria digital',
                        'eng' => 'Digital Consulting'
                    ),
                    'descripcion'=>array(
                        'esp' => 'bla.esp.bla.esp.bla.esp',
                        'eng' => "bla.eng.bla.eng.'bla'.eng."
                    
                ),
                'activo' => true
                
            ),
            
            array(
                //atributos
            'id'=>2,
                'titulo'=> array (
                    'esp'=>'Vision',
                    'eng'=>'Vission',

                ),
                'descripcion'=>array(
                    'esp' => 'bla.esp.bla.esp.bla.esp',
                    'eng' => "bla.eng.bla.eng.'bla'.eng."
                
            ),
            'activo' => true
                ),
            
                array(
                    //atributos
                'id'=>3,
                    'titulo'=> array (
                        'esp'=>'Soluciones multiesperiencia',
                        'eng'=>'Multi-experience solutions',
    
                    ),
                    'descripcion'=>array(
                        'esp' => 'bla.esp.bla.esp.bla.esp',
                        'eng' => "bla.eng.bla.eng.'bla'.eng."
                    
                ),
                'activo' => true
                    ),
            
                    array(
                        //atributos
                    'id'=>4,
                        'titulo'=> array (
                            'esp'=>'Soluciones low-code',
                            'eng'=>'Low-code solutions',
        
                        ),
                        'descripcion'=>array(
                            'esp' => 'bla.esp.bla.esp.bla.esp',
                            'eng' => "bla.eng.bla.eng.'bla'.eng."
                        
                    ),
                    'activo' => true
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
