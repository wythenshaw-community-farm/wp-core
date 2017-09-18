# Wythenshawe Community Farm Wordpress Website

Wordpress website for Wythenshawe Community Farm

Wordpress install base on [Bedrock](https://roots.io/bedrock/)
[![Packagist](https://img.shields.io/packagist/v/roots/bedrock.svg?style=flat-square)](https://packagist.org/packages/roots/bedrock)

Bedrock is a modern WordPress stack that helps you get started with the best development tools and project structure.


## Requirements

* PHP >= 5.6
* Composer - 
    [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)


## Installation

To install the project follow these steps…

1. Clone the repository into a local directory on your development machine

    $ git clone git@github.com:toby-griffiths/wythenshawe-community-farm.git \
        /path/on/your/machine

1. Install the dependencies using composer

    $ cd /path/on/your/machine
    $ composer install

1. Copy the `.env.dist` file to `env` and update the environment variables 
   in the new `.env` file

    $ cp .env.dist .env


## Running the development environment

To run the development environment, we use [Docker](https://www.docker.com/), 
and [Docker compose](https://docs.docker.com/compose/). 
You will need to install this on your machine to fire up the development 
environment.  To do this, see the [Docker install instructions
](https://docs.docker.com/engine/installation/) and the [Docker compose install 
instructions](https://docs.docker.com/compose/install/).

1. Start Docker containers...

    $ cd /path/on/your/machine
    $ docker-compose up -d

1. Create an alias IP address to allow the docker container to connect back to 
   your Xdebug listener... 

    $ sudo ifconfig lo0 alias 10.254.254.254

1. Visit http://localhost:8000


## Contributing

Contributions are welcome from everyone. We have [contributing guidelines
](https://github.com/wythenshawe-community-farm/guidelines/blob/master/CONTRIBUTING.md) 
to help you  get started.


## Community

Keep track of development and community news...

* (links to be added here)


## Related Information

[roots-wp-salt]:https://roots.io/salts.html
[wp-cli-dotenv]:https://github.com/aaemnnosttv/wp-cli-dotenv-command
