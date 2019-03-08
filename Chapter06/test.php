<?php

class classname{
    function __construct($param){
        echo 'Constructor called with a parameter ' .$param. '.<br />';
    }
}

$a = new classname('First');
$b = new classname('Second');

$c = new classname(); // this will result to error message because there's no argument passed to the constructor of the Class.

?>