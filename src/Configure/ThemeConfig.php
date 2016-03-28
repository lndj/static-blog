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

    public $configName;

    public $config;

    function __construct()
    {
        $app_config = new ApplicationConfig();

        $this->configName = $app_config->getTheme;

        //TODO 完成所有配置项的获取

    }

    public function getTitle()
    {
        return $this->config['title'];
    }





}
