<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Xclass for Attributes
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Attribute\\AttributesAttribute'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Attribute\\AttributesAttribute',
);
// Xclass for TypoScript
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Factory\\TypoScriptFactory'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Factory\\TypoScriptFactory',
);


// Xclass for Elements
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\ButtonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\ButtonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\CheckboxElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\CheckboxElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\CheckboxGroupElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\CheckboxGroupElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\FieldsetElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\FieldsetElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\FileuploadElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\FileuploadElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\HiddenElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\HiddenElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\ImagebuttonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\ImagebuttonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\OptgroupElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\OptgroupElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\OptionElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\OptionElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\PasswordElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\PasswordElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\RadioElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\RadioElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\RadioGroupElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\RadioGroupElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\ResetElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\ResetElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\SelectElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\SelectElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\SubmitElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\SubmitElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\TextareaElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\TextareaElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Element\\TextlineElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Element\\TextlineElement',
);

// Xclass for JSon Elements
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\ButtonJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\ButtonJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\CheckboxGroupJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\CheckboxGroupJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\CheckboxJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\CheckboxJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\ContainerJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\ContainerJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\FieldsetJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\FieldsetJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\FileuploadJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\FileuploadJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\HiddenJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\HiddenJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\PasswordJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\PasswordJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\RadioGroupJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\RadioGroupJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\RadioJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\RadioJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\ResetJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\ResetJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\SelectJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\SelectJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\SubmitJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\SubmitJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\TextareaJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\TextareaJsonElement',
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Form\\Domain\\Model\\Json\\TextlineJsonElement'] = array(
    'className' => 'CDSRC\\CdsrcFormAttributes\\Xclass\\Domain\\Model\\Json\\TextlineJsonElement',
);


