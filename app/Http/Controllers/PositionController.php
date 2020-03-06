<?php

namespace App\Http\Controllers;

use App\Position;
use App\Memberuser;
use App\Positionsups;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //dd('sada');
      //return view('hr.positionup');
    }
 


    public function pos()
    {
      //dd('pos');
      $status = DB::table('users') ///เเสดงชื่อพนักงาน
      ->join('newcompanies', 'users.id', '=','newcompanies.idname')
      ->join('memberusers', 'newcompanies.newcode', '=','memberusers.code')
      ->where('idname', '=' ,Auth::user()->id)
      ->get();

      $posed = DB::table('users') ///เเสดงชื่อพนักงาน
      ->join('newcompanies', 'users.id', '=','newcompanies.idname')
      ->join('memberusers', 'newcompanies.newcode', '=','memberusers.code')
      ->join('positions', 'memberusers.iduser', '=','positions.idchief')
      ->where('idname', '=' ,Auth::user()->id)
      ->get();
      //dd($status);

        return view('hr.position',['status'=>$status ,'posed'=>$posed]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       dd('index2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*$Number  = $request->idchief;
      dd($Number);
  
       $reg = DB::table('positions')->orderBy('idchief')->where('idchief', '=' ,$Number)
  
        ->get();

        if (Count($reg) === 1) {
           return redirect('pos')->with('successt','พนักงานคนนี้มีตำเเหน่งเรียบร้อยเเล้ว');
        }else{*/
          $this->validate($request, [
            'position'=> ['required', 'string', 'max:255'],
    
         ]);
    
          $member = new Position;
              $member->codecom = $request->codecom;
              $member->idchief = $request->idchief;
              $member->fname = $request->fname;
              $member->lname = $request->lname;
              $member->niname = $request->niname;
              $member->position = $request->position;
    
    //dd($member);
             $member->save();
    
               return redirect('pos');
        //}
      //dd($request->all());
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position,$id)
    {
      $ticket = Memberuser::find($id);
       //dd($ticket);
         return view('hr.positionup', compact('ticket','id'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $position,$id)
    {
    
      //$ticket = Memberuser::find($id)
      //dd($id);
      $ticket = DB::table('memberusers')
      ->join('positions', 'memberusers.iduser', '=','positions.idchief')
      ->where('positions.id', '=' ,$id)
      //->where('memberusers.iduser', '=' , 'memberusers.iduser')
      ->get();

      $posed = DB::table('positions')
      ->get();
  
      //dd($posed);
      
           return view('hr.editpositionsup', compact('ticket','id') ,['posed' =>$posed]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Position $position,$id)
    {
      // dd($id);
      $this->validate($request, [
        'position'=> ['required', 'string', 'max:255'],

     ]);

     //dd($request->all());
      $member = Position::find($id);
          
          $member->position = $request->position;

//dd($member);
         $member->save();

           return redirect('pos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position, $id)
    {
        ///dd($id);
      $reg = Position::find($id);
      $reg->delete();
      //session::flash('massage','ลบข้อมูลเรียบร้อยเเล้ว');
      return redirect('pos');
    }
}

/*<form   method="POST" action="{{action('PositionController@update',$id)}}"  enctype="multipart/form-data">
@csrf
<div class="container">
    <div class="row">
        <div class="col-md-12 -pr-1">
        <table class="table table-hover table-striped">
            <thead>
                <th>ID</th>
                <th>idhr</th>
                <th>idchief</th>
                <th>ชื่อ นามสกุล</th>
            </thead>
        </table>
         <div class="row">
                <div class="col-md-2 -pr-1">
                    <input type="text" class="form-control" name="idhr" value="{{Auth::user()->id}}">
                </div>
                <div class="col-md-2 -pr-1">
                    <input type="text" class="form-control" name="idchief" value="{{$ticket->iduser}}">
                </div>
                <div class="col-md-3 -pr-1">
                    <input type="text" class="form-control" value="{{$ticket->firstname}} {{$ticket->lastname}} ({{$ticket->nickname}})">

                </div>
                <div class="col-md-3 -pr-1">
                <select class="form-control" name="position">
                @foreach($status as $ticket3)
                    <option>{{$ticket3->position}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-2 -pr-1">
                <button type="submit" class="btn btn-info btn-fill pull-left">Sign in</button>
                </div>
            </div>
        </div>
    </div>
</div>
  <input type="hidden" name="_method" value="PATCH" />
</form>*/