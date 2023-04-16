<?php
header("content-type: text/plain");
$id = $_GET["id"];
  $ser = $_GET["serverplaceid"];
              $ser2 = $_GET["clientinsert"];
header("Location: https://assetdelivery.roblox.com/v1/asset/?id=". $id . "");
?>