<?php 
    if (@$_GET['mensaje'] != null) {
    echo '<script language="javascript">alert("'.@$_GET['mensaje'].'");</script>';
      
    }


    //echo '<script language="javascript">alert("'.@$_GET['mensaje'].'");</script>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="dis.css">
</head>
<body>
   
   <form  class="form1" action="calculadora.php" method="post" name="formulario">

        <h2 class="h2_titulo">Selecciona la Operacòn matematica</h2>
          <div class="div1"> 
          <input class="input1" type="text" name="C1"><br/><br/>
           <input class="input1" type="text" name="C2"><br/><br/>
           <input class="input1" type="text" name="C3"><br/>
          </div>
        <h2>Coloque los Valores</h2>
        <select name="lista">
           <option value="Sumar">Sumar</option>
           <option value="Restar">Restar</option>
           <option value="Multiplicar">Multiplicar</option>
           <option value="Dividir">Dividir</option>
        </select> <br/><br/>
          <input type="submit" value="Ver Resultado"> 
   	
    </form>

</body>

</html>