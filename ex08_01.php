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
  <style>
    #err 
    {
      color: red;
    };
  </style>
</head>
<body>
  <h1>2進数・8進数・16進数 表示</h1>
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
      $work = sprintf("%dは、2進数では %b、 8進数では %o、 16進数では %xです", $su, $su, $su, $su);
      $msg = htmlspecialchars($work, ENT_QUOTES);
      echo $msg;
    }
  ?>
</body>