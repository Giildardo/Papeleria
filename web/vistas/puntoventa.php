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

    <link rel="stylesheet" type="text/css" href="css/ventanamergente.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"> </script>



   <link rel="stylesheet" type="text/css" href="../css/ventana.css">
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"> </script>

  <style >

    *
    {
      margin: 0px;
      border: 0px;
      padding: 0px;

    }
    .ventana{
      /*azul background: rgba(0,0,102,1);  blacno background-color: #fff;*/

      /*background: rgba(0,0,0,0.75);*/

      background-color: white;
      width: 100%;
  height: 100%;
      color: rgba(255,255,255,1);
      font-family: Arial, Helvetica, sans-serif;
      font-size: 18px;
      text-align: center;
      
      min-height: 250px;
      
      position: fixed;
      display: none;
    }

    
    #cer
    {
      
      background: #ff9;
      height: 14%;
      width: 100%;
    }

    
    
    .img2
    {
      margin-left: 92%;
      width: 6%;
      margin-top: -8%;
      height: 30px;
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

    footer
    {
      background: #F4EE81;
    }

    #ts
    {
      margin-top: 10%;
    }

    #second{
      display: none;
    }

    

  </style>
  
</head>


<body>



<section id="container">


<!--header start-->
<header class="header fixed-top clearfix">


<!--logo start-->
<center><div class="brand" id="brandd">
     <a href="index.php" class="logo">
       <img src="../images/Logo.png" height="55%" width="215">
    </a>
     
</div></center>
<!--logo end-->


   <div class="ventana" id="vent" >

  <div id="cer" >
    <div class="brand" id="brandd">
     <a href="puntoventa.php" class="logo">
       <img src="../images/Logo.png" height="55%" width="215">
    </a>
     
</div>
    <a ><img src="../x2.png" class="img2" id="imggg">
  </a>
</div>

  <?php

    
    include '../conec.php';
     $col=$collection;
    ?>

     <form action="alta.php" method="GET" id="form1" >
      <table  class="table table-bordered table-striped dt-responsive tablas" >
        
        <thead>ALTA DE PRODUCTOS</thead>

            <tr><td>Nombre</td><td><input type="text" name="nom" required=""></td> </tr>
             <tr><td>Precio</td><td><input type="text" name="pre" required=""></td> </tr>
              <tr><td>Existencia</td><td><input type="text" name="exis" required=""></td> </tr>
               <tr><td>Descripcion</td><td><input type="text" name="des" required=""></td> </tr>
              <
        </tbody>

      </table>
      <input type="submit" name="" value="REGISTRAR PRODUCTO" class="btn btn-sm btn-default">

      </form>


    <form action="#" method="GET" id="form0" >
      <table  class="table table-bordered table-striped dt-responsive tablas" >
        <thead>
          <tr>
            <th data-breakpoints="xs">Folio</th>
            <th>Nombre</th>
                        <th>Precio </th>
                 <th>Existencia</th>
                  <th>Descripción</th>
                        
                  
                        
            <th data-breakpoints="xs">Agregar</th>
           
            
          </tr>
        </thead>
        <tbody>

            <?php

                if ($col->count()>0) {
                
            
                        $row= $col->find();
                foreach ($row as $datos) {
                    # code...
                
                    ?>

          <tr data-expanded="true">
            
           <td><input type="text" name="id" value=" <?php echo $datos["_id"]; ?>" disabled  > </td>
                    <td><input type="text" name="n" value=" <?php echo $datos["nombre"]; ?>" ></td>
                    <td><input type="text" name="p" value=" <?php echo $datos["precio_u"]; ?>" ></td>
                    <td><input type="text" name="p" value=" <?php echo $datos["existencia"]; ?>" ></td>
                    <td><input type="text" name="p" value=" <?php echo $datos["descripcion"]; ?>" ></td>
                    

                        <td><button  name="agr"><img class="img" src="../images/mass.jpg"></button></td>

                    
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

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">Ejemplo de usuario</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="perfil.php"><i class=" fa fa-suitcase"></i>Perfil</a></li>
                <li><a href="index.php"><i class="fa fa-key"></i> Cerrar sesión </a></li>
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
    <div id="sidebar" class="nav-collapse" >
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
<section id="main-content">
	<section class="wrapper">
		<!-- CONTENIDO DE LA PÁGINA -->
         
    </section>

 <div id="principal">


    
    <div align="left">

     <a href="javascript:abrir();">  <button class="btn btn-sm btn-default" style="margin-left: 2%"
      class="btnnn" >Ver productos</button>        </a>
 <a href="javascript:abrir2();">  <button class="btn btn-sm btn-default" style="margin-left: 2%"
      class="btnnn" >Agregar producto</button>        </a>      
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
     Punto de venta
    </div>
    <div>

        <form action="#" method="GET" >
      <table  class="table table-bordered table-striped dt-responsive tablas" >
        <thead>
          <tr>
            <th data-breakpoints="xs">Código</th>
            <th>Nombre</th>
                        <th>Precio </th>
                 <th>Cantidad</th>
                  
                        
                  
                        
            <th data-breakpoints="xs">Quitar</th>
           
            
          </tr>
        </thead>
        <tbody>

            <?php

                if ($col->count()>0) {
                
            
                        $row= $col->find();
                foreach ($row as $datos) {
                    # code...
                
                    ?>

          <tr data-expanded="true">
            
           <td><input type="text" name="id" value=" <?php echo $datos["_id"]; ?>" disabled  > </td>
                    <td><input type="text" name="n" value=" <?php echo $datos["nombre"]; ?>" disabled  ></td>
                    <td><input type="text" name="p" value=" <?php echo $datos["precio_u"]; ?>" disabled ></td>
                    <td><input type="text" name="p" value=" <?php echo $datos["existencia"]; ?>" ></td>
                
                    

                        <td><button  name="mod"><img class="img" src="../images/x4.png"></button></td>

                    
                        
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

    </div>

   <form action="javascript:comprar();">

        <div style="background-color: white;text-align: right;font-size: 200%;margin-bottom: 1%" >

          Total : $<input type="number" required="" value="56.00" name="efec" max="1000" min="1" style="width: 20%;height: 30px;border:1px" disabled="">
           
        <br>
          Efectivo : $<input type="number" required=""  name="efec" max="1000" min="1" style="width: 20%;height: 30px;border:1px">
        
        </div>

         <div style="text-align: center;font-size: 200%;margin-bottom: 20%" >
        
           <button class="btn btn-sm btn-default"  
      class="btnnn" style="font-size: 80%;margin-left: -3%" >Cobrar</button>  
        </div>
        
  </form>  
   


 </div>


 <div id="second"> 
   
    <div class="panel panel-default" >
    <div class="panel-heading" >
     Punto de venta
    </div>
    <div>


     

        <div style="background-color: white;text-align: center;: right;font-size: 200%;margin-bottom: 1%" >

          GRACIAS POR SU COMPRA
           
        <br><br>
         Su efectivo : $<input type="number"  value="100.00" name="efec" max="1000" min="1" style="width: 20%;height: 30px;border:1px"><br>
        Su cambio : $<input type="number"  value="100.00" name="efec" max="1000" min="1" style="width: 20%;height: 30px;border:1px">
        
        </div>

         <div style="text-align: center;font-size: 200%;margin-bottom: 20%" >
        
           <button class="btn btn-sm btn-default"  
      class="btnnn" style="font-size: 80%;margin-left: -3%" id="compra" >Realizar compra</button>  
        </div>
        
 

 </div>

   

 <!-- footer -->
		  <div class="footer">
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


<!-- [if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="../js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  

<!-- calendar -->
  <script type="text/javascript" src="../js/monthly.js"></script>-->
	
	<!-- //calendar -->


    

     

 
  

  <script >
    function abrir()
    {
      document.getElementById("vent").style.display="block";
      document.getElementById("form0").style.display="block";
      document.getElementById("form1").style.display="none";
     
      $(".dropdown").hide();
      $(".form-control").hide();
      
    }

    function abrir2()
    {
      document.getElementById("vent").style.display="block";
       document.getElementById("form0").style.display="none";
      document.getElementById("form1").style.display="block";
     
      //$(".dropdown").hide();
      //
      $(".dropdown").hide();
      $(".form-control").hide();
      
    }
    
    $(document).ready(function(e){

      $("#imggg").click(function(e){

        

        $(".dropdown").fadeIn(1000);
         $(".form-control").fadeIn(1000);
          document.getElementById("vent").style.display="none";
      });

      $("#compra").click(function(e){

          swal("Compra realizada exitosamente","guardando compra","success");
          setTimeout('document.location.reload()',10);
      });

      return false;


        
    });


      function comprar(){
       /*open("comprar.php","Punto de venta","width=1000, height=1000");*/
       document.getElementById("principal").style.display="none";
       document.getElementById("second").style.display="block";
    }

    
  </script>


  <script type="text/javascript" src="../js/sweetalert.min.js"></script>

  
</body>
</html>
