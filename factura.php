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
<script type="text/javascript" src="./bootstrap/js/factura.js"></script>
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
         </div>
<!--    fin menu-->
       
       <h2 class="btn btn-lg btn-primary btn-block">FACTURA</h2>
       
        <div class="col-xs-12">
       <div class="container" >
	<div class="row">
        <div class="col-sm-12">
            <legend></legend>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group " >
                        <label for="concept" class="col-sm-3 control-label ">folio</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="concept" name="concept">
                        </div>
                    </div>
                    <div class="form-group " >
                        <label for="concept" class="col-sm-3 control-label">Fecha</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="concept" name="concept">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Proveedor</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="status" name="status">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group " >
                        <label for="status" class="col-sm-3 control-label">Cliente</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="status" name="status">
                                <option>1</option>
                                <option>1</option>
                            </select>
                        </div>
                    </div>
                </div>
                    
                    
                </div>
            </div>
            
        </div>
            </div>
        </div> 
        <!-- inicio menu add -->
        <div class="col-sm-5">
            <h4>DATOS FACTURA</h4>
            <div class="panel panel-default" >
                <div class="panel-body form-horizontal payment-form" name="formulario">
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">cod. Producto</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="codProducto" name="codProducto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">producto</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="producto" name="producto">
                                <option>uno</option>
                                <option>dos</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">cantidad</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="cantidad" name="cantidad">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">valor</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="valor" name="valor">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">total</label>
                        <div class="col-sm-9">
                         <strong><span class="preview-cant" id="total" name="total"></span></strong>
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
<!--        inicio lista-->
        <div class="col-sm-7">
            <h4>Facturas:</h4>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table preview-table">
                            <thead>
                                <tr>
                                    <th>cod. Producto</th>
                                    <th>producto</th>
                                    <th>cantidad</th>
                                    <th>valor</th>
                                    <th>total</th>
                                </tr>
                            </thead>
                            <tbody></tbody> <!-- mostrar tabla-->
                        </table>
                    </div>                            
                </div>
            </div>
            <div class="row text-right">
                <div class="col-xs-12">
                    <h4>Sub Total: <strong><span class="preview-total"></span></strong></h4>
                    <h4>IVA (19%): <strong><span class="preview-iva"></span></strong></h4>
                    <h4>Total: <strong><span class=""></span></strong></h4>
                    <h4>Total: <strong><span class="preview-cant"></span></strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-block">GUARDAR Y FINALIZAR</button>
                </div>                
            </div>
        </div>
       
       
        <?php
        // put your code here
        
        ?>
    </body>
</html>
