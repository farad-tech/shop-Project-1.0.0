<?php

function HTMLhead($currentPageTitle, $pathToCSS){
    
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<link rel='stylesheet' href='".$pathToCSS."'>";
    echo "<title> $currentPageTitle </title>";
    echo "</head>";
    
}