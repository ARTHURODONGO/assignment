<?php
$weights = array(200, 225, 180, 190, 215, 210, 195, 185, 230, 240);
$average_weight = array_sum($weights) / count($weights);
echo "The average weight lifted by the participants was " . $average_weight . "lbs.";
?>