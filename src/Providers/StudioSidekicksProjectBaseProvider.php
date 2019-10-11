<?php

namespace  StudioSidekicks\Providers;

use Illuminate\Support\ServiceProvider;

class StudioSidekicksProjectBaseProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
//        $this->setOverrides();
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->prepareResources();
//        $this->setUserResolver();
    }

    /**
     * Prepare the package resources.
     *
     * @return void
     */
    protected function prepareResources()
    {
        // Publish config
        $config = realpath(__DIR__.'/../../config/config.php');
        $this->mergeConfigFrom($config, 'bpstudio.base');

        $this->publishes([
            $config => config_path('bpstudio.base.php'),
        ], 'config');

        // Publish migrations
        $migrations = realpath(__DIR__.'/../migrations');

        $this->publishes([
            $migrations => $this->app->databasePath().'/migrations',
        ], 'migrations');
    }
//
//    /**
//     * Registers the users.
//     *
//     * @return void
//     */
//    protected function registerUsers()
//    {
//        $this->registerHasher();
//
//        $this->app->singleton('sentinel.users', function ($app) {
//            $config = $app['config']->get('cartalyst.sentinel.users');
//
//            return new IlluminateUserRepository(
//                $app['sentinel.hasher'],
//                $app['events'],
//                $config['model']
//            );
//        });
//    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return [
        ];
    }

    /**
     * Sets the user resolver on the request class.
     *
     * @return void
     */
    protected function setUserResolver()
    {
        $this->app->rebinding('request', function ($app, $request) {
            $request->setUserResolver(function () use ($app) {
                return $app['sentinel']->getUser();
            });
        });
    }

    /**
     * Performs the necessary overrides.
     *
     * @return void
     */
    protected function setOverrides()
    {
        $config = $this->app['config']->get('bpstudio.base');

        $users = $config['users']['model'];

        $roles = $config['roles']['model'];
    }
}
