<?php

// $data = array(1,2,"a","b");
// // print_r($data);
// print_r(count($data));

// $a = [8,7,5,3,88,76,39,99,13];
// sort($a);
// unset($a[1]);
// print_r($a);

// $data = array(1,2,"a","b");
// print_r($data);
// array_push($data,'Rifat');
// array_pop($data);
// array_unshift($data, 'Rifat');
// array_shift($data);
// unset($data[2]);
// print_r($data);
// if(in_array('a', $data)) {
//     echo "Found";
// } else {
//     echo "Not Found";
// }

// $data = array(1,2,"a","b");
// print_r(array_search('2',$data));
// $data = array(
//     "name" => "Rifat",
//     "age" => 25
// );

// print_r(array_key_exists('age', $data)); //true false;
// $a = [8,7,5,3,88,76,39,99,13];
// print_r(array_slice($a,2,2));
$a = [8,7,5,3,88,76,39,99,13];
// array_splice($a, 2, 2, [1, 2, 3]);
$b = array_merge($a, ['Nahid',"Hira"]);

print_r($a);

print_r($b);

// print_r(array_diff($b,$a));

$common = array_intersect($b, $a);
print_r($common);
