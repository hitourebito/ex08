<?php
$errmsg = array();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $su = $_POST["su"];

  if (!strlen($su) || !is_numeric($su) || strpos($su, ".") !== FALSE) 
  {
    $errmsg[] = "整数が入力されていません";
  }
}

?>