<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use APP\User;
App\category;

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
       // View:share('key','value');
      //  View::share('name','Zulkar Nine');
      //  View::share('name',Auth::user()->name);
        View::composer('*',function($view) {
            $view ->with('name','Zulkar Nine');
        });

       // View::composer('front-end.include.header',function($view) {
        //    $view ->with('category',category::where('publication-status',1)->get());
       // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
