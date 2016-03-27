<?php

namespace Stb\Configure;

use Symfony\Component\Yaml\Parser;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Load the application Configure.
 */
class ApplicationConfig
{

    private $config_path = __DIR__ . '/../../config.yml';

    public $parser;

    function __construct(Parser $parser, $config_path = '')
    {
        if ($config_path != '') {
            $this->config_path = $config_path;
        }
        $this->parser = $parser;
    }

    public function getByKey($key)
    {
        try {
            $config = $this->parser->parse(file_get_contents($this->config_path));
        } catch (Exception $e) {
            echo '1ssss';
        }

        return $config[$key];
    }
}
