<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

	
	include '../conec.php';
	
	
	require_once 'abstracta.php';
	require_once 'inteface.php';
	require_once 'main.php';
	//$comparar=count($col);

	/*
	 var opcion = confirm("Clicka en Aceptar o Cancelar");
    if (opcion == true) {
        mensaje = "Has clickado OK";
} else {
    mensaje = "Has clickado Cancelar";
}

*/

if (isset($_POST['eli'])) {

        $idd=$_POST["num"];


        $objeto = new Productos;
		$objeto->Eliminar($idd);
    
		
	}
	
	else if (isset($_POST['mod'])) {


         $idd= $_POST['num'];
         $nom=$_POST['n'];
         $pre=$_POST['p'];
         $des=$_POST['e'];
         $exis=$_POST['d'];

      

        $objeto = new Productos;
		$objeto->Modificar($idd,$nom,$pre,$exis,$des);



	 
	}
	else
	{
		cargar();
	}
	
	
	

	function cargar()
	{
		
		include '../conec.php';

	$col=$collection;
		//$col=$database->venta_detalle;

		?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Inicio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="../css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="../css/font.css" type="text/css"/>
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="../css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="../css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="../js/jquery2.0.3.min.js"></script>
<script src="../js/raphael-min.js"></script>
<script src="../js/morris.js"></script>
<link rel="shortcut icon" href="../images/lo.png" />
<link rel="stylesheet" type="text/css" href="../css/h1.css">
<script src="js/jquery2.0.3.min.js"></script>
</head>

<style >

	
	 *
	{
		border: 0px;
		margin: 0px;
		padding: 0px;
	}
	
	input{
		width: 90%
	}

	.img
	{
	  width: 20px;
	}

	table
	{
		text-align: center;
		
	}


}
	
	
</style>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<center><div class="brand">
	 <a href="index.php" class="logo">
	   <img src="../images/Logo.png" height="55%" width="215">
	</a>
	 
</div></center>
<!--logo end-->

<div class="top-nav clearfix">
	<!--search & user info start-->
	<ul class="nav pull-right top-menu">
		<li>
			<input type="text" class="form-control search" placeholder=" Search">
		</li>
		<!-- user login dropdown start-->
		<li class="dropdown">
			<a data-toggle="dropdown" class="dropdown-toggle" href="#">
				<img alt="" src="images/2.png">
				<span class="username">Ejemplo de usuario</span>
				<b class="caret"></b>
			</a>
			<ul class="dropdown-menu extended logout">
				<li><a href="perfil.php"><i class=" fa fa-suitcase"></i>Perfil</a></li>
				<li><a href="login.php"><i class="fa fa-key"></i> Cerrar sesión </a></li>
			</ul>
		</li>
		<!-- user login dropdown end -->
	   
	</ul>
	<!--search & user info end-->
</div>
</header>
<!--header end-->


<!--sidebar start-->
<aside>
	<div id="sidebar" class="nav-collapse"  >
		<!-- sidebar menu start-->
		<div class="leftside-navigation">
			<ul class="sidebar-menu" id="nav-accordion">
				
				
				<li class="sub-menu">
					<a href="puntoventa.php">
						<i class="fa fa-book"></i>
						<span>Punto de venta</span>
					</a>
				</li>

				<li>
					<a href="inventario.php">
						<i class="fa fa-bullhorn"></i>
						<span> Inventario </span>
					</a>
				</li>

				<li class="sub-menu">
					<a href="historial.php">
						<i class="fa fa-th"></i>
						<span>Historial de ventas</span>
					</a>
				</li>
			</ul>
			</div>
		<!-- sidebar menu end-->
	</div>
</aside>
<!--sidebar end-->



<!--main content start-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- CONTENIDO DE LA PÁGINA -->
		 
	</section>

  <div align="left">

	 
	  
	  <ul class="nav pull-right top-menu" style="margin-left: -80%">
		<li>
			<input type="text" class="form-control search" placeholder="Producto" >
		</li>

	  </u>
	
  </div>
	  <br>
	  <br>
	  <div class="panel panel-default" >
	<div class="panel-heading" >
	 Productos
	</div>
	<div>

		
	  <table  class="table table-bordered table-striped dt-responsive tablas">
		<thead>
		  <tr>
			<th data-breakpoints="xs">Folio</th>
			<th>Nombre</th>
						<th>Precio </th>
				 <th>Existencia</th>
				  <th>Descripción</th>
						
				  
						
			<th data-breakpoints="xs">Modificar</th>
		   
			<th data-breakpoints="xs sm md" data-title="DOB">Eliminar</th>
		  </tr>
		</thead>
		<tbody>

			<form action=inventario.php method=POST  >
			<?php

				if ($col->count()>0) {
				
			
						$row= $col->find();
				foreach ($row as $datos) {
					# code...
				
					?>

		  <tr data-expanded="true">


			
		   <td><input type="text" name="num" value=" <?php echo $datos["_id"]; ?>"   > </td>
			<td><input type="text" name="n" value=" <?php echo $datos["nombre"]; ?>" ></td>
			<td><input type="text" name="p" value=" <?php echo $datos["precio_u"]; ?>" ></td>
			<td><input type="text" name="e" value=" <?php echo $datos["existencia"]; ?>" ></td>
			<td><input type="text" name="d" value=" <?php echo $datos["descripcion"]; ?>" ></td>
					


						<td><button  name="mod"><img class="img" src="../images/lapiz2.png" ></button></td>

					
						<td><button   name="eli"><img class="img" src="../images/x4.png"></button></td>
			</tr>

			<?php

				}

			}else
			{
				?>
							 <tr>
								<td>
									<script > alert('NO HAY REGISTROS EN MONGO DB') </script>
								</td>
							 </tr>

				<?php
			}
					
					?>

		</tbody>
	  </table>


	  </form>
	</div>

		<?php
	}
	?>
	</div>
  </div>
</div>
</section>


	<!-- hasta aqui la tabla -->

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

 <!-- footer -->
		  <div class="footer" >
			<div class="wthree-copyright">
			  <p>© 2019 PaperShop</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../js/scripts.js"></script>
<script src="../js/jquery.slimscroll.js"></script>
<script src="../js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="../js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  

<!-- calendar -->
	<script type="text/javascript" src="../js/monthly.js"></script>
	
	<!-- //calendar -->
</body>
</html>
