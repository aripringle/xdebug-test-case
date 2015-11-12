<?php

class TestHelper
{
    protected static $coverageStopped = false;

    public static function stopCodeCoverage()
    {
        if (function_exists('xdebug_stop_code_coverage') && self::$coverageStopped === false) {
            self::$coverageStopped = xdebug_stop_code_coverage(false);

            return self::$coverageStopped;
        }

        return;
    }

    public static function resumeCodeCoverage($force_start = false)
    {
        if (true === self::$coverageStopped || true === $force_start) {
            if (function_exists('xdebug_start_code_coverage')) {
                $started               = xdebug_start_code_coverage(XDEBUG_CC_UNUSED | XDEBUG_CC_DEAD_CODE);
                self::$coverageStopped = false;

                return $started;
            }
        }

        return;
    }

    public static function truncateAllTables($connection, $excludes = [])
    {
        self::stopCodeCoverage();

        // Do some stuff that shouldn't be covered

        self::resumeCodeCoverage();
    }
}
