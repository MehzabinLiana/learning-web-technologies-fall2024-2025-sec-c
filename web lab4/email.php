<?php
session_start();
if (isset($_POST['submit'])) {
    $name = $_REQUEST['name'];

    // Check if the input is empty
    if ($name == null) {
        echo "Email can't be empty";
    } 
    else if (strpos($name, "@") === false) {
        echo "Must contain '@' to be a valid email address";
    }
     else if (strpos($name, ".", strpos($name, "@")) === false) {
        echo "Must contain '.' after '@' to be a valid email address";
    }
     else  {
        echo "Email is saved";
    }
    
}
?>