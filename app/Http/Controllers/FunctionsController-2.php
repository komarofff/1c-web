<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FunctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//SELECT pagetitle,longtitle,alias,content,introtext, modx_site_tmplvar_contentvalues.* from modx_site_content left join modx_site_tmplvar_contentvalues on modx_site_content.id=modx_site_tmplvar_contentvalues.contentid where alias='internet-magazin.sajt-po-prodazhe-elektrotehnicheskih-tovarov1' and published=1 and deleted=0
    public static function getFooterData()
    {
        $results = DB::select('SELECT modx_site_content.id ,pagetitle, longtitle, alias, content, modx_site_tmplvar_contentvalues.*  from modx_site_content left join modx_site_tmplvar_contentvalues on modx_site_content.id=modx_site_tmplvar_contentvalues.contentid where parent=18347 and published=1 and deleted=0 ');
        $s = 0;
        $last = null;
        $title_eng = '';
        $title_rus = '';
        $image_big = '';
        $image_mobile = '';
        $description_rus = '';
        $description_engl = '';
        $alias = '';
        $type = '';
        foreach ($results as $dat) {

            $id = $dat->id;
            if ($dat->tmplvarid == 81) {
                $title_eng = $dat->value;
            }//81
            $title_rus = $dat->pagetitle;
            if ($dat->tmplvarid == 22) {
                $image_big = $dat->value;
            }//22
            if ($dat->tmplvarid == 80) {
                $image_mobile = $dat->value;
            }//80
            $description_rus = $dat->content;
            if ($dat->tmplvarid == 82) {
                $description_engl = $dat->value;
            }//82
            $alias = $dat->alias;
            $type = $dat->longtitle;
            if($dat->id === $last){
                $all_projects [] = [
                    'image' => $image_big,
                    //'image_mobile' => $image_mobile,
                    'name' => $title_rus,
                    'name_engl' => $title_eng,
                    'description_rus' => $description_rus,
                    'description_engl' => $description_engl,
                    'alias' => $alias,
                    'type' => $type

                ];
            }
            $last = $dat->id;

        }


//       $title_eng = '';
//        $title_rus = '';
//        $image_big = '';
//        $image_mobile = '';
//        $description_rus = '';
//        $description_engl = '';
//        $alias = '';
//        $type = '';
//        foreach($results as $dat){
//            if($dat->tmplvarid == 81){$title_eng = $dat->value;}//81
//            $title_rus = $dat->pagetitle;
//            if($dat->tmplvarid == 22){$image_big = $dat->value;}//22
//            if($dat->tmplvarid == 80){$image_mobile = $dat->value;}//80
//            $description_rus = $dat->content;
//            if($dat->tmplvarid == 82){$description_engl = $dat->value;}//82
//            $alias = $dat->alias;
//            $type = $dat->longtitle;
//            $all_projects []= [
//                'image' =>$image_big,
//                'name' => $dat->pagetitle,
//                'alias' => $dat->alias,
//                'type' => $dat->longtitle
//
//            ]; }

        return $all_projects;
    }
}
