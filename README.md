Test case for a specific Xdebug Segmentation Fault we've seen in some of our
test suites with Xdebug 2.3.3 through 2.4.1.

To reproduce the segfault, clone this repo, install composer dependencies

`composer install`

then run the tests with coverage:

`./vendor/bin/phpunit --coverage-html=/var/www/html/coverage tests/TheTest.php`

This will cause a segmentation fault on Xdebug 2.3.3 through 2.4.1.

This seems to be very specific to static classes calling other static classes
while setting static properties. I've included another test case that passes,
and the only difference is that a static property isn't set to false after
resuming code coverage. To run this:

`./vendor/bin/phpunit --coverage-html=/var/www/html/coverage tests/NoStaticPropertyOnResumeTest.php`

