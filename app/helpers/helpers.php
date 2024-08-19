<?php

function view($view = 'home', $data = [], $print = true)
{
    $output     = "View not Found";
    $filePath   = "views/".$view.".php";
    if (file_exists($filePath))
    {
        ob_start();
        extract($data);
        include $filePath;
        $output = ob_get_clean();
    }
    if ($print)
    {
        print $output;
    }
}
