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

    public $config;

    function __construct($config_path = '')
    {
        if ($config_path != '') {
            $this->config_path = $config_path;
        }

        try {
            $config = Yaml::parse(file_get_contents($this->config_path));
        } catch (Exception $e) {
            echo '1ssss';//TODO
        }

        $this->config = $config;
    }

    public function getByKey($key)
    {
        return $this->config[$key];
    }

    public function getTheme()
    {
        return $this->config['theme'];
    }
}
