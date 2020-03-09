--TEST--
Spread operator in list - general
--FILE--
$arr = [1, 2, 3, 4, 5, 6];
[$a, $b, , ...$c] = $arr;

--EXPECT--
int(1)
int(2)
array(3) {
  [0]=>
  int(4)
  [1]=>
  int(5)
  [2]=>
  int(6)
}
