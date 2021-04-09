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
        //try and catch use for working migration with command

        try {
            // Your super fun database stuff
            $categories = Category::select(['id', 'category_name', 'category_slug'])->where('parent_cat_id', null)->get();
            View::share('categories', $categories);

       }  catch (\Exception $e) {
    // do nothing
      }
        
    }
}
