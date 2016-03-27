<?php

namespace Stb\Configure;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;

/**
 * Load the application Configure.
 */
class ApplicationConfig
{

    private $config_path = __DIR__ . '/../../config.yml';

    function __construct($config_path = '')
    {
        if ($config_path != '') {
            $this->config_path = $config_path;
        }
    }

    public function getByKey($key)
    {
        try {
            $config = Yaml::parse(file_get_contents($this->config_path));
        } catch (Exception $e) {
            echo '1ssss';
        }

        return $config[$key];
    }
}
