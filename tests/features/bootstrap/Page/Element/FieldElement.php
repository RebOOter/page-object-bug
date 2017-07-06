<?php

namespace Page\Element;

use SensioLabs\Behat\PageObjectExtension\PageObject\Element;

class FieldElement extends Element
{
    public function fill($value)
    {
        $this->setValue($value);
    }
}