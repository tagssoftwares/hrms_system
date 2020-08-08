<?php

namespace App\Http\Controllers\Policies;
use App\Models\Department;
use App\Models\Policies;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use DB;

class PoliciesController extends Controller
{
    public function index()
    {   
        $departments = Department::get();
       $policy = DB::table('policies')
             ->join('department','policies.department_id','=','department.id')
             ->select('department.name','policies.policy_name','policies.description','policies.upload_policy')
             ->get();
       return view('policies.policies', ['departments' => $departments,'policy' =>$policy]);
        
    }

    
    public function store(Request $request)
    {
        if($request->hasFile('upload_policy'))
        {
            $filenameWithExt = $request->file('upload_policy')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //$destinationPath = public_path().'/storage/';
           
            $extension = $request->file('upload_policy')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //store the file in the $destinationPath
            $path = $request->file('upload_policy')->storeAs('public/policy_document',$fileNameToStore);

            //save a corresponding record in the database
            //return success message
        } 
        else{
            $fileNameToStore = "g.jpg";
        }
        $policy = Policies:: create([
            'department_id' => $request['department'],
            'policy_name' =>$request['policy_name'],
            'description' =>$request['description'],
            'upload_policy' => $fileNameToStore
         ]);
        //$path= $req->file('upload_policy')->store('public/policy_documents');
        
        //print_r($policy);die();
        return redirect()->intended('policies');
    }

    // public function blog_submit(Request $req)
    // {
    //     $path= $req->file('upload_policy')->store('public/policy_documents');
    // }
}
