<?php

declare(strict_type = 1);


function getTransactionFiles(): array
{

    $files = [];

    foreach(scandir(FILES_PATH) as $file){

        var_dump($file);


    }

}


?>

