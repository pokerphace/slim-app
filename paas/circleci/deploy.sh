#!/bin/bash

DIR="./slim-app"
if [ ! -d "$DIR" ]; then
  # Take action if $DIR exists. #
  echo "Installing config files in ${DIR}..."
  git clone https://github.com/pokerphace/slim-app.git slim-app
fi

# Go to project root
cd ~/slim-app

# Pull latest changes from the branch
git pull origin main

# Reset docker environment with latest changes
docker-compose down
docker-compose up -d --build
docker exec -it pokerphace-web composer install

exit 0
