<?php
$numDressesSold = 50;
$costPerDress = 25;
$sellingPricePerDress = 50;
$totalRevenue = $numDressesSold * $sellingPricePerDress;
$totalCost = $numDressesSold * $costPerDress;
$profit = $totalRevenue - $totalCost;
echo "Total profit earned: $" . $profit;
?>
