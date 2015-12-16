<?php

namespace CDSRC\CdsrcFormAttributes\Xclass\Domain\Factory;

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
 * Typoscript factory for form
 *
 * Takes the incoming Typoscipt and adds all the necessary form objects
 * according to the configuration.
 *
 * @author Matthias Toscanelli <m.toscanelli@code-source.ch>
 */
class TypoScriptFactory extends \TYPO3\CMS\Form\Domain\Factory\TypoScriptFactory {

    /**
     * Set the attributes
     *
     * @param \TYPO3\CMS\Form\Domain\Model\Element\AbstractElement $element Model object
     * @param array $arguments Arguments
     * @return void
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function setAttributes(\TYPO3\CMS\Form\Domain\Model\Element\AbstractElement $element, array $arguments) {
        if ($element->hasAllowedAttributes()) {
            $attributes = $element->getAllowedAttributes();
            $mandatoryAttributes = $element->getMandatoryAttributes();
            foreach ($attributes as $attribute => $value) {
                // Iterate through argmuments to find "data-*" attributes
                if ($attribute === 'data-*') {
                    foreach ($arguments as $key => $argument) {
                        if (strpos($key, 'data-') === 0) {
                            $key = rtrim($key, '.');
                            if (!empty($arguments[$key]) || !empty($arguments[$key . '.'])) { 
                                try {
                                    $element->setAttribute($key, empty($arguments[$key]) ? $arguments[$key . '.'] : $arguments[$key]);
                                } catch (\Exception $exception) {
                                    throw new \RuntimeException('Cannot call user function for attribute ' . ucfirst($key), 1333754904);
                                }
                            }
                        }
                    }
                } elseif (isset($arguments[$attribute]) || isset($arguments[$attribute . '.']) || in_array($attribute, $mandatoryAttributes) || !empty($value)) {
                    if (!empty($arguments[$attribute])) {
                        $value = $arguments[$attribute];
                    } elseif (!empty($arguments[($attribute . '.')])) {
                        $value = $arguments[$attribute . '.'];
                    }
                    try {
                        $element->setAttribute($attribute, $value);
                    } catch (\Exception $exception) {
                        throw new \RuntimeException('Cannot call user function for attribute ' . ucfirst($attribute), 1333754904);
                    }
                }
            }
        } else {
            throw new \InvalidArgumentException('The element with id=' . $element->getElementId() . ' has no default attributes set.', 1333754925);
        }
    }

}
