<?php

try
{
    $conn = new mysqli("localhost", "root", "", "pixelplayground");
}
catch (Exception $e)
{
    $error = $e->getMessage();
    echo $error;
}
