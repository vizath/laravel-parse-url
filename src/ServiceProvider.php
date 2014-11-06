<?php namespace Vizath\ParseUrl;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register 'urlparser' instance container to our UrlParser object
        $this->app['urlparser'] = $this->app->share(function($app) {
            return new \Vizath\ParseUrl\UrlParser;
        });

        // Shortcut so developers don't need to add an Alias in app/config/app.php
        // $this->app->booting(function() {
        //     $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        //     $loader->alias('UrlParser', 'Vizath\ParseUrl\UrlParser');
        // });
    }
}
