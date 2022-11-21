<?php

class Validator{


public static function validate()
{
    $hasErrors = false;     

    if($_POST['room'] == ""){
        $_SESSION['errors'][] = "Room field can not be empty";
        $hasErrors = true;
    }
    if($_POST['address'] == ""){
     $_SESSION['errors'][] = "Address field can not be empty";
        $hasErrors = true;
    }
    
    if(!is_numeric($_POST['room'])){
        $_SESSION['errors'][] = "You must enter a numeric value for the unit room";
        $hasErrors = true;
    }
    if($_POST['isHoyse'] == ""){
        $_SESSION['errors'][] = "Building type field can not be empty";
        $hasErrors = true;
    }

    if($hasErrors){
        foreach ($_POST as $key => $value) {
            $_SESSION['POST'][$key] = $value;
        }
    }

    return $hasErrors;
}











}

?>