# PHP Docker

> Dockerized PHP development stack: Apache, MySQL, phpMyAdmin, Memcached, Redis, Elasticsearch and RabbitMQ

Uses PHP 7.0, but switching to 7.1 or 7.2 should be a one-liner.

[![Build Status](https://travis-ci.org/abiusx/php-docker.svg)](https://travis-ci.org/abiusx/php-docker)

PHP Docker gives you everything you need for developing PHP applications locally on a Docker stack. It is based on Apache (you can find the Nginx alternatives at [This](https://github.com/kasperisager/php-dockerized))

## What's inside

* [PHP](http://php.net/)
* [Apache HTTP Server](http://apache.org/)
* [MySQL](http://www.mysql.com/)
* [phpMyAdmin](http://www.phpmyadmin.net/)
* [Memcached](http://memcached.org/)
* [Redis](http://redis.io/)
* [Elasticsearch](http://www.elasticsearch.org/)
* [RabbitMQ](https://www.rabbitmq.com/)

## Requirements

* [Docker Engine](https://docs.docker.com/installation/)
* [Docker Compose](https://docs.docker.com/compose/)
* [Docker Machine](https://docs.docker.com/machine/) (Mac and Windows only, installed automatically via Docker package)

## Running

Cd into docker folder and run:

```sh
$ docker-compose up
```

That's it! Browse through http://localhost or https://localhost (requires accepting self-signed certificate). phpMyAdmin is available via https://localhost/phpmyadmin.

Be sure to check www/index.php to see how you can use hostnames to refer to other containers from your front-end.

## License

Copyright &copy; 2014-2018 [Kasper Kronborg Isager](http://github.com/kasperisager). Licensed under the terms of the [MIT license](LICENSE.md).