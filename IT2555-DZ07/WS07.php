<?php

$base = $_GET['base'];
$exponent = $_GET['exponent'];

function power($a, $b){

        $result = 1;
        while($b--){
            $result*=$a;
        }
        return $result;
}
header("Content-type: application/json");
$test_array = array ('result' => power($base,$exponent));
        echo json_encode($test_array);

?>
