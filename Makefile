init:
	docker-compose build
	docker-compose run --rm php-cli composer install

bash:
	docker-compose run --rm php-cli bash