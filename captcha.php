<?php

session_start();




function generateCaptcha() {

  $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

  $captcha = "";

  for ($i = 0; $i < 6; $i++) {

    $captcha .= $chars[rand(0, strlen($chars) - 1)];

  }

  $_SESSION['captcha'] = $captcha;

  return $captcha;

}




echo generateCaptcha();

?>