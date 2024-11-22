<?php

function area($length=10,$width=20)
{
return $length*$width;
}
echo area();
echo "<br>";

function perimeter($length=20,$width=30)
{
       return 2*($length*$width);
}
echo perimeter();

?>