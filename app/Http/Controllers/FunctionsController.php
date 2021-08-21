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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
//SELECT query1.pagetitle,query1.alias,query1.longtitle,query1.content,query2.value as imageBig,query3.value as imageSmall,query4.value as titleLat,query5.value as contentLat
//from modx_site_content  as query1
//inner join modx_site_tmplvar_contentvalues as query2  on (query2.contentid=query1.id  and query2.tmplvarid=22)
//inner join modx_site_tmplvar_contentvalues as query3  on (query3.contentid=query1.id  and query3.tmplvarid=80)
//inner join modx_site_tmplvar_contentvalues as query4  on (query4.contentid=query1.id  and query4.tmplvarid=81)
//inner join modx_site_tmplvar_contentvalues as query5  on (query5.contentid=query1.id  and query5.tmplvarid=82)
//where query1.parent=18347 and query1.published=1 and query1.deleted=0

    public static function getFooterData(){
        $sites_list = DB::table('sites_lists')->get();
//        $results = DB::select('SELECT pagetitle,longtitle,alias,value from modx_site_content left join modx_site_tmplvar_contentvalues on modx_site_content.id=modx_site_tmplvar_contentvalues.contentid where parent=18347 and published=1 and deleted=0 ');
//        foreach($results as $dat){
//            $all_projects []= [
//                'image' => $dat->value,
//                'name' => $dat->pagetitle,
//                'alias' => $dat->alias,
//                'type' => $dat->longtitle
//
//            ]; }
        $all_projects = $sites_list;
            return $all_projects;
        }
}
