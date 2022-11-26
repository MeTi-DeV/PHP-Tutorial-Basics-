<?php
echo "Hello World";
$mylist=['red','blue','green'];
$str=implode('',$mylist);
echo $str;
$link='<a href="https//:www.google.com">Link</a>';
echo $link;
echo htmlentities($link);