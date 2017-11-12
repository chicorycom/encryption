<?php


use chicorycom\encryption;

require 'vendor/autoload.php';

$clype = new encryption();

$show = $clype->Crypte('jkjdsjds dskjdsjsd djjdsjjd');

echo $show.'<br/>';

echo $clype->Decrypte($show);



