<?php

namespace Stb\Configure;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;
use Stb\Configure\ApplicationConfig;

/**
 * Get the Configure from theme config file.
 */
class ThemeConfig
{

    public $config;

    function __construct()
    {
        # code...
    }
}
