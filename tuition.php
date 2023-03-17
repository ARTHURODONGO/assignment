<?php
$nationality ="domestic";
$is_orphan = true;
$a_level_points = 50;
if ($nationality == 'domestic') 
    if (!$is_orphan) 
        $tuition = 10000;
    else if ($a_level_points >= 45) 
        $tuition = 5000;
     else {
        $tuition = 8000;
 }
 else {
    if (!$is_orphan) {
        $tuition = 20000;} elseif ($a_level_points >= 45) {
        $tuition = 15000;
    } else {
        $tuition = null;
    }
}

?>

