<?php

namespace App\Http\Controllers\Goal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gollist;
use DB;

class Goal_listController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        
    {     $goal_type = Goaltype::get();
         $goallist = Goallist::paginate(5);
        
       return view('Goals.goal_list.goal_list',['goallist'=>$goallist,'goal_type'=>$goal_type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
       $goallist= Goallist::create([
            'goals_type_id' => $request['goals_type_id'],
            'subject' => $request['subject'],
            'target_achievement' => $request['subject'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'discription' => $request['discription'],
            
        ]);

        return redirect()->intended('goal-tracking');

       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
}
