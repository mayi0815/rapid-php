<?php

use rapidPHP\modules\application\classier\apps\CGIApplication;
use rapidPHP\modules\configure\classier\Configurator;

define('ENV_NAME', !empty(get_cfg_var('env.name')) ? get_cfg_var('env.name') : 'dev');

define('PATH_APP', str_replace('\\', '/', dirname(__DIR__)) . '/');

define('PATH_PUBLIC', PATH_APP . 'public/');

require dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php' . '';
require dirname(dirname(dirname(__DIR__))) . '/vendor/mayi0815/rapid-framework/src/rapidPHP/init.php' . '';

$app = new CGIApplication(Configurator::getInstance());

$app->getConfig()
    ->setPaths([
        PATH_ROOT . 'apps/core/application.yaml',
        PATH_ROOT . 'apps/core/config/' . ENV_NAME,
        PATH_APP . 'application.yaml'
    ])
    ->load();

$app->run();
