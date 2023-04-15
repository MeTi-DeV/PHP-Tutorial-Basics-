<?php
if (isset($_POST['username']) && $_POST['username'] == 'Mehdi' && isset($_POST['password']) && $_POST['password'] == '1234') {
 echo   json_encode(['success' => 1]);
} else {
  echo  json_encode(['success' => 0]);

}
?>