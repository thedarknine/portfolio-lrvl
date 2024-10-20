.DEFAULT_GOAL := help
SHELL := /bin/bash

.PHONY: *

## Launch Docker Compose
up:
	docker-compose up -d

## Stop Docker Compose
down:
	docker-compose down

## Restart Docker Compose
restart:
	docker-compose restart

## Run Pint code style fixer
pint:
	docker-compose exec app ./vendor/bin/pint

## Update DB
db-update:
# docker-compose exec app php artisan migrate:refresh
	docker-compose exec app php artisan migrate:fresh --seed

## Encrypt env file
env-encrypt:
	docker-compose exec app php artisan env:encrypt

## Clear config
clear:
	docker-compose exec app php artisan config:clear
	docker-compose exec app php artisan cache:clear

# docker-compose exec app php artisan migrate
# docker-compose exec app php artisan make:model Company -ms
# docker-compose exec app php artisan make:seeder CompanySeeder
# First migration
# docker exec app-portfolio-laravel php artisan migrate:fresh
# docker-compose exec app composer require vendor/package-name

## ------

# APPLICATION
APPLICATION := Portfolio

# COLORS
GREEN  := $(shell tput -Txterm setaf 2)
YELLOW := $(shell tput -Txterm setaf 3)
WHITE  := $(shell tput -Txterm setaf 7)
RESET  := $(shell tput -Txterm sgr0)

TARGET_MAX_CHAR_NUM=20
## Show this help
help:
	@echo '# ${YELLOW}${APPLICATION}${RESET}'
	@echo ''
	@echo 'Usage:'
	@echo '  ${YELLOW}make${RESET} ${GREEN}<target>${RESET}'
	@echo ''
	@echo 'Targets:'
	@awk '/^[a-zA-Z\-\_0-9]+:/ { \
		helpMessage = match(lastLine, /^## (.*)/); \
		if (helpMessage) { \
			helpCommand = substr($$1, 0, index($$1, ":")); \
			gsub(":", " ", helpCommand); \
			helpMessage = substr(lastLine, RSTART + 3, RLENGTH); \
			printf "  ${YELLOW}%-$(TARGET_MAX_CHAR_NUM)s${RESET} ${GREEN}%s${RESET}\n", helpCommand, helpMessage; \
		} \
	} \
	{ lastLine = $$0 }' $(MAKEFILE_LIST) | sort