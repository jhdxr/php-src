--TEST--
Spread operator in list - nested
--FILE--
$arr = [1, 2, 3, [4, 5, 6]];
[$a, $b, ...$c] = $arr;
var_dump($a,$b,$c);

[$a, $b, , [...$c]] = $arr;
var_dump($a,$b,$c);

--EXPECT--
int(1)
int(2)
array(2) {
  [0]=>
  int(3)
  [1]=>
  array(3) {
    [0]=>
    int(4)
    [1]=>
    int(5)
    [2]=>
    int(6)
  }
}


