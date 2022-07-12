<?php 
function add():int{
    static $a = 0;
    $a++;
    return $a;
}
echo add();
echo add();
echo add();

?>