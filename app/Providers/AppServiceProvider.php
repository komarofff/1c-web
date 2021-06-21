<?php

namespace App\Providers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
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
		URL::forceScheme('https');
        //
    //     $results = DB::select('SELECT pagetitle,longtitle,alias,value from modx_site_content left join modx_site_tmplvar_contentvalues on modx_site_content.id=modx_site_tmplvar_contentvalues.contentid where parent=18347 and published=1 and deleted=0 ');
    //     foreach($results as $dat){
    //     $all_projects []= [   
    //         'image' => $dat->value,      
    //        'name' => $dat->pagetitle,
    //        'alias' => $dat->alias,
    //        'type' => $dat->longtitle
           
    //    ]; }
    //    view()->share('all_projects',$all_projects);
       
    //    View::composer('footer', function ($view) use ($all_projects) {
    //         $view->with('all_projects',$all_projects);
    //    });
           
    

    
    }
}
