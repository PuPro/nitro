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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="bootstrap/css/LargoFormControl.css"></script>
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
       
       
       <h2 class="btn btn-lg btn-primary btn-block">FLUJO DE CAJA</h2>
       
       <h2></h2>
        <div class="col-sm-9">
            <div class="panel panel-default" >
                <div class="panel-body form-horizontal payment-form" name="formulario">
                    <div class="form-group " >
                        <label for="status" class="col-sm-3 control-label">ITEM </label>
                        <div class="col-sm-3">
                            <select class="form-control" id="ITEM" name="ITEM">
                                <option>1</option>
                                <option>1</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Monto Total </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="MontoTotal" name="MontoTotal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Descripcion </label>
                        <div class="col-sm-9">
                        <textarea class="form-control" type="textarea" id="Descripcion" name="Descripcion" maxlength="" rows="10"></textarea>
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
       </div>
       
       
        <?php
        // put your code here
        ?>
    </body>
</html>
