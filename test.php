<?php 

$futbollisti = array("Ronaldo","Pele","Mesi","Zidan");
for($x = 0; $x < count($futbollisti); $x++ ){
    if($futbollisti[$x] == "Mesi") continue;
    echo ($futbollisti[$x]);
}

?>