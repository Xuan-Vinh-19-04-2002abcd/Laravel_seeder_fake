<?php

namespace App\Providers;
use App\Models\crudDatabase;
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
        view()->composer('partical.Header',function(){
            $type_product = new crudDatabase();
            $listType = $type_product->typeProduct();
            // dd($listType);
            // return view('partical.Header',compact('listType'));
        });

    }
}
