<?php 

function getPrice($price)
{
    return number_format(((int)$price)/100, 2, ',', '');
}