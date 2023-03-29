<?php

namespace App\Providers;

use App\Models\Category;
use Nette\Schema\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        Paginator::useBootstrapFour();

        // Schema::defaultStringLength(191);
        View::share('global_categories', Category::with('children')->whereNull('parent_id')->get());
        View::share('name','name_'.app()->currentLocale());
        View::share('content','content_'.app()->currentLocale());
    }
}
