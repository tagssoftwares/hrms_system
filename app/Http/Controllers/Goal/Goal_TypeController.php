<?php

namespace App\Http\Controllers\Goal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Goaltype;
use DB;
class Goal_TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $goals = Goaltype::paginate(5);
       return view('Goals.goal_type.goal_type',['goals'=>$goals]);
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
        $goals= Goaltype::create([
            'goal_type' => $request['goal_type'],
            'goal_discription' => $request['goal_discription']
            
        ]);

        return redirect()->intended('goal-type');
    }
    


    public function changeStatus(Request $request)
    {
        $goals = Goaltype::find($request->id);
        DB::table('goals_type')->where('status',1)->update(['status' => 0]);
        $goals->status = $request->status;
        $goals->save();
  
        return response()->json(['success'=>'Status change successfully.']);
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
