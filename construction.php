<?php
$cement_cost = 10;
$cement_bags = 300;
$brick_cost = 0.50;
$brick_count = 1000;
$total_cost = ($cement_cost * $cement_bags) + ($brick_cost * $brick_count);
echo "The total cost of materials used in the project is $" . $total_cost . ".";
?>