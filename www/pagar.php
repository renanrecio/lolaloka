<?php

$valor = $_GET['v'];
		
$produto = $_GET['n'];

$valor = base64_encode($valor);

$produto = base64_encode($produto);

echo "http://lolaloka.com/pagamento.php?v=".$valor."&n=".$produto."";

?>