start:
	createdb testdb
	composer update

startLocal:
	php -S localhost:8080 -t public public/index.php