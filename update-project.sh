#!/bin/bash

# Run composer container to install project dependancies
docker run --rm -v $(pwd):/app composer/composer update

docker-compose up
