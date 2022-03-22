<?php
    session_start();

    require_once "Components/HTMLHead.php";

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    HTMLhead('Online Shop Website', 'CSS/Style.css');
    echo "<body>";
    require_once "Components/headerNav.php";
    echo "</body>";
    echo "</html>";
