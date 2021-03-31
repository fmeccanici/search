<?php


namespace App\Search\Infrastructure\Providers;


use App\Search\Infrastructure\Repositories\EloquentModelRepository;
use Illuminate\Support\Facades\Route;

class SearchServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerSearchRoutes();

        // Example of interface binding
//        $this->app->bind(
//            Interface::class,
//            Class::class
//        );
    }

    /**
     * Registers the search routes
     */
    protected function registerSearchRoutes(): void
    {
        Route::prefix('search')
            ->middleware('web')
            ->namespace('App\\Search\\Presentation\\Http')
            ->group(__DIR__ . '/../../Presentation/Http/Routes/web.php');

        Route::prefix('api/search')
            ->middleware('api')
            ->namespace('App\\Search\\Presentation\\Http')
            ->group(__DIR__ . '/../../Presentation/Http/Routes/api.php');
    }

}
