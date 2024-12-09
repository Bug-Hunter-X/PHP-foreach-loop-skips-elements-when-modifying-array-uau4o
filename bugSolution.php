function foo(array $arr) {
  //Use array_filter to create a new array containing only the elements that satisfy the condition.
  return array_filter($arr, function ($value) {
    return $value !== 'bar';
  });
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//Another solution: iterate in reverse order
function foo2(array &$arr) {
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 'bar') {
      unset($arr[$i]);
    }
  }
}

$arr = ['foo', 'bar', 'baz'];
foo2($arr);
print_r($arr); // Output: Array ( [0] => foo [2] => baz )