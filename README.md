laravel-parse-url
=================

Based on twitter-text-php [https://github.com/nojimage/twitter-text-php]


## Installation

Require this package with composer:

    composer require vizath/laravel-parse-url

After updating composer, add the ServiceProvider to the providers array in app/config/app.php

    'Vizath\ParseUrl\ServiceProvider',

If you want to use the facade to log messages, add this to your facades in app.php:

    'ParseUrl' => 'Vizath\ParseUrl\Facade',

## Usage

    ParseUrl::addHtmlLinks("a link to google.com is here");