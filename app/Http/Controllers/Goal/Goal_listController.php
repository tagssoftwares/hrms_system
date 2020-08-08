<?php

namespace App\Http\Controllers\Goal;
use App\Models\Goaltype;
use App\Models\Goallist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Goal_listController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $goal_type = Goaltype::get();
        $goallist = DB::table('goallist')
             ->join('goals_type','goallist.goals_type_id','=','goals_type.id')
             ->select('goals_type.goal_type','goallist.subject','goallist.target_acheivement','goallist.start_date','goallist.end_date','goallist.discription')
             ->get();
      
        return view('Goals.goal_list.goal_list',['goal_type'=>$goal_type,'goallist'=>$goallist]);
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
            'goals_type_id' => $request['goals_type'],
            'subject' => $request['subject'],
            'target_acheivement' => $request['target_acheivement'],
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
}
