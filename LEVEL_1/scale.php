<?php

$input = readline();
$input_values = explode(' ', $input);


if ($input_values[0] == $input_values[1])
{
    $response = 'In balans';
}
else
{
    $response = 'Niet in balans';
}

echo $response;