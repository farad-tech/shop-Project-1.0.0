<?php
session_start();

require_once "PHP/manageDB.php";
require_once "PHP/Functions.php";
require_once "Components/HTMLHead.php";
require_once "Components/CallJS.php";

echo "<!DOCTYPE html>";
echo "<html lang='en'>";

HTMLhead('Online Shop Website', 'CSS/Style.css');

echo "<body>";

require_once "Components/headerNav.php";
JavaScript("Javascript/Bootstrap/bootstrap.bundle.min.js");
require_once "Components/AdminComponents/main.php";

echo "</body>";
echo "</html>";
