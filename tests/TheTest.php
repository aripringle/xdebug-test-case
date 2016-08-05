<?php

require_once __DIR__ . '/../library/TestHelper.php';

class TheTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testWorksWithoutIntermediaryMethod()
    {
        \TestHelper::stopCodeCoverage();
        \TestHelper::stopCodeCoverage();
        \TestHelper::resumeCodeCoverage();
        \TestHelper::resumeCodeCoverage();
    }

    public function testIntermediaryMethodExplodesIfWeDoChangeStaticProperty()
    {
        \TestHelper::stopCodeCoverage();
        \TestHelper::stopAndResumeCoverage();
    }
}
