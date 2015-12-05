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
<link rel="stylesheet" href="bootstrap/css/container.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="bootstrap/css/container.css"></script>
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
       
         <div class="bs-example">
             <ul class="nav nav-pills"> 
             <li class="dropdown pull-right">
                 <a href="index.php"  class="dropdown-toggle">INICIO </a>
            

        </li>
             
             </ul>
       
       
       <div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">INICIE SESSION ADMINISTRADOR</h3>
<!--			  <hr class="colorgraph"><br>-->
			  
			  <input type="text" class="form-control" name="Username" placeholder="Usuario" required="" autofocus="" />
                          <h1></h1>
			  <input type="password" class="form-control" name="Password" placeholder="contraseña" required=""/>     		  
			 
                          <a href="AdminUser.php"><button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit" >INICIAR</button>  </a>			
		</form>			
	</div>
</div>  
        <?php
        // put your code here
        ?>
    </body>
</html>
