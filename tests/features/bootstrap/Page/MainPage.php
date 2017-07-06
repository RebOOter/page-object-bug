<?php

namespace Page;

use Behat\Mink\Session;
use Page\Block\SearchForm;
use SensioLabs\Behat\PageObjectExtension\PageObject\Factory;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class MainPage extends Page
{
    protected $path = '/';

    private $searchForm;

    public function __construct(Session $session, Factory $factory, array $parameters = array())
    {
        parent::__construct($session, $factory, $parameters);

        $this->searchForm = new SearchForm($session, $factory);
    }

    public function verify(array $urlParameters)
    {

    }

    public function search($query)
    {
        $this->searchForm->fillForm($query);
    }
}