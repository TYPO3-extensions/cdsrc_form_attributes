<?php
namespace CDSRC\CdsrcFormAttributes\Domain\Model\Attribute;

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
 * Custom attribute 
 *
 * @author Matthias Toscanelli <m.toscanelli@code-source.ch>
 */
class CustomAttribute extends \TYPO3\CMS\Form\Domain\Model\Attribute\AbstractAttribute {


	/**
	 * Set the value
	 *
	 * @param string $value The value to set
	 * @return void
	 */
	public function setValue($value) {
		if (is_array($value) === TRUE) {
                    $value = $this->localCobj->cObjGetSingle('TEXT', $value);
		}elseif(is_string($value) === FALSE){
                    $value = '';
                }
		$this->value = $value;
	}
        
	/**
	 * Gets the attribute 'data-*'.
	 * Used with all elements
	 * Case Sensitive
	 *
	 * Custom data attributes are intended to store custom data private 
         * to the page or application, for which there are no more appropriate 
         * attributes or elements.
	 *
	 * @return string Attribute value
	 */
	public function getValue() {
		$attribute = (string) $this->value;
		return $attribute;
	}

}
