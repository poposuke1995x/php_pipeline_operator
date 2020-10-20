<?php

function array_pipeline($data, array $functions)
{
    $recursive = function ($data, $count = 0) use ($functions, &$recursive)
    {
        if ($count === count($functions)) return $data;
        return $recursive($functions[$count]($data), $count+1);
    };
    return $recursive($data);
}
