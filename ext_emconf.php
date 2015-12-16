<?php

/* * *************************************************************
 * Extension Manager/Repository config file for ext "cdsrc_form_attributes".
 *
 * Auto generated 03-03-2015 10:42
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 * ************************************************************* */

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Additional attributes for tx_form',
    'description' => 'Extend default CORE form extension with custom attributes for fields. You can customize as you want (placeholder, data-link, autocomplete...).',
    'category' => 'plugin',
    'version' => '1.0.1',
    'state' => 'stable',
    'uploadfolder' => FALSE,
    'createDirs' => '',
    'clearcacheonload' => TRUE,
    'author' => 'Matthias Toscanelli',
    'author_email' => 'm.toscanelli@code-source.ch',
    'author_company' => 'Code-Source',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-7.1.99',
            'form' => '6.2.0+'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);

