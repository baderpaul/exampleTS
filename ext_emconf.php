<?php

/**
 * Extension Manager/Repository config file for ext "eaw_t3124".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'EAW T3 12.4',
    'description' => 'Extension Template der EAW-Website',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99',
            'fluid_styled_content' => '10.4.0-12.4.99',
            'rte_ckeditor' => '10.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SpreadyourmindWerbeagenturUg\\EawT3124\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Tim Zimmermann',
    'author_email' => 'tz@spreadyourmind.de',
    'author_company' => 'spreadYourMind Werbeagentur UG',
    'version' => '1.0.1.0',
];
