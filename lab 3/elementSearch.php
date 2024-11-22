
<?php
 $array=["one","two","three","four"];

 $search="five";

if(in_array ($search,$array))
{
    echo "element in array:$search";
}

else{
    echo "element not in array:$search";
}

?>
