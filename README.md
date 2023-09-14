# Arandor Companion App

## Stack
| Package | Version |
|----------|:-------------:|
| php | 8.2.9 |
| node | latest |
| [Kirby CMS](https://getkirby.com) | 3.9.6.1 |
| [Vite JS](https://vitejs.dev) | 4.3.2 |
| [Alpine JS](https://alpinejs.dev) | 3.12.3 |
| [Tailwind CSS](https://tailwindcss.com) | 3.3.3 |

## Install

Install composer and all their dependencies.

    composer install

Start the server locally

    php -S localhost:8000 kirby/router.php

Change to the src folder and install all packages including vite, alpine and tailwind

    cd src
    yarn install

Then run the build command

    yarn run build:watch
