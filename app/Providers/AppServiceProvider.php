<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use View;


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
        //try and catch use for working migration

        try {
            // Your super fun database stuff
            $categories = Category::select(['id', 'name', 'slug'])->where('parent_cat_id', null)->get();
            View::share('categories', $categories);

       }  catch (\Exception $e) {
    // do nothing
      }
        
    }
}
