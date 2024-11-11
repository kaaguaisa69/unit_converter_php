<?php
// Simple Unit Converter (Temperature) in PHP

function convertTemperature($value, $unit) {
    if ($unit === 'Celsius') {
        return ($value * 9/5) + 32; // Convert to Fahrenheit
    } elseif ($unit === 'Fahrenheit') {
        return ($value - 32) * 5/9; // Convert to Celsius
    } else {
        return "Invalid unit";
    }
}

// Example conversion
$value = 500;
$unit = 'Celsius';
$result = convertTemperature($value, $unit);
echo "The conversion of $value $unit is $result.";
