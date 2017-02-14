<?php 

namespace Tylercd100\Validator\Phone;

use Illuminate\Support\ServiceProvider as IlluminateProvider;
use Tylercd100\Validator\Phone\Validator;

class ServiceProvider extends IlluminateProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->resolving('validator', function ($factory, $app) {
            
            $x = new Validator();

            $factory->extend('phone', function ($attribute, $value, $parameters, $validator) use ($x) {
                var_dump([$attribute, $value, $parameters]);
                die();
                return $x->isE164($value);
            });
        });
    }
}
