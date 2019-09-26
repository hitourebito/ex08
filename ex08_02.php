<?php
$errmsg = array();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $su = $_POST["su"];

  if (!strlen($su) || !is_numeric($su))
  {
    $errmsg[] = "実数が入力されていません";
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
      $msg = "";

      $work = sprintf("整数: %'*8d", $su);
      $msg .= htmlspecialchars($work, ENT_QUOTES) . "<br/>";
      $work = sprintf("実数: %'*8.2f", $su);
      $msg .= htmlspecialchars($work, ENT_QUOTES) . "<br/>";
      $work = sprintf("文字: %'*-8s", $su);
      $msg .= htmlspecialchars($work, ENT_QUOTES) . "<br/>";

      echo $msg;
    }
  ?>
</body>