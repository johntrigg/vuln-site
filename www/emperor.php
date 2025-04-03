<?php
$emperor = file_exists('/.../galactic-emperor.txt') 
    ? trim(file_get_contents('/.../galactic-emperor.txt')) 
    : 'UNKNOWN';

echo $emperor;