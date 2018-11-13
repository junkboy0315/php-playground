<?php
$origin = '';
$update = 'update!';

function foo(&$arg)
{
    $arg = &$GLOBALS['update'];
    // ポインタではないので、書き換わるのは$argの向き先だけ。
    // $argは$originとは別なので、別々の向き先を持てる。
}
foo($origin);
var_dump($origin);
// => ''
