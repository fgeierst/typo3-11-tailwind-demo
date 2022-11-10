<?php

/**
 * Extension Manager/Repository config file for ext "tailwind_demo_base".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'tailwind demo base',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Floriangeierstanger\\TailwindDemoBase\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Florian Geierstanger',
    'author_email' => 'florian@geierstanger.org',
    'author_company' => 'floriangeierstanger',
    'version' => '1.0.0',
];
