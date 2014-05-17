<!DOCTYPE html>
<?php

session_start();
session_destroy();

echo"Has cerrado sesion ";

header('Location: /index.php');

?>;

