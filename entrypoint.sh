#!/bin/bash
set -e

# Default to port 8080 if not set
PORT=${PORT:-8080}

# Replace the placeholder in the Apache config with the actual port
sed -i "s/\${PORT}/$PORT/g" /etc/apache2/sites-available/propvr.conf
sed -i "s/\${PORT}/$PORT/g" /etc/apache2/ports.conf

# Ensure Apache environment variables are set
export APACHE_RUN_USER=www-data
export APACHE_RUN_GROUP=www-data

# Start Apache in the foreground
apache2-foreground
