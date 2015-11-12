<?php

require_once __DIR__ . '/../../../library/TestHelper.php';

class IndexControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{
    public function setUp()
    {
        $this->stopCodeCoverage();

        $this->bootstrap = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');
        parent::setUp();

        $this->truncateAllTables(false, []);

        $this->resumeCodeCoverage(false);
    }

    public function testIndexAction()
    {
        $this->request->setPost(
            [
                'id' => 1,
                'action' => 'add',
            ]
        );

        $this->request->setMethod('POST');

        $this->dispatch('/');

        $this->assertResponseCode('200');
    }

    protected function stopCodeCoverage()
    {
        return TestHelper::stopCodeCoverage();
    }

    protected function resumeCodeCoverage($force_start = false)
    {
        return TestHelper::resumeCodeCoverage($force_start);
    }

    public function truncateAllTables($connection, $excludes = [])
    {
        return TestHelper::truncateAllTables($connection, $excludes);
    }
}
