<?php


    session_start();
    
// session_destroy();
//   die();

    //se supone que tenia q guardarme los numeros en el array de bolas comprobar el introducido con el array de bolas 
    //y si era igual no añadirlo a la sesion pero no consegui rellenar el array de bolas lo intente de muchas maneras y solo
    //guardaba un valor...

    
    $bolas=[];
    if (isset($_POST['acc'])) {
        
        $existe;
        if (isset($_POST['bola'])) {
            if (is_numeric($_POST['bola']) && $_POST['bola']<91) {    
                    $_SESSION['jugadas'][] = $_POST['bola'];
                    $bolas[]= $_POST['bola'];
                  /*  
                    foreach($_SESSION['jugadas'] as $codigo => $valor){
                        //esto no funciona y no se porq lo q deberia de hacer
                        // es recorre el array de la sesion y si encuentra uno igual al numero introducido lo elimina
                        if($valor == $_POST['bola']){
                            unset($_SESSION['jugadas'][$codigo]);                            
                        }
                        
                    }
                    */   
                
                
                
            }
        }
    }
    
    if (isset($_POST['des'])) {
        array_pop($_SESSION['jugadas']);
        
        
    }
    
    if(isset($_POST['emp'])){
        session_destroy();
        header("location: index.php");
        
    }



    require 'vista.php';
    ?>

