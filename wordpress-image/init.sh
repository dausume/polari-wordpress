#!/bin/bash

# This must be run via docker-compose using secure shell on a wordpress container
# This script ensures that the favicon is copied correctly into the wordpress instance.

# Check if the favicon file doesn't exist
if [ ! -f /var/www/html/favicon.ico ]; then
  cp /favicon/favicon.ico /var/www/html/
fi

# Continue with the default WordPress entry point
docker-entrypoint.sh apache2-foreground