<?php
   $link = mysqli_connect('localhost','root','','test') or die("无法连接到服务器");
   mysqli_query($link,'set names utf8');
   mysqli_query($link,'use te_users');
?>