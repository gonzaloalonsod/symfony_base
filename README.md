# Symfony Base

Symfony base adds admin user, security, fixture, bootstrap.

## Installation

Open a command console, enter your project directory and execute:

```console
git clone https://github.com/gonzakpo/symfony_base.git
cd symfony_base
composer install
```

```console
cp .env .env.local
```

#### Configure .env.local:
- SUPER_EMAIL=
- SUPER_PASSWORD=

```console
symfony console doc:data:create
symfony console doc:sche:create
symfony console doc:fix:load
```
### Docker compose

    * Start containers in the background: `docker-compose up -d`
    * Start containers on the foreground: `docker-compose up`. You will see a stream of logs for every container running.
    * Stop containers: `docker-compose stop`
    * Kill containers: `docker-compose kill`
    * View container logs: `docker-compose logs`
    * Execute command inside of container: `docker-compose exec SERVICE_NAME COMMAND` where `COMMAND` is whatever you want to run. Examples:
        * Shell into the PHP container, `docker-compose exec php-fpm bash`
        * Run symfony console, `docker-compose exec php-fpm bin/console`
        * Open a mysql shell, `docker-compose exec mysql mysql -uroot -pCHOSEN_ROOT_PASSWORD`

### Use
- [Symfony](https://symfony.com)
- [Easy Admin Bundle](https://symfony.com/doc/master/bundles/EasyAdminBundle/index.html)

## Author
Gonzalo Alonso - gonkpo@gmail.com
