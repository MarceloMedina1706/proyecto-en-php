<?php
session_start();

$captcha = imagecreatefromgif("imcaptcha.gif");

$colText = imagecolorallocate($captcha, 247, 233, 12);

imagestring($captcha, 5, 55, 18, $_SESSION['tmptxt'], $colText);

header("content_type: image/gif");

imagegif($captcha);
?>