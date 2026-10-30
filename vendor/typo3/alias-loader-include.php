<?php

declare(strict_types=1);

$composerAutoLoader = require dirname(__DIR__) . '/autoload.php';
$classAliasLoader = new TYPO3\ClassAliasLoader\ClassAliasLoader($composerAutoLoader);
require_once dirname(__DIR__) . '/composer/autoload_classaliasmap_static.php';
$classAliasLoader->setAliasMap(TYPO3\ClassAliasLoader\ClassAliasLoaderStaticInit604feb0883ed11ba1fd9f782d2be38c6::$aliasMap);
$classAliasLoader->register(true);
TYPO3\ClassAliasLoader\ClassAliasMap::setClassAliasLoader($classAliasLoader);
