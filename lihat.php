<?php

require_once 'mesin.php';

$mesin1 = new mesin ('dag dag',88);

$mesin1->set_suara('dag dig dug');
$mesin1->set_berat(300);


echo "suara mesinnya : " .$mesin1->get_suara() .'<br>'.' Dan mempunyai berat :' .$mesin1->get_berat().' kg' .'<br>';
?>