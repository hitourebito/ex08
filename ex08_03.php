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