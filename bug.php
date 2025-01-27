```php
function calculate_average($numbers) {
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total / count($numbers);
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // This will cause a division by zero error if the input array is empty.
```