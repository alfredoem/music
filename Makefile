.DEFAULT_GOAL := help

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

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-16s\033[0m %s\n", $$1, $$2}'