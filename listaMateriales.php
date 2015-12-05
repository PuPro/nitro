<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="bootstrap/css/LargoFormControl.css">
<link rel="stylesheet" href="bootstrap/css/filtro.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="bootstrap/js/filtro.js"></script>
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
    hr{
        margin: 60px 0;
    }   
</style>
          
    </head>
   <body> 
<!--       inicio menu-->
         <div class="bs-example">
    <ul class="nav nav-pills">
        <li class="active"><a href="menu.php">INICIO</a></li>
        <li><a href="trabajadores.php">TRABAJADOR</a></li>
        <li><a href="cliente.php">CLIENTE</a></li>
        <li><a href="factura.php">FACTURA</a></li>
        <li><a href="listaMateriales.php">LISTA MATERIALES</a></li>
        <li><a href="flujoCaja.php">FLUJO DE CAJA</a></li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">PER<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="perIngreso.php">PER INGRESOS</a></li>
                <li><a href="perEgreso.php">PER EGRESOS</a></li>
            </ul>
        </li>
        <li><a href="compracion.php">COMPARACION</a></li>
<!--        cerrar sesion-->
        <li class="dropdown pull-right">
             <a href="index.php"  class="dropdown-toggle">CERRAR SESION</a>
        </li>
    </ul>
<!--    fin menu-->
       
       
       <h2 class="btn btn-lg btn-primary btn-block">LISTA DE MATERIALES</h2>
       <!--busqueda-->
       <div class="container">
    <h3></h3>
    <hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">MATERIALES</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> BUSCAR </button>
                </div>
            </div>
            <table class="table">   
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID MATERIAL" disabled></th>
                        <th><input type="text" class="form-control" placeholder="DESCRIPCION" disabled></th>
                        <th><input type="text" class="form-control" placeholder="CATEGORIA" disabled></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>puerta</td>
                        <td>madera</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ventana</td>
                        <td>metal</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>reja</td>
                        <td>fierro</td>
                    </tr>
            </table>
        </div>
    </div>
</div>
       <!--fin busqueda-->
        <?php
        // put your code here
        ?>
    </body>
</html>
