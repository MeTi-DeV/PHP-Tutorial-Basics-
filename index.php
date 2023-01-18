<?php
// ******* STRING FUNCTIONS *******//
// echo "Hello World";
// echo '<br>';
// $mylist=['red','blue','green'];
// $str=implode('',$mylist);
// echo $str;
// echo '<br>';
// $link='<a href="https//:www.google.com">Link</a>';
// echo $link;
// echo '<br>';
// echo htmlentities($link);


// echo number_format('10000000', 2, '_', '|');
// echo '<br>';
// var_dump(str_split('Hello Mehdi'));
// echo '<br>';
// echo str_replace("Hello", "", "Hello Mehdi");
// echo '<br>';
// echo strcmp('Hello', 'Hellow Mehdi');
// echo '<br>';
// echo strcmp('Hellow Mehdi', 'Hello');
// echo '<br>';
// echo strlen("Mehdi");
// echo '<br>';
// echo strpos('Hi i am mehdi from iran','Mehdi');
// echo '<br>';
// echo strtoupper('Hi i am mehdi from iran');
// echo '<br>';
// echo strtolower('Hi i am mehdi from iran');
// echo '<br>';
// $str='Hello World';
// echo trim($str,'Heo');
//  All PHP String Functions ref :https://www.w3schools.com/php/php_ref_string.asp


// ******* NUMBERS FUNCTIONS *******//
// $strNum = '120';
// var_dump(is_numeric($strNum));
// echo '<br>';
// $point = 15.8;
// $pointToNum = (int)$point;
// var_dump($pointToNum);



// ******* Exercise with Arrays *******//
// 
// $mylist = ['Blue', 'red', 'green'];
// for ($i = 0; $i < count($mylist); $i++) {
//     echo $i.$mylist[$i] . "<br>";
// }
// $my_associated_list=[
// 'Age'=>22,
// 'Car'=>'BMW',
// 'City'=>'Isfahan'
// ];
// echo $my_associated_list['Age']."<br>";
// echo $my_associated_list['Car'];

// ******* Arrays part 2 *******//
//comment 1 : use new method to combine arrays together and make as associate Arrays
$names = ['Mehdi', 'Negin', 'Sara', 'Reza'];
$salary = [25000, 26000, 18000, 20000];
//comment 2 : first array as keys and second array as values ['Mehdi'=>25000,'Negin'=>26000,'Sara'=>18000,'Reza'=>20000]
$info = array_combine($names, $salary);
var_dump($info);
//comment 3 : next method for show differences between several array
$arr1 = ['a' => 'blue', 'b' => 'black', 'c' => 'green'];
$arr2 = ['d' => 'blue', 'e' => 'black'];
$arr3 = ['f' => 'red', 'g' => 'black'];
//comment 4 : array_diff just compare differences between first array and all other arrays so if there was a value in other array and it was not in others 
// never choose that as different like 'f'=>'red' in $arr3
var_dump(array_diff($arr1, $arr2, $arr3));
$arr1 = ['a' => 'blue', 'b' => 'black', 'c' => 'green'];
$arr2 = ['d' => 'blue', 'e' => 'black'];
//comment 5 : array_diff_key compare only key
var_dump(array_diff_key($arr1, $arr2));
//comment 6 : array_diff_key compare key and values for associated arrrays
var_dump(array_diff_assoc($arr1, $arr2));
//comment 7 : array_intersect show each one has same value
$arr1 = ['a' => 'blue', 'b' => 'black', 'c' => 'green'];
$arr2 = ['d' => 'blue', 'e' => 'black'];
var_dump(array_intersect($arr1, $arr2));
//comment 7 : array_merge merge arrays together
var_dump(array_merge($names, $salary));
var_dump(array_merge($arr1, $arr2));
//comment 8 : array_keys return associated arrays keys together
var_dump(array_keys($arr1));
//comment 9 : array_pop remove last element of array
array_pop($names);
var_dump($names);
//comment 10 : array_push add new element to array
array_push($names, 'Zahra');
var_dump($names);
