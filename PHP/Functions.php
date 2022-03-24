<?php

function checktoBeNotEmpty($desiredVariable)
{

    if (empty($desiredVariable)) {
        global $ErrorMessage;
        $ErrorMessage = "Please Fill All Fields";
        header("refresh: 3");
        return $ErrorMessage;
        return false;
        
    }
}

function errorMessage($messageText)
{
    
    echo "<p class='alert alert-danger mt-3' role='alert'>$messageText</p>";
}

function successMessage($messageText){
    
    
    echo "<p class='alert alert-success mt-3' role='alert'>$messageText</p>";
}
