<?php

$operacion = $_POST['lista'];

if (isset ($_POST['C1']) && !empty($_POST['C1'] ) &&
    isset ($_POST['C2']) && !empty($_POST['C2'] ) &&
    isset ($_POST['C3']) && !empty($_POST['C3'] ))

 { 
 echo "El resultado es: ";

switch ($operacion)

 {
	case @Sumar:
		echo $_POST['C1'] + $_POST['C2'] + $_POST['C3'];
	break;

    	echo $_POST['C1'] - $_POST['C2'] - $_POST['C3'];
	break;

    case @Multiplicar:
		echo $_POST['C1'] * $_POST['C2'] * $_POST['C3'];
	break;

    case @Dividir:
		echo $_POST['C1'] / $_POST['C2'] / $_POST['C3'];
	break;	

    default: "No se puede realizar la operacion";
 
  }
  }
else {

	echo "Debe de llenar todos los campos";
     }


?>

