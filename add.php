<?php
$v = $_POST["vards"];
$u = $_POST["uzvards"];
$l = $_POST["login"];
$p = md5($_POST["password"]);

include('cfg.php');
$mysqli->query("INSERT INTO `users`(`id`,`name`,`sname`,`login`,`password`) VAlUES (`$v`,`$u`,`$l`,`$p`)");
?>
