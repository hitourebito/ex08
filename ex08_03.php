<?php 
$errmsg = array();
$str    = "";
$ichi   = "";
$keta   = "";
$msg    = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $str  = $_POST["str"];
  $ichi = $_POST["ichi"];
  $keta = $_POST["keta"];


}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ex08_03.php</title>
  <style>
    #err 
    {
      color: red;
    };
  </style>
</head>
<body>
  <h1>文字列抜き出し</h1>
  <div id="err">
    <?php 
      foreach ($errmsg as $value) 
      {
        echo $value, "<br/>";
      }
    ?>
  </div>
  <form action= "<?= $_SERVER["SCRIPT_NAME"]?>" method="post">
    <div>
      文字列<br/>
      <input type="text" name="str" value="<?= $str ?>" size="30"><br/>
      桁位置<br/>
      <input type="text" name="ichi" value="<?= $ichi ?>" size="2"><br/>
      桁数<br/>
      <input type="text" name="keta" value="<?= $keta ?>" size="2"><br/>
      <br/>
      <input type="submit" value="検索"/>
    </div>
  </form>
</body>