build:
	@docker-compose build --no-cache
	### @docker build -f docker/base/Dockerfile -t backend docker/base/

up:
	@docker-compose up -d

down:
	@docker-compose down

restart:
	@make down
	@make up

install:
	docker-compose -f docker-compose.tasks.yml run --rm cli composer install

composer:
	docker-compose -f docker-compose.tasks.yml run --rm cli composer ${command}

delete-sqldata:
	@sudo rm -rf ./docker/mysql/sql/sqldata