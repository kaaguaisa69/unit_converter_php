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

// Request user input for temperature and unit
echo "Enter the temperature value: ";
$value = trim(fgets(STDIN)); // Get input from the user

echo "Enter the unit (Celsius or Fahrenheit): ";
$unit = trim(fgets(STDIN));

// Perform the conversion and display the result
$result = convertTemperature($value, $unit);
echo "The conversion of $value $unit is $result.\n";
