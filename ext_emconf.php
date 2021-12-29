<?php

/***************************************************************************
 * Extension Manager/Repository config file for ext "dpsgwue_osm_extended"
 **************************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'DPSG Würzburg Openstreetmap Extended',
    'description' => 'Extension for openstreetmap extended informations',
    'category' => 'fe',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'DPSG Wuerzburg',
    'author_email' => 'technik@dpsg-wuerzburg.de',
    'author_company' => 'DPSG Wuerzburg',
    'version' => '1.2.0',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '7.6.4-10.4.99',
                ],
            'conflicts' =>
                [
                ],
            'suggests' =>
                [
                ],
        ],
    'clearcacheonload' => true,
];

