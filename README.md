# Symfony Base

Symfony base adds admin user, security, fixture, bootstrap.

## Installation

Open a command console, enter your project directory and execute:

```console
$ composer require gonzakpo/symfony_base
```

```console
$ cp .env .env.local
```

Configure:
SUPER_EMAIL=
SUPER_PASS=

```console
$ symfony console doc:data:create
$ symfony console doc:sche:create
$ symfony console doc:fix:load
```


## Author
Gonzalo Alonso - gonkpo@gmail.com
