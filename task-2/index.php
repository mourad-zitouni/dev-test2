<?php

require 'Path.php';

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;
echo '<br>';
$path->cd('../../f');
echo $path->currentPath;
// should display '/a/b/c/x'.
echo '<br>';

$path->cd('/');
echo $path->currentPath;
