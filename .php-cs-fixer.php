<?php

echo __DIR__;
$finder = PhpCsFixer\Finder::create()
    ->in('/Users/wiseyk/Documents/project/CI-CD-test/.husky')
    ->exclude(['.husky'])
    ->name('*.php')
    ->notName('*not_target.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$config = new PhpCsFixer\Config();

return $config->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_unused_imports' => true,
        'strict_param' => true,
])->setFinder($finder);
