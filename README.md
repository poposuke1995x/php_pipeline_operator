# php_pipeline_operator

## Getting Started / スタートガイド

- お使いの FW のヘルパ関数として登録する、あるいは、ファイルをインポートするなどしてご使用ください。
- You can use this by installation to helper function in FW or importing.

## Description / 説明

1. 関数の第一引数に処理したいデータを渡してください。
2. 関数の第二引数に適用させたい順に並べた string 型の関数名の配列を渡してください。
3. Pass the value that you want to process to first argument.
4. Pass an array of function names of type string in the order you want them to be applied as the second argument of the function.

## Caution / 注意点

- 第二引数に渡せる関数は引数が一つである必要があります。
- The function that can be passed as the second argument must have a single argument.

## Sample

```
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
```
