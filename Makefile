up:
	docker-compose up -d

down:
	docker-compose down

restart:
	docker-compose restart

# docker-compose exec app php artisan migrate
# docker-compose exec app composer require vendor/package-name