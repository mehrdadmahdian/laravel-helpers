<?php

function ddhere()
{
    dd('here');
}

function ddmethod($var = null)
{
    $backTrace = debug_backtrace();
    $second = $backTrace[1];

    $exploded = explode('\\', $second['class']);
    $className = $second['class'];//$exploded[count($exploded)-1];
    if ($var) {
        dd($var , $className.'->'.$second['function'].'() at '.(isset($second['line'])?$second['line']: 'undefined line.'));
    } else {
        dd($className.'->'.$second['function'].'() at '.(isset($second['line'])?$second['line']: 'undefined line.'));
    }
}