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

Configure:
SUPER_EMAIL=
SUPER_PASS=

```console
symfony console doc:data:create
symfony console doc:sche:create
symfony console doc:fix:load
```


## Author
Gonzalo Alonso - gonkpo@gmail.com
