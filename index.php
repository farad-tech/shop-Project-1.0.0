<?php
session_start();

require_once "PHP/connectDB.php";
require_once "Components/HTMLHead.php";
require_once "Components/CallJS.php";

echo "<!DOCTYPE html>";
echo "<html lang='en'>";

HTMLhead('Online Shop Website', 'CSS/Style.css');

echo "<body>";

require_once "Components/headerNav.php";
require_once "Components/carouselLine.php";
require_once "Components/mainofFirstPage.php";
JavaScript("Javascript/Bootstrap/bootstrap.bundle.min.js");

echo "</body>";
echo "</html>";
