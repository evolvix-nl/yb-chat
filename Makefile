.PHONY: start stop setup install logs migrate

all: start

start:
	docker compose up -d

stop:
	docker compose down

setup: install start migrate

install:
	docker compose run api composer install
	docker compose run frontend yarn

migrate:
	docker compose exec api php artisan migrate --seed

logs:
	docker compose logs -f frontend
