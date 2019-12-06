<?php
	
	require_once 'abstracta.php';
		require_once 'inteface.php';

		
		include '../conec.php';
/**
 * 		
 */


class Productos extends Operacion
{

	public function Modificar($id,$nom,$pre,$exis,$des){

			include '../conec.php';

			echo "Soy el id v1:<br>"."$id"."<br>";

			$collection->updateMany(['_id' => new \MongoDB\BSON\ObjectID($id)], ['$set' => ['nombre' => $nom]]); 
	

			$collection->updateMany(['_id' => new \MongoDB\BSON\ObjectID($id)], ['$set' => ['precio_u' => $pre]]); 

			$collection->updateMany(['_id' => new \MongoDB\BSON\ObjectID($id)], ['$set' => ['existencia' => $exis]]); 


			$collection->updateMany(['_id' => new \MongoDB\BSON\ObjectID($id)], ['$set' => ['descripcion' => $des]]); 

		
		}
		
		public function Eliminar($ids){

			include '../conec.php';



		$collection = $database->productos;
		
			//$collection->deleteMany(array('_id' => $id));
			$collection->deleteOne( array( '_id' => new MongoDB \ BSON \ ObjectID($ids) ) );
		}

		public function Insertar($n,$p,$e,$d){

			include '../conec.php';


				$document = array( 'nombre' => $n, 'precio_u' => $p, 'existencia' => $e, 'descripcion' => $d );

				$collection->insertOne($document);//insertar 

		}
	
		
		//Eliminar("5de446a4f598d82f3c1a746e");

		public function Mostrar(){

		}




}







	$objeto = new Productos;
		
	//$objeto->Modificar("5ddc504068230000e9005b45","2",3.5,4,"5");
	//$objeto->Eliminar("5ddae5f26501790418252624");



