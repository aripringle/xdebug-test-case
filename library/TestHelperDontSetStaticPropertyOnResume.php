<?php

class TestHelper
{
    protected static $coverageStopped = false;

    public static function stopCodeCoverage()
    {
        if (self::$coverageStopped === false) {
            self::$coverageStopped = xdebug_stop_code_coverage(false);
        }
    }

    public static function resumeCodeCoverage()
    {
        xdebug_start_code_coverage(XDEBUG_CC_UNUSED | XDEBUG_CC_DEAD_CODE);
    }

    public static function stopAndResumeCoverage()
    {
        self::stopCodeCoverage();
        self::resumeCodeCoverage();
    }
}
