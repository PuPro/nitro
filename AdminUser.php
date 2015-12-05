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
        <li><a href="AdminUser.php">ADMINISTRAR USUARIOS</a></li>
        <li><a href="AdminEmpresa.php">ADMINISTRAR DATOS EMPRESA</a></li>
<!--        cerrar sesion-->
       <li class="dropdown pull-right">
             <a href="index.php"  class="dropdown-toggle">CERRAR SESION</a>
        </li>
    </ul>
<!--    fin menu-->
       
       
       <h2 class="btn btn-lg btn-primary btn-block">ADMINISTRAR USUARIOS</h2>
       
       <h2></h2>
        <div class="col-sm-9">
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
                        <label for="date" class="col-sm-3 control-label">Contraseña </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="Direccion" name="Direccion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Rol </label>
                        <div class="col-sm-9">
                            <select class="form-control" id="Rol" name="Rol">
                                <option>uno</option>
                                <option>dos</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">EMPRESA </label>
                        <div class="col-sm-9">
                            <select class="form-control" id="EMPRESA" name="EMPRESA">
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
            </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
