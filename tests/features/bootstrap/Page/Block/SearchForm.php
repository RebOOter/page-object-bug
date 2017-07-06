<?php

namespace Page\Block;

use Behat\Mink\Element\NodeElement;
use Behat\Mink\Session;
use Page\Element\FieldElement;
use SensioLabs\Behat\PageObjectExtension\PageObject\Element;
use SensioLabs\Behat\PageObjectExtension\PageObject\Factory;

class SearchForm extends Element
{
    private $searchField;

    public function __construct(Session $session, Factory $factory)
    {
        parent::__construct($session, $factory);

        $this->selector = '#isgf';

        $this->searchField = new FieldElement($session, $factory);
    }

    public function fillForm($query)
    {
        $this->searchField->fill($query);
    }
}