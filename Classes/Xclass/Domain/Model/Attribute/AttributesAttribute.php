<?php

namespace CDSRC\CdsrcFormAttributes\Xclass\Domain\Model\Attribute;

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
 * Attribute extension class for the form elements
 *
 * @author Matthias Toscanelli <m.toscanelli@code-source.ch>
 */
class AttributesAttribute extends \TYPO3\CMS\Form\Domain\Model\Attribute\AttributesAttribute {

    /**
     * Add an attribute object to the attribute array
     *
     * @param string $class Name of the attribute
     * @param mixed $value Typoscript configuration to construct value
     * @return tx_form_Domain_Model_Attributes
     */
    public function addAttribute($class, $value) {
        $class = strtolower((string) $class);
        if (strpos($class, 'data-') === 0) {
            $className = 'CDSRC\\CdsrcFormAttributes\\Domain\\Model\\Attribute\\CustomAttribute';
        } else {
            $className = 'TYPO3\\CMS\\Form\\Domain\\Model\\Attribute\\' . ucfirst($class) . 'Attribute';
        }
        if (!class_exists($className)){
            $className = 'CDSRC\\CdsrcFormAttributes\\Domain\\Model\\Attribute\\CustomAttribute';
        }
        $this->attributes[$class] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance($className, $value, $this->elementId);
        return $this;
    }

}
