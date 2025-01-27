# PHP Division by Zero Error

This repository demonstrates a common programming error in PHP: division by zero. The `calculate_average` function calculates the average of an array of numbers. However, it does not handle the case where the input array is empty. This leads to a division by zero error when the function is called with an empty array.

The solution involves adding a check to ensure the array is not empty before performing the division.

## How to reproduce

1. Clone this repository.
2. Run `bug.php`.
3. Observe the division by zero error.
4. Run `bugSolution.php` to see the corrected code.