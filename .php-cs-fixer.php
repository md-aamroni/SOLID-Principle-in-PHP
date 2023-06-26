<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$preset = json_decode(file_get_contents(__DIR__ . '/.php-cs-fixer.json'), true);
$finder = Finder::create()
    ->in([__DIR__ . '/src', __DIR__ . '/tests'])
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$config = new Config();
return $config
    ->setFinder($finder)
    ->setRules($preset)
    ->setRiskyAllowed(true)
    ->setUsingCache(true);