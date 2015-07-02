<?php
$keyword = $_POST["keyword"];
$text = $_POST["text"];
echo str_replace($keyword,"<mark>$keyword</mark>",$text);
?>