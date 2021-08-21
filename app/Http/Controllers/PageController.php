<?php





namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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


    public function front_end()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.front_end", $data);
    }
    public function back_end()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.back_end", $data);
    }
    public function ui_ux_design()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.ui_ux_design", $data);
    }

    public function additional_module()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.additional_module", $data);
    }
    public function crm()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.crm", $data);
    }
    //   crm_frontend php_modules 1C_integration
    public function crm_frontend()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.crm_frontend", $data);
    }
    //   1C_integration
    public function php_modules()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.php_modules", $data);
    }

    public function web_1C_integration()
    {

        $data = [
            'body' => '',
        ];

        return view("pages.1C_integration", $data);
    }

    public function projects()
    {

        $data = [
            'body' => '',
        ];


        return view("pages.projects");
    }

    public function showOneProject($x) {
        $sites_list = DB::table('sites_lists')->where('alias', $x)->first();
        if($sites_list){
            $dannie = $sites_list;
        return view("pages.one_project",['data'=>$dannie,'title'=>$dannie->title_rus,'description'=>'']);
        }else{ return view("pages.projects");
        }
   }
    public function sendMail(Request $request){

        $details = [
            'title' => 'Mail from 1c-web.by',
            'body' => $request->get('message'),
            'from' => $request->get('email'),
            'person' => $request->get('name'),
            'file'=> $request->get('fileName')
        ];
        $file = $request->get('fileName');
        \Mail::to('info@1c-group.by')->send(new \App\Mail\SendMail($details));
        return 'success';

//           dd("Email is Sent.");

    }

    public function fileUpload(Request $request){

        if ($request->isMethod('post') && $request->file('file')) {

            $file = $request->file('file');
            $upload_folder = '/public/mail-attachments/';
            $filename = $file->getClientOriginalName(); // image.jpg

            Storage::putFileAs($upload_folder, $file, $filename);
            return $filename;
        }


    }




}
