<?php

namespace CDSRC\CdsrcFormAttributes\Utility;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use \TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Extension configuration
 *
 * @author Matthias Toscanelli <m.toscanelli@code-source.ch>
 */
class ExtensionConfigurationUtility {

    /**
     * Extension configuration array
     * 
     * @var array
     */
    protected static $extConf = array();
    
    /**
     * Store user groups
     * 
     * @var array
     */
    protected static $usergroups = array();

    /**
     * Initialize configuration array
     */
    protected static function init() {
        if (empty(self::$extConf)) {
            self::$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['cdsrc_form_attributes']);
        }
    }

    /**
     * Return list of additional attributes for Elements
     * 
     * @param \TYPO3\CMS\Form\Domain\Model\Element\AbstractElement $element
     * 
     * @return boolean
     */
    public static function getAttributesForElement(\TYPO3\CMS\Form\Domain\Model\Element\AbstractElement $element) {
        self::init();
        $attributes = array();
        if($element){
            $classname = get_class($element);
            $configurationKey = 'additionalAttributesFor' . substr($classname, strrpos($classname, '\\') + 1);
            return array_merge(
                    self::getAttributeForConfigurationKey('additionalAttributesForAllElements', FALSE), 
                    self::getAttributeForConfigurationKey($configurationKey, FALSE)
                    );
        }
        return array();
    }

    /**
     * Return list of additional attributes for JsonElements
     * 
     * @param \TYPO3\CMS\Form\Domain\Model\Json\AbstractJsonElement $element
     * 
     * @return boolean
     */
    public static function getAttributesForJsonElement(\TYPO3\CMS\Form\Domain\Model\Json\AbstractJsonElement $element) {
        self::init();
        if($element){
            $classname = get_class($element);
            $configurationKey = 'additionalAttributesFor' . str_replace('Json', '', substr($classname, strrpos($classname, '\\') + 1));
            return array_unique(array_merge(
                    self::getAttributeForConfigurationKey('additionalAttributesForAllElements'), 
                    self::getAttributeForConfigurationKey($configurationKey)
                    ));
        }
        return array();
    }
    
    /**
     * Retrieve attributes for a specific configuration key
     * 
     * @param string $key
     */
    protected static function getAttributeForConfigurationKey($key, $withoutDefaultValue = TRUE){
        $attributes = array();
        if(is_string($key)){
            $elementAttributes = GeneralUtility::trimExplode(',', self::$extConf[$key], TRUE);
            for($i=0, $ni=count($elementAttributes); $i<$ni; $i++){
                $attribute = trim($elementAttributes[$i]);
                if($attribute === 'data-*' || preg_match('/^data(-?[a-z][a-z0-9]*)+(=.+)?$/', $attribute) || preg_match('/^[a-z][a-z0-9]*(=.+)?$/', $attribute)){
                    if($withoutDefaultValue){
                        $attributes[] = preg_replace('/=.+$/', '', $attribute);
                    }else{
                        list($key, $value) = GeneralUtility::trimExplode('=', $attribute, TRUE);
                        $attributes[$key] = (string)$value;
                    }
                }
            }
        }
        return $attributes;
    }

}
