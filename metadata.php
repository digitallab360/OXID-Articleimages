<?php
/**
 * Modul: dlb_articleimages
 * Web: https://www.digitallab360.de
 * Mail: oxid@digitallab360.de
 * (c) 2019 by digitallab360
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'dlb_articleimages',
    'title'       => [
        'de' => '.dlb. | Anzahl der Artikelbilder bestimmen',
        'en' => '.dlb. | Determine the number of product images',
    ],
    'description' => [
        'de' => 'Bestimme wie viele Artikelbilder du im Shop verwenden möchtest. Du hast die Wahl von 1-12 Produktbilder.',
        'en' => 'Determine how many product images you want to use in the shop. You have the choice of 1-12 product images.',
    ],
    'thumbnail'     => 'out/admin/src/img/logo.svg',
    'version'       => '1.0',
    'author'        => 'digitallab360',
    'url'           => 'https://www.digitallab360.de/',
    'email'         => 'oxid@digitallab360.de',
    'extend'        => [
        \OxidEsales\Eshop\Core\Config::class    => \DigitalLab\ArticleImages\Application\Controller\Admin\CustomArticleImages::class
    ],
    'controllers'   => [],
    'templates' 	=> [],
    'blocks' 		=> [],
    'events'        => [],
    'settings'      => [
        [
            'group'         => 'settings',
            'name'          => 'CustomImageFields',
            'type'          => 'select',
            'value'         => '7',
            'constraints'   => '1|2|3|4|5|6|7|8|9|10|11|12'
        ]
    ]
];