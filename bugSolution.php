function foo(array $arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )

// this is expected behavior now
$arr = ['a' => 'foo', 'b' => 'bar', 'c' => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [a] => foo [c] => baz )

$arr = ['a' => 'foo', 'b' => 'bar', 'c' => 'bar', 'd' => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [a] => foo [d] => baz )
