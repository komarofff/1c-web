<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    
    
  
    public function sertificate()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.sertificate", $data);
    }
    public function about()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.about_us", $data);
    }
    public function contacts()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.contacts", $data);
    }
    
    public function projects()
    {

        $data = [
            'body' => '',
        ];
       

        return view("pages.projects");
    }
    
    public function showOneProject($x) {
        $results = DB::select("SELECT pagetitle,longtitle,alias,content,introtext,value from modx_site_content left join modx_site_tmplvar_contentvalues on modx_site_content.id=modx_site_tmplvar_contentvalues.contentid where alias='$x' and published=1 and deleted=0 ");
         if($results){
         foreach($results as $dat){
         $dannie []= [   
            'image' => $dat->value,      
            'name' => $dat->pagetitle,
            'alias' => $dat->alias,
            'type' => $dat->longtitle,
            'content' => $dat->content ,
			'siteUrl' => $dat->introtext	
        ];
        }
        return view("pages.one_project",['data'=>$dannie,'title'=>$dannie [0]['name'],'description'=>'']);
        }else{ return view("pages.projects");
        }
   }
   
//    public static function getFooterData(){
//     $results = DB::select('SELECT pagetitle,longtitle,alias,value from modx_site_content left join modx_site_tmplvar_contentvalues on modx_site_content.id=modx_site_tmplvar_contentvalues.contentid where parent=18347 and published=1 and deleted=0 ');
//     foreach($results as $dat){
//         $all_projects []= [
//             'image' => $dat->value,
//             'name' => $dat->pagetitle,
//             'alias' => $dat->alias,
//             'type' => $dat->longtitle

//         ]; }

//         return $all_projects;
//     }  

    
    
   

}