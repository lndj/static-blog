<?php

namespace Stb\Filesystem;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

/**
 * Filesystem .Manipulate files
 */
class File extends Filesystem
{

    function __construct()
    {

    }

    public function getTheme()
    {
        # code...
    }
    public function getPost($name)
    {
        # code...
    }
    public function getModifyTime($name)
    {
        # code...
    }
}
