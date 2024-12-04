PORT ?= 8000
start:
	createdb testdb
	composer update

startLocal:
	php -S localhost:8080 -t public public/index.php

watchFront:
	php -S localhost:8081 -t public templates/index.php