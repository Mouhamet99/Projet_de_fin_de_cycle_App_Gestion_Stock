<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;

require dirname(__DIR__).'/vendor/autoload.php';

(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

if ($_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
       // "api-platform/core": "^2.6",
       // "friendsofphp/php-cs-fixer": "^2.18",
       // "knplabs/knp-snappy-bundle": "^1.8",
       /* 
  "api-platform/api-pack": {
    "version": "v1.3.0"
    },
    "api-platform/core": {
        "version": "2.5",
        "recipe": {
            "repo": "github.com/symfony/recipes",
            "branch": "master",
            "version": "2.5",
            "ref": "a93061567140e386f107be75340ac2aee3f86cbf"
        },
        "files": [
            "./config/packages/api_platform.yaml",
            "./config/routes/api_platform.yaml",
            "./src/Entity/.gitignore"
        ]
    },
      "friendsofphp/php-cs-fixer": {
        "version": "2.16",
        "recipe": {
            "repo": "github.com/symfony/recipes",
            "branch": "master",
            "version": "2.16",
            "ref": "c1947bad147704aeaf0285745f0baae927a58959"
        },
        "files": [
            "./.php_cs.dist"
        ]
    },
    "friendsofphp/proxy-manager-lts": {
        "version": "v1.0.2"
    },
    "knplabs/knp-snappy": {
        "version": "v1.2.1"
    },
    "knplabs/knp-snappy-bundle": {
        "version": "1.5",
        "recipe": {
            "repo": "github.com/symfony/recipes-contrib",
            "branch": "master",
            "version": "1.5",
            "ref": "c81bdcf4a9d4e7b1959071457f9608631865d381"
        }
    },
    */