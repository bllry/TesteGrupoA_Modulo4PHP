<?php 

$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];
$t4 = $_POST['t4'];


    if(($t1 >= 2 && $t1 <= 6 ) or ($t2 >= 2 && $t2 <= 6) or ($t3 >= 2 && $t3 <= 6) or ($t4 >= 2 && $t4 <= 6)){
    $total = intval($t1) + intval($t2) + intval($t3) + intval($t4);
    
    echo "<h1>Numero de entradas disponiveis: " . ($total - 3) .  " </h1>";
    echo "<a href='javascript:history.back()'>Go Back</a>";
	}
    else{

    	echo "<h1>Preencha com um número maior que 2</h1>";
    	echo "<a href='javascript:history.back()'>Go Back</a>";
    }
    

?>