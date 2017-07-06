<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Page\MainPage;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{

    private $mainPage;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(MainPage $mainPage)
    {
        $this->mainPage = $mainPage;
    }

    /**
     * @Given /^I open Main page$/
     */
    public function iOpenMainPage()
    {
        $this->mainPage->open();
        $this->mainPage->search('sdf');
    }
}
