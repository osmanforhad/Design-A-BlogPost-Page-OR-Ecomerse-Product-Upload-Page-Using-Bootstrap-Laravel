<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class ManufactureController extends Controller {

    public function index() {
        return view('admin.add_manufacture');
    }

    public function save_manufacture(Request $request) {
        $data = array();
        $data['manufacture_id'] = $request->manufacture_id;
        $data['manufacture_name'] = $request->manufacture_name;
        $data['manufacture_description'] = $request->manufacture_description;
        $data['publication_status'] = $request->publication_status;
        DB::table('tbl_manufacture')->insert($data);
        Session::put('message', 'Manufacture Added Successfully !!');
        return Redirect::to('/add-manufacture');
    }
    public function all_manufacture() {
        $all_manufacture_info = DB::table('tbl_manufacture')->get();
        $manage_manufacture = view('admin.all_manufacture')
                ->with('all_manufacture_info', $all_manufacture_info);
        return view('admin_layout')
                        ->with('admin.all_manufacture', $manage_manufacture);

        //return view('admin.all_manufacture');
    }
      public function delete_manufacture($manufacture_id) {
     DB::table('tbl_manufacture')
             ->where('manufacture_id',$manufacture_id)
             ->delete();
     Session::put('message','Manufacture Deleted Successfully!');
     return Redirect::to('/all-manufacture');
    }
 public function unactive_manufacture($manufacture_id) {
        DB::table('tbl_manufacture')
                ->where('manufacture_id',$manufacture_id)
                ->update(['publication_status'=>0]);
        Session::put('message', 'Manufacture Unactive Successfully !!');
                return Redirect::to('/all-manufacture');
    }
    public function active_manufacture($manufacture_id) {
        DB::table('tbl_manufacture')
                ->where('manufacture_id',$manufacture_id)
                ->update(['publication_status'=>1]);
        Session::put('message', 'Manufacture Activated Successfully !!');
                return Redirect::to('/all-manufacture');
    }
    public function edit_manufacture($manufacture_id) {
       $manufacture_info = DB::table('tbl_manufacture')
               ->where('manufacture_id',$manufacture_id)
               ->first();
       
       $manufacture_info = view('admin.edit_manufacture')
                ->with('manufacture_info', $manufacture_info);
        return view('admin_layout')
                        ->with('admin.edit_manufacture', $manufacture_info);
        //return view('admin.edit_category');
    }
     public function update_manufacture(Request $request,$manufacture_id) {
        $data = array();
                $data['manufacture_name']=$request->manufacture_name;
                $data['manufacture_description']=$request->manufacture_description;
                DB::table('tbl_manufacture')
                        ->where('manufacture_id',$manufacture_id)
                        ->update($data);
                Session::put('message','Manufacture update successfully !');
                return Redirect::to('/all-manufacture');
    }
}
