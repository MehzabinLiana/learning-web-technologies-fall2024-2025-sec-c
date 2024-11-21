
<?php
session_start();
 
if (isset($_POST['submit'])) {
 
    if (!empty($_POST['Blood'])) {
        echo " You Selected Blood group : " . $_POST['Blood'] ;
    } else if(empty($_POST['Blood'])) {
        echo "Please select a Blood Group please.";
    }else
    {
        header('location:Blood.html');
    }
}
?>
