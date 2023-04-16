<?php

$id = $_GET["id"];

if($id == 1){
    Header("Location: /asset/1");
}
else {
    Header("Location: https://assetdelivery.roblox.com/v1/asset/?id=".$id);
}

?>