# Makefile for Docker Nginx PHP Composer and PostgreSQL

include .env

# PostgreSQL
DB_DUMP_DIR=.docker/postgres/dump
CURRENT_USERNAME= $(USER)

export CURRENT_USERNAME

help:
	@echo ""
	@echo "usage: make COMMAND"
	@echo ""
	@echo "Commands:"
	@echo "  docker-start        Create and start containers"
	@echo "  docker-stop         Stop services"
	@echo "  docker-down         Stop and clear all services"
	@echo "  docker-rebuild      Rebuild all services"
	@echo "  nginx-bash          Bash nginx"
	@echo "  nginx-reload        Reload nginx"
	@echo "  logs                Follow log output"
	@echo "  postgres-bash       Bash postgres"
	@echo "  postgres-dump       Create backup of database"
	@echo "  postgres-restore    Restore backup of databases"
	@echo "  php-bash            Bash php"
	@echo "  php-sudo-bash       Bash php via root"
	@echo "  composer-install    Install all composer dependencies"
	@echo "  yii-init            Initialize Yii application"
	@echo "  ssh-copy            Copy ssh keys"
	@echo "  set-permissions     Set project dir permissions"

ssh-copy:
	@docker exec -it -u $(CURRENT_USERNAME) $(shell docker-compose ps -q php) ssh-copy-id -i ~/.ssh/id_rsa git@81.95.237.114

docker-start:
	@docker-compose up -d
	@echo 'Application link http://localhost:${DOCKER_NGINX_PORT}'

docker-stop:
	@docker-compose stop

docker-down:
	@docker-compose down -v

docker-rebuild:
	@docker-compose build

nginx-bash:
	@docker exec -it $(shell docker-compose ps -q nginx) bash

nginx-reload:
	@docker exec -it $(shell docker-compose ps -q nginx) /etc/init.d/nginx reload

logs:
	@docker-compose logs -f

postgres-bash:
	@docker exec -it $(shell docker-compose ps -q postgres) bash

postgres-dump:
	@mkdir -p $(DB_DUMP_DIR)
	PGPASSWORD="$(DB_PASSWORD)"
	@docker exec $(shell docker-compose ps -q postgres) pg_dump -U "$(DB_USER)" -O $(DB_NAME) > $(DB_DUMP_DIR)/`date +%Y-%m-%d_%H:%M:%S`.sql 2>/dev/null

postgres-restore:
	PGPASSWORD="$(DB_PASSWORD)"
	docker exec -i $(shell docker-compose ps -q postgres) psql -U "$(DB_USER)" $(DB_NAME) < $(shell find $(DB_DUMP_DIR) -maxdepth 1 -type f -name '*.sql' | sort -r | head -1)

php-bash:
	@docker exec -it $(shell docker-compose ps -q php) bash

php-sudo-bash:
	@docker exec -it -u root $(shell docker-compose ps -q php) bash

composer-install:
	@docker exec -it $(shell docker-compose ps -q php) composer1 install

yii-init:
	@docker exec -it $(shell docker-compose ps -q php) php init

set-permissions:
	@docker exec -it -u root $(shell docker-compose ps -q php) bash -c "chown -R $(CURRENT_USERNAME):www-data /var/www/html"
	@docker exec -it -u root $(shell docker-compose ps -q php) bash -c "chmod -R g+rwx /var/www/html"
