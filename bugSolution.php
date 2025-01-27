```php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle the case of an empty array
  }
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total / count($numbers);
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average;

$emptyNumbers = [];
$averageEmpty = calculate_average($emptyNumbers);
echo "\nAverage of empty array: " . $averageEmpty; // Now handles empty arrays gracefully
```