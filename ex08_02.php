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
  <title>ex08_02.php</title>
  <style>
    #err 
    {
      color: red;
    };
  </style>
</head>
<body>
  <h1>整数・実数：右詰め 文字：左詰め 表示</h1>
  <div id="err">
    <?php 
      foreach ($errmsg as $value) 
      {
        echo $value, "<br/>";
      }
    ?>
  </div>
  <?php 
    if (!count($errmsg)) 
    {
      
    }
  ?>
</body>