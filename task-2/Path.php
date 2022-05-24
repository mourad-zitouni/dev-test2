<?php

class Path
{
    public $currentPath;

    function __construct($path)
    {
        $this->currentPath = $path;
    }

    public function cd($newPath)
    {
      $caracter =  substr($newPath, -1);
      $parentCount = substr_count($newPath, '../');
      if ($parentCount > 1) {
        $parentCount++;
      }
      $this->currentPath = substr($this->currentPath, 0, -$parentCount) . $caracter;
    }
}

