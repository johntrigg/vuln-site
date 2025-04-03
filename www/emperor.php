<?php
$emperor = file_exists('/root/galactic-emperor.txt') 
    ? trim(file_get_contents('/root/galactic-emperor.txt')) 
    : 'UNKNOWN';

echo $emperor;