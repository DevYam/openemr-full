<?php

declare(strict_types=1);

namespace Laminas\ModuleManager\Feature;

use Laminas\ServiceManager\Config;

interface TranslatorPluginProviderInterface
{
    /**
     * Expected to return \Laminas\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|Config
     */
    public function getTranslatorPluginConfig();
}
