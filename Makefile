test: 
	@composer install --dev; vendor/bin/phpunit --testdox -c tests

test-coverage-html: 
	@composer install --dev; vendor/bin/phpunit --testdox --coverage-html=coverage-html -c tests

test-coverage-clover: 
	@composer install --dev; vendor/bin/phpunit --testdox --coverage-clover=coverage-clover -c tests

test-coverage-text: 
	@composer install --dev; vendor/bin/phpunit --testdox --coverage-text=coverage-text -c tests
