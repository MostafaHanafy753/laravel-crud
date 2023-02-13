<?php

namespace App\Http\Controllers;
use App\Http\Requests\createAdminRequest;
use App\Models\admin;
use Illuminate\Http\Request;

class adminscontroller extends Controller
{
   public function index(){
        $data = admin::select("*")->orderby("id", "ASC")->Paginate(10);
        return View('admin',['data'=>$data]);
   }
    public function create()
    {
        return view('create');
    }
    public function store(createAdminRequest $request)
    {
        $dataToInsert['name'] = $request->name_admin;
        $dataToInsert['salary'] = $request->salary_admin;
        $dataToInsert['active'] = $request->active_admin;
       // var_dump($data);
        admin::create($dataToInsert);
        return redirect()->route('admin')->with(['sucess' => 'add sucessfully']);

    }  
 
}
