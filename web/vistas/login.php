
<?php 
   
    include '../conec.php';
    $username = $_GET["user"];
    $password = $_GET["pass"];

    $i=0;
    $i2=0;
    
    try{

        $collection=$database->usuario;
        $row= $collection->find();


        foreach ($row as $datos) {

           

            $u=$datos["usuario"];
            $c=$datos["contrasena"];

            if($u==$username && $c==$password){

                    $i=2;
                    $i2=4;
                    echo $i+$i2;

                    echo "<script> alert('BIENVENIDO'); </script> ";

                    header("Location: puntoventa.php");
            
            }


            else{

            

                echo "<script> alert('DATOS INCORRECTOS'); </script> ";
                                    
                 header("Location: index.php");
            }


            
        }

                    # code...
    }   
    catch(MongoDB\Driver\Exception\Exception $e)
    {
        die("Error Encountered: ".$e);
    }
?>
