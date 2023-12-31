<?php

/**
 * @var array $EM_CONF
 * @var string $_EXTKEY
 *
 * @noinspection PhpVariableNamingConventionInspection
 * @noinspection PhpMissingStrictTypesDeclarationInspection
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'co-stack.com Logs',
    'description' => 'Log Reader with a backend module and API to read, filter and delete logs from the TYPO3 Logging API',
    'category' => 'module',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Oliver Eglseder',
    'author_email' => 'oliver.eglseder@co-stack.com',
    'author_company' => 'co-stack.com',
    'version' => '4.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
