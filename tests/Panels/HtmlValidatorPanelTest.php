<?php

use Illuminate\Contracts\Foundation\Application;
use Mockery as m;
use Recca0120\LaravelTracy\Panels\HtmlValidatorPanel;

class HtmlValidatorPanelTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function test_render()
    {
        /*
        |------------------------------------------------------------
        | Set
        |------------------------------------------------------------
        */

        $app = m::mock(Application::class.','.ArrayAccess::class);

        /*
        |------------------------------------------------------------
        | Expectation
        |------------------------------------------------------------
        */

        $excepted = '<!DOCTYPE html><html><head><title>title</title></head><body></body></html>';

        $panel = new HtmlValidatorPanel();
        $panel->setLaravel($app);
        $panel->setHtml($excepted);

        /*
        |------------------------------------------------------------
        | Assertion
        |------------------------------------------------------------
        */

        $panel->getTab();
        $panel->getPanel();
    }
}
