Test case for a specific Xdebug Segmentation Fault we've seen in some of our test suites with Xdebug 2.3.3.

To reproduce the segfault, clone this repo, install composer dependencies

`composer install`

then run the tests with coverage:

`./vendor/bin/phpunit -c tests --coverage-html=/var/www/html/coverage`

With Xdebug 2.3.3 and PHP 5.5.29 this is the output:

```
PHPUnit 4.8.18 by Sebastian Bergmann and contributors.
Warning:    No whitelist configured for code coverage

Segmentation fault (core dumped)
```