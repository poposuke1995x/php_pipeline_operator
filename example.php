<?php

require 'pipeline.php';

function double($data)
{
    return $data * 2;
}

function addTwo($data) 
{
    return $data + 2;
}

echo array_pipeline(5, ['double', 'addTwo']);
// 12

echo "\n";

echo array_pipeline(5, ['addTwo', 'double']);
// 14