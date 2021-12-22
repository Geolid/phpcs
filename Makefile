FIG=docker-compose
HAS_DOCKER:=$(shell command -v $(FIG) 2> /dev/null)
ifdef HAS_DOCKER
	USERID=$(shell id -u)
	GROUPID=$(shell id -g)
	EXEC=$(FIG) exec -u $(USERID):$(GROUPID) app
else
	EXEC=
endif
SF=$(EXEC) symfony
.DEFAULT_GOAL := help

help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
.PHONY: help

##
## Project setup & day to day shortcuts
##---------------------------------------------------------------------------

up:
	$(FIG) pull
	$(FIG) build --pull
	$(FIG) up -d
.PHONY: up

start: ## Start the project (Install in first place)
start: docker-compose.override.yml up vendor
.PHONY: start

stop: ## Stop docker containers
	$(FIG) down
.PHONY: stop

destroy: ## Destroy docker containers and volumes
	$(FIG) down -v
.PHONY: destroy

sh: ## Run bash in the app container
	$(EXEC) /bin/bash
.PHONY: sh

logs: ## Display logs. Use [log.nginx | log.app | log.db | log.maxmind | log.redis]
log.%:
	$(FIG) logs -f $(*)
.PHONY: logs

##
## Tests
##---------------------------------------------------------------------------

tests: ## Run all our tests
tests: phpunit security
.PHONY: tests

phpunit: ## Run phpunit test suite (You pass options to phpunit: make phpunit -- --filter PeriodTest)
	$(EXEC) composer test
.PHONY: phpunit

security: ## Check security of your dependencies (https://security.sensiolabs.org/) => web service end working on January 2021 TODO: replace by the Open-Source CLI tool that does the same locally, or use the Symfony CLI tool
	$(SF) check:security
.PHONY: security

# File rules
docker-compose.override.yml: docker-compose.override.yml.dist
	cp docker-compose.override.yml.dist docker-compose.override.yml
.PHONY: docker-compose.override.yml

vendor:
	$(EXEC) composer install --prefer-dist --no-progress --no-suggest --no-interaction
.PHONY: vendor
