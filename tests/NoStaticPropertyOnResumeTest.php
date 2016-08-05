<?php

require_once __DIR__ . '/../library/TestHelperDontSetStaticPropertyOnResume.php';

class NoStaticPropertyOnResumeTest extends PHPUnit_Framework_TestCase
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
