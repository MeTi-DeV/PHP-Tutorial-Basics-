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

// $names = ['Mehdi', 'Negin', 'Sara', 'Reza'];
// $salary = [25000, 26000, 18000, 20000];
// $info = array_combine($names, $salary);
// var_dump($info);
// $arr1 = ['a' => 'blue', 'b' => 'black', 'c' => 'green'];
// $arr2 = ['d' => 'blue', 'e' => 'black'];
// $arr3 = ['f' => 'red', 'g' => 'black'];
// var_dump(array_diff($arr1, $arr2, $arr3));
// $arr1 = ['a' => 'blue', 'b' => 'black', 'c' => 'green'];
// $arr2 = ['d' => 'blue', 'e' => 'black'];
// var_dump(array_diff_key($arr1, $arr2));
// var_dump(array_diff_assoc($arr1, $arr2));
// $arr1 = ['a' => 'blue', 'b' => 'black', 'c' => 'green'];
// $arr2 = ['d' => 'blue', 'e' => 'black'];
// var_dump(array_intersect($arr1, $arr2));
// var_dump(array_merge($names, $salary));
// var_dump(array_merge($arr1, $arr2));
// var_dump(array_keys($arr1));
// array_pop($names);
// var_dump($names);
// array_push($names, 'Zahra');
// var_dump($names);

// ******* Arrays part 3 *******//
//comment 1 : array_replace for replace to array first argument will place as second argument
// $arr1 = ['Benz', 'BMW'];
// $arr2 = ['Peykan', 'Pride'];
//comment 2 : BMW has no key so show that as index key
// $arr1 = ['a' => 'Benz', 'BMW'];
// $arr2 = ['a' => 'Peykan','b' =>  'Pride'];

//comment 3 : BMW has index key as 3 so for replace in $arr2 it will instade 'Ford'

// $arr1 = ['Benz', 3 => 'BMW'];
// $arr2 = ['Peykan', 'Pride', 'Kia', 'Ford', 'Samand'];

//comment 4 : an example for three arrays
// $arr1 = ['Benz', 'BMW'];
// $arr2 = ['Peykan', 'Pride'];
// $arr3 = ['Kia', 'Ford'];
// var_dump(array_replace($arr2, $arr1,$arr3));

//comment 4 : array_slice for extend part of array like here form key 2 till end 
//comment 5 : third argument of array_slice is end of slice
$arr1 = ['Peykan', 'Pride', 'Kia', 'Ford', 'Samand'];

var_dump(array_slice($arr1, 1));
var_dump(array_slice($arr1, 2,4));
