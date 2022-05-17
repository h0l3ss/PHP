<?php

require 'DBConn.php';

$sql = "SELECT nome FROM powerbi.usuarios WHERE permissao = 'especialista'";
   
$result = mysqli_query($conn, $sql);

   ?>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8"/>
      <link rel="stylesheet" href="css/form.css">
      <link rel="stylesheet" href="css/teste.css">
      <style>

  * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

.column1 {
  float: left;
  width: 100%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
  </style>

   </head>
   <body>
   <div class="row">
   <div class="column" style="width: 100%; height: 10%;">
  <img src="img/login14.png" width="100%" height="auto" >
   </div>
   <div class="column" style="width: 100%; height: 10%;">
  </div>
  </div>
  

  <div class="column" style="height: 5%">

  
</div>
<div class="column" style="height: 5%"> 

 
</div>
<div class="column" style="height: 5%">


</div>
<div class="column">
    
  
    </div>
  <div class="column">
  <form method="POST" action="login.php">
  <center>  <label for="email"><b>Usuario</b></label>
    <br>
    <input type="text" placeholder="Ex: SN123456" name="login" id="login" required style="width: 70%; padding: 15px; margin: 5px 0 22px 0; display: inline-block; border: none; background: #f1f1f1;">
    <br>
    <label for="psw"><b>Senha</b></label>
    <br>
    <input type="password" placeholder="" name="senha" id="senha" required style="width: 70%; padding: 15px; margin: 5px 0 22px 0; display: inline-block; border: none; background: #f1f1f1;">
    <br>
    <input type="submit" value="entrar" id="entrar" name="entrar" class="registerbtn"  style="background-color:#c80000; width: 70%;"><br>
    <a href="cadastro.php">Cadastre-se</a>
  </center>
  </div>
  <div class="column">

  
  </div>
  <div class="column">

   
  </div>
  <div class="column">

 
  </div>
  <div class="column">
   
  </div>
</div>

   </body>
</html>
