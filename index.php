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


echo number_format('10000000', 2, '_', '|');
echo '<br>';
var_dump(str_split('Hello Mehdi'));
echo '<br>';
echo str_replace("Hello", "", "Hello Mehdi");
echo '<br>';
echo strcmp('Hello', 'Hellow Mehdi');
echo '<br>';
echo strcmp('Hellow Mehdi', 'Hello');
echo '<br>';
echo strlen("Mehdi");
echo '<br>';
echo strpos('Hi i am mehdi from iran','Mehdi');
echo '<br>';
echo strtoupper('Hi i am mehdi from iran');
echo '<br>';
echo strtolower('Hi i am mehdi from iran');
echo '<br>';
$str='Hello World';
echo trim($str,'Heo');
//  All PHP String Functions ref :https://www.w3schools.com/php/php_ref_string.asp