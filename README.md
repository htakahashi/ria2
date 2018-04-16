# IASIG Senior Project

## Setting up Project

Here are the steps to setup the project This is all in the terminal/shell:

- composer install
- sudo npm install -g npm bower yarn
- yarn install
- bower install --allow-root
- php artisan migrate
- php artisan db:seed
- npm run dev

## Updating the database

If you rewrite the seeds, use this command to refresh the database with your new data:

- php artisan migrate:refresh --seed

## Website

<a href="https://test-iasig.com/" target="_blank">test-iasig.com</a>