```php
<?php
$value = 0;
if ($value === '0') {
    echo '$value is equal to 0 (string)';
} else {
    echo '$value is NOT equal to 0 (string)'; // This will execute
}

$value = '0';
if ($value === '0') {
    echo '$value is equal to 0 (string)';
} else {
    echo '$value is NOT equal to 0 (string)';
}

$value = false;
if ($value === '0') {
    echo '$value is equal to 0 (string)';
} else {
    echo '$value is NOT equal to 0 (string)'; // This will execute
}

$value = '';
if ($value === '0') {
    echo '$value is equal to 0 (string)';
} else {
    echo '$value is NOT equal to 0 (string)'; // This will execute
}
?>
```