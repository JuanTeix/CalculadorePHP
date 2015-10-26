<?php

$operacion = $_POST['lista'];

if (isset ($_POST['C1']) && !empty($_POST['C1'] ) &&
    isset ($_POST['C2']) && !empty($_POST['C2'] ) &&
    isset ($_POST['C3']) && !empty($_POST['C3'] ))



 { 
 
 echo "El resultado es: ";

 $archivo = fopen("Resulta.txt", "a") or die("problema al crear Archivo");
 
 fwrite($archivo, "Su Operacion Fue: ");
 fwrite($archivo, "\n");
 fwrite($archivo, $_POST['C1']);
 fwrite($archivo, "\n");
 fwrite($archivo,  $_POST['lista']);
 fwrite($archivo, "\n");
 fwrite($archivo, $_POST['C2']);
 fwrite($archivo, "\n");
 fwrite($archivo,  $_POST['lista']);
 fwrite($archivo, "\n");
 fwrite($archivo, $_POST['C3']);
 fwrite($archivo, "\n");
 fwrite($archivo, "=");
 //fwrite($archivo, ); 
 fclose($archivo);

 
 $suma = $_POST['C1'] + $_POST['C2'] + $_POST['C3'];
 $resta = $_POST['C1'] - $_POST['C2'] - $_POST['C3'];
 $multiplica = $_POST['C1'] * $_POST['C2'] * $_POST['C3'];
 $divide = $_POST['C1'] / $_POST['C2'] / $_POST['C3'];


switch ($operacion)

 {
	case @Sumar:
		echo $suma;
	break;

    case @Restar:
    	echo $resta;
	break;

    case @Multiplicar:
		echo $multiplica;
	break;

    case @Dividir:
		echo $divide;
	break;	

    default: "No se puede realizar la operacion";
 
  }
  }
else {
  $mensaje = 'Uno de los campos esta vacio';
  header ("Location: http://localhost:8080/proyectos/calculadoraphp/diseno.php?mensaje=".$mensaje."");
	//echo "Debe de llenar todos los campos";
  //se utiliza para redireccionar a una pag especifica.
     }


?>

