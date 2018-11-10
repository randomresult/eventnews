<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'News events',
    'description' => 'Events for news',
    'category' => 'plugin',
    'author' => 'Georg Ringer',
    'author_email' => '',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '2.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.9.99',
            'news' => '7.0.0-7.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
