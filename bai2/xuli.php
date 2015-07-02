<?php
$nen = "/(rar|zip|7z|gz|RAR|ZIP|7Z)$/";
$filename = $_POST["filename"];
if (preg_match($nen,$filename)) {
   echo "file nen";

}
$anh = "/(jpeg|jpg|png|JPEG|JPG|PNG)$/";
$filename = $_POST["filename"];
if (preg_match($anh,$filename)) {
   echo "file anh";

}
$text = "/(txt|ini|cfg|TXT|INI|CFG)$/";
$filename = $_POST["filename"];
if (preg_match($text,$filename)) {
   echo "file text";

}
else
echo "sorry khong biet dang file :v"
?>