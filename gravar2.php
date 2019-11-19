<?php 
    
$num = $_POST['num'];
$contador = 1;
$Guardar = 0;

while($contador <= $num){
    
    $total = $num % $contador;
    
    //echo "<br>" . $total;

    if($total == 0){

    	$Guardar = $Guardar + 1;
    }
    

    $contador = $contador + 1;
    
}

//echo "i = ". $Guardar . "<br>";

if($Guardar == 2){
	echo "<h1>O número " . $num . " é um número primo.";
	echo "<br>";
}else{
	echo "<h1>O número " . $num . " não é um número primo.";
	echo "<br>";
}

echo "<br><a href='javascript:history.back()'>Go Back</a>";


?>