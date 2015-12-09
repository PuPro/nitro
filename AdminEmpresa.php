f<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
<meta charset="UTF-8">
<?php include 'application/view/head.php'; ?>
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
        <li><a href="AdminUser.php">ADMINISTRAR USUARIOS</a></li>
        <li><a href="AdminEmpresa.php">ADMINISTRAR DATOS EMPRESA</a></li>
<!--        cerrar sesion-->
       <li class="dropdown pull-right">
             <a href="index.php"  class="dropdown-toggle">CERRAR SESION</a>
        </li>
    </ul>
<!--    fin menu-->
       
       
       <h2 class="btn btn-lg btn-primary btn-block">ADMINISTRAR DATOS EMPRESA</h2>
       <h2></h2>
        <div class="col-sm-9">
            <div class="panel panel-default" >
                <div class="panel-body form-horizontal payment-form" name="formulario">
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Rut Empresa</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="RutEmpresa" name="RutEmpresa">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Nombres Empresa</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="NombresEmpresa" name="NombresEmpresa">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Direccion </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="Direccion" name="Direccion">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Telefono </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="Telefono" name="Telefono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Correo Electronico </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="CorreoElectronico" name="CorreoElectronico">
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
