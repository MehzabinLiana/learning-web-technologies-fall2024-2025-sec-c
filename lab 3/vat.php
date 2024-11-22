<?php

function vat($amount=150000)
{
    return $amount*15/100;
}

echo vat();


?>