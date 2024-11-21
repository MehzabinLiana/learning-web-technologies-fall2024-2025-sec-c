
<?php
session_start();
if(isset($_POST['submit']))
{
    if (!empty($_POST['Degree']) && count($_POST['Degree']) >= 2) {
    echo " At least two Degree is selected  " ;
} else if(empty($_POST['Degree']) || count($_POST['Degree']) < 2 ) {
    echo "Please pick at least two options.";
}
 
    else
    {
        header('location:degree.html');
    }
}
?>
