# PHP Loose Comparison Pitfall: Unexpected Type Juggling

This repository demonstrates a common, yet subtle, error in PHP involving loose comparison (`==`) in `if` statements.  Loose comparison can lead to unexpected results due to PHP's type juggling.  The example showcases how comparing a variable against the string '0' can inadvertently evaluate to true for various data types including integers, strings, booleans, and empty strings. This can introduce unpredictable bugs and make code harder to debug.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`.
3. Observe the unexpected output due to loose comparison.

## Solution

The `bugSolution.php` file shows the corrected code using strict comparison (`===`) to resolve the issue.  Strict comparison prevents type juggling and only evaluates to true if both the value and data type are identical.  This ensures that the if condition correctly checks for a string '0' only and avoids unexpected behavior.