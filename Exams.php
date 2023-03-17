<?php
$mathScore = 80;
$englishScore = 70;
$scienceScore = 90;

$averageScore = ($mathScore + $englishScore + $scienceScore) / 3;

if ($averageScore >= 90) {
    $finalGrade = 'A';
} elseif ($averageScore >= 80 && $averageScore < 90) {
    $finalGrade = 'B';
} elseif ($averageScore >= 70 && $averageScore < 80) {
    $finalGrade = 'C';
} elseif ($averageScore >= 60 && $averageScore < 70) {
    $finalGrade = 'D';
} else {
    $finalGrade = 'F';
}

echo "Final grade is: $finalGrade";
?>