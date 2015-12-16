<?php
namespace CDSRC\CdsrcFormAttributes\Xclass\Domain\Model\Element;

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
 * Optgroup model object
 *
 * @author Matthias Toscanelli <m.toscanelli@code-source.ch>
 */
class OptgroupElement extends \TYPO3\CMS\Form\Domain\Model\Element\OptgroupElement {

    /**
     * Append custom attributes
     * 
     */
    public function __construct() {
        $attributes = \CDSRC\CdsrcFormAttributes\Utility\ExtensionConfigurationUtility::getAttributesForElement($this);
        foreach($attributes as $attribute => $value){
            if(!array_key_exists($attribute, $this->allowedAttributes)){
                $this->allowedAttributes[$attribute] = $value;
            }
        }
        parent::__construct();
    }

    /**
     * Set a specific attribute by name and value
     *
     * @param string $attribute Name of the attribute
     * @param mixed $value Value of the attribute
     * @return \TYPO3\CMS\Form\Domain\Model\Element\AbstractElement
     */
    public function setAttribute($attribute, $value) {
        if(strpos($attribute, 'data-') === 0 && array_key_exists('data-*', $this->allowedAttributes)){
            $this->attributes->addAttribute($attribute, $value);
        }elseif (array_key_exists($attribute, $this->allowedAttributes)) {
            $this->attributes->addAttribute($attribute, $value);
        }
        return $this;
    }

}
