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
// $arr1 = ['Benz', 'BMW'];
// $arr2 = ['Peykan', 'Pride'];
// $arr1 = ['a' => 'Benz', 'BMW'];
// $arr2 = ['a' => 'Peykan','b' =>  'Pride'];

// $arr1 = ['Benz', 3 => 'BMW'];
// $arr2 = ['Peykan', 'Pride', 'Kia', 'Ford', 'Samand'];

// $arr1 = ['Benz', 'BMW'];
// $arr2 = ['Peykan', 'Pride'];
// $arr3 = ['Kia', 'Ford'];
// var_dump(array_replace($arr2, $arr1,$arr3));
// 
// $arr1 = ['Peykan', 'Pride', 'Kia', 'Ford', 'Samand'];
// 
// var_dump(array_slice($arr1, 1));
// var_dump(array_slice($arr1, 2,4));

// ******* Arrays part 4 *******//
// $arr1 = ['a' => 'Mehdi', 'b' => 'Negin', 'c' => 'Reza', 'd' => 'Sara'];
// $arr2 = ['a' => 'Mehdi', 'b' => 'Negin'];
// and third argument for number of indexes need to change and forth argument for array that apply changes
// array_splice($arr1, 2, 2, $arr2);
// var_dump($arr1);

// $car_name = 'BMW';
// $car_color = 'White';
// $car_year = 2023;
// $result = compact('car_name', 'car_color', 'car_year');
// var_dump($result);
// extract($arr1);
// echo ($a);
// echo ($b);
// $arr3 = ['Peykan', 'Pride', 'Kia', 'Ford', 'Samand'];
// var_dump(in_array('Kia', $arr3));
// sort($arr3);
// var_dump($arr3);
// ******* Loops part *******//


// $array = ['Benz', 'BMW', 'Volvo'];
// for ($counter = 0; $counter < count($array); $counter++) {
//     echo $array[$counter] . ' ';
// }
// $acArray = [
//     ['a' => 'Mehdi', 'code' => '1234'],
//     ['b' => 'Yashar', 'code' => '7689']
// ];
// 
// 
// for ($i = 0; $i < count($acArray); $i++) {
//     $acArray[$i]['rand'] = rand(1111, 9999);
// }
// 
// var_dump($acArray);
// $colors = ['Green', 'Red', 'Blue', 'Yellow'];
// foreach ($colors as $color) {
//     echo $color . ' ';
// }
// 
// $users = [['Mehdi', 'Negin'], ['Reza', 'Mahshid'],];
// foreach ($users as $user) {
//     foreach ($user as $name) {
//         echo $name . ' ';
//     }
// }
// $data = ['name' => 'Mehdi', 'age' => 23, 'job' => 'Programmer'];
// foreach ($data as $key => $value) {
//     echo $key . ' => ' . $value . ' ';
// }
// $counter=0;
// for ($counter; $counter <20 ; $counter++) { 
//     if (!($counter%2==0)) {
//         continue;
//     }
//     echo $counter.' , ';
// }
// ******* Fuunction part *******//


// function showNumbers($num)
// {
//     if ($num <= 5) {
//         echo $num . ' ';
//         showNumbers($num + 1);
//         return $num;
//     }
// }
// showNumbers(1);
// function my_callback($item)
// {
//     return strlen($item);
// }
// 
// $result = array_map('my_callback', ['Green', 'Red', 'Blue']);
// var_dump($result);
// function adder($item)
// {
//     return $item + 2;
// }
// 
// $result = array_map('adder', [3, 5, 7]);
// var_dump($result);
// ******* Global Variables part *******//
function func()
{
    global $a;
    $a = 10;
}
func();
echo $a;
function   func2(){
    $b=0;
    echo $b;
    $b++;
}
func2();
func2();
func2();
func2();
function   func3(){
   static $c=0;
   echo $c;
    $c++;
}
func3();
func3();
func3();
func3();