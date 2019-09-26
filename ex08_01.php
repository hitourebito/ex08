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

else 
{
  $errmsg[] = "htmlから入力してください";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ex08_01.php</title>
</head>
<body>

</body>