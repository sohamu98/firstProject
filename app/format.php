<?php

declare(strict_types = 1);

function formatDollarAmount(float $amount): string{


    $inNegative = $amount < 0;

return ($inNegative ? '-' : '').'$' . number_format(abs($amount), 2);



}


function formatDate(string $date): string {

    return date('M j, Y',strtotime($date));



}






?>