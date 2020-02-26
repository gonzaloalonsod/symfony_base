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

### Use
- [Symfony](https://symfony.com)
- [Easy Admin Bundle](https://symfony.com/doc/master/bundles/EasyAdminBundle/index.html)

## Author
Gonzalo Alonso - gonkpo@gmail.com
