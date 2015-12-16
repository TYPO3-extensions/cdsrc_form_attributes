<?php
namespace CDSRC\CdsrcFormAttributes\Xclass\Domain\Model\Json;

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

/**
 * JSON password
 *
 * @author Matthias Toscanelli <m.toscanelli@code-source.ch>
 */
class PasswordJsonElement extends \TYPO3\CMS\Form\Domain\Model\Json\PasswordJsonElement {

    /**
     * Add custom attributes
     * 
     */
    public function __construct(){
        $attributes = \CDSRC\CdsrcFormAttributes\Utility\ExtensionConfigurationUtility::getAttributesForJsonElement($this);
        foreach($attributes as $attribute){
            if(!in_array($attribute, $this->allowedAttributes)){
                $this->allowedAttributes[] = $attribute;
            }
        }
        if(method_exists(parent, '__construct')){
            parent::__construct();
        }
    }

    /**
     * Set the attiobutes according to the allowed attributes of this element
     *
     * @param array $parameters Configuration array
     * @return void
     */
    protected function setAttributes(array $parameters) {
        if(in_array('data-*', $this->allowedAttributes)){
            foreach($parameters as $key => $parameter){
                if(strpos($key, 'data-') === 0){
                    $this->configuration['attributes'][$key] = $parameter;
                }
            }
        }
        foreach ($this->allowedAttributes as $allowedAttribute) {
            if (isset($parameters[$allowedAttribute])) {
                $this->configuration['attributes'][$allowedAttribute] = $parameters[$allowedAttribute];
            } elseif (!isset($this->configuration['attributes'][$allowedAttribute])) {
                $this->configuration['attributes'][$allowedAttribute] = '';
            }
        }
    }
}
