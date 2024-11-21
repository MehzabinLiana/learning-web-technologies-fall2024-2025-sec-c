<?php
session_start();
if (isset($_POST['submit'])) {
    $dd = $_REQUEST['d'];
    $mm = $_REQUEST['m'];
    $yyyy=$_REQUEST['y'];
     
    if($dd == null ||$mm==null||$yyyy== null){
        echo "can't be empty";
    }else if(($dd>=1 && $dd<=31) && ($mm>=1 && $mm<=12) && ($yyyy>=1953 && $yyyy<=1998) )
    {
        echo" Your Date of Birth is  ".$dd."/".$mm."/".$yyyy;
    }else if(!($dd>=1 && $dd<=31)){
 
        echo " please put valid date .date must be 1-31";
    } else if(!($mm>=1 && $mm<=12)){
 
        echo " please put valid month .month must be 1-12";
    } else if(!($yyyy>=1953 && $yyyy<=1998)){
 
        echo " please put valid year.year must be 1953-1998";
    }
    else
    {
        header('location: dob.html');
    }
}
 
 
?>