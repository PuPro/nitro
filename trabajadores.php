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
       
       
       <h2 class="btn btn-lg btn-primary btn-block">TRABAJADORES</h2>
 
<!-- inicio menu add -->
<h2></h2>
        <div class="col-sm-3">   
            <div class="panel panel-default" >
                <div class="panel-body form-horizontal payment-form" name="formulario">
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Rut </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Rut" name="Rut">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Nombres </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="Nombres" name="Nombres">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Apellidos </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="Apellidos" name="Apellidos">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Telefono </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="Telefono" name="Telefono">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Direccion </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="Direccion" name="Direccion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Fecha ingreso </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="Fecha_ingreso" name="Fecha_ingreso">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Estado </label>
                        <div class="col-sm-9">
                            <select class="form-control" id="Estado" name="Estado">
                                <option>uno</option>
                                <option>dos</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Cargo </label>
                        <div class="col-sm-9">
                            <select class="form-control" id="Cargo" name="Cargo">
                                <option>uno</option>
                                <option>dos</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-default preview-add-button">
                                <span class="glyphicon glyphicon-plus"></span> AGREGAR
                            </button>
                        </div>
                    </div>
                </div>
            </div>            
        </div> <!-- / fin menu -->   
        
        <div class="col-sm-9"> 
            <h2></h2>
       <!--busqueda-->
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">TRABAJADORES</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> BUSCAR </button>
                </div>
            </div>
            <table class="table">   
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Rut" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nombres" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Apellidos" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Telefono" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Direccion" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Fecha ingreso" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Estado" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Cargo" disabled></th>
                        
                    </tr>
                    <tr>
                        <td>12345678-9</td>
                        <td>jose jose</td>
                        <td>madera madera</td>
                        <td>99999999</td>
                        <td>jd # 12</td>
                        <td>12/12/12</td>
                        <td>activo</td>
                        <td>supervisor</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ventana</td>
                        <td>metal</td>
                        <td>2</td>
                        <td>ventana</td>
                        <td>metal</td>
                        <td>ventana</td>
                        <td>metal</td>
                        
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>reja</td>
                        <td>fierro</td>
                        <td>fierro</td>
                        <td>3</td>
                        <td>reja</td>
                        <td>fierro</td>
                        <td>fierro</td>
                    </tr>
            </table>
        </div>
    </div>
        </div>
            </div>
       <!--fin busqueda-->
        <?php
        // put your code here
        ?>
    </body>
</html>
