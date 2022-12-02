<?php

require $_SERVER['DOCUMENT_ROOT'] . "./src/lib/database.php";
$res = "";
if (isset($_POST['submit'])) {
  $res = (new database)->sendmessage($_POST['name'], $_POST['email'], $_POST['message']);
  // echo $res;
}

?>