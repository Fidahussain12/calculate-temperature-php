<?php
// Define an array of temperatures
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

// Calculate the total temperature
$totalTemperature = array_sum($temperatures);

// Count the number of temperature values
$temperatureCount = array_sum ($temperatures);

// Calculate the average temperature
$averageTemperature = $totalTemperature / $temperatureCount;

// Display the average temperature
echo "Average Temperature is 50: " . $averageTemperature;
?>
