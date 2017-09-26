#!/bin/bash

USER=${1:-laravel}

docker-compose exec --user $USER app bash
