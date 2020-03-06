<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
use Response;
class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        dd('soo');
        //return redirect('leave2');
    }

    public function leave()
    {
     
    }


    public function canvassch()
    {
            //dd('ddd');
        return view('chief.canvass');
    }
    /*public function canvass()
    {
          return view('.chief.canvass');
 */

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
            //dd($request->all());
        $this->validate($request, [
            'affair'=> ['required', 'string', 'max:255'],
            'affair'=> ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'leave' => ['required', 'string', 'max:255'],
            'since' => ['required', 'string', 'max:255'],
            'date1' => ['required', 'string', 'max:255'],
            'date2' => ['required', 'string', 'max:255'],
            'da' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'numeric']
            
         ]);

         $member = new Leave;       
             $member->idmember = Auth::user()->id;
             $member->affair = $request->affair;
             $member->head = $request->head;
             $member->lea_fname = $request->lea_fname;
             $member->lea_lname = $request->lea_lname;
             $member->lea_niname = $request->lea_niname;
             $member->position = $request->position;
             $member->leave = $request->leave;
             $member->since = $request->since;
             $member->date1 = $request->date1;
             $member->date2 = $request->date2;
             $member->da = $request->da;
             $member->address = $request->address;
             $member->tel = $request->tel;
             $member->status_chief = $request->status_chief;
             $member->status_text1 = $request->status_text1;
             $member->status_hr = $request->status_hr;
             $member->status_text2 = $request->status_text2;
            
             if($request->hasFile('image')){
                $image = $request->file('image');
                $image->move(public_path().'/img/file/',$image->getClientOriginalName());
                $member->image=$image->getClientOriginalName();
              //  $member = $img->getClientOriginalExtension();
              //	$img->save();
            }
            
             //dd($member);
             $member->save();
         
         //dd($data);
         
         return redirect('leave2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave ,$id)
    { 
       // dd('show');
        $reg = Leave::find($id);

        
     //dd($ticket1);
           return view('personnel.leave4', compact('reg','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit(Leave $leave ,$id)
    {
        //dd('edit');
        $position = DB::table('users')
        ->join('newcompanies', 'users.id', '=','newcompanies.idname')
        ->join('memberusers', 'newcompanies.newcode', '=','memberusers.code')
        ->join('positions', 'memberusers.iduser', '=','positions.idchief')
         //->where('idname',Auth::user()->id)
        
         ->get();
  

  
          $leave = DB::table('leaves_tops')
          ->get();
       // dd('editl');
        $chief = Leave::find($id);
    //dd($chief);
           return view('personnel.editleave2', compact('chief','id'),['position'=> $position , 'leave'=> $leave]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leave $leave, $id)
    {
    
     dd('sdsa');
        $this->validate($request, [
            'affair'=> ['required', 'string', 'max:255'],
            'affair'=> ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'leave' => ['required', 'string', 'max:255'],
            'since' => ['required', 'string', 'max:255'],
            'date1' => ['required', 'string', 'max:255'],
            'date2' => ['required', 'string', 'max:255'],
            'da' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'numeric']
            
         ]);

         $member = Leave::find($id);     
             $member->idmember = Auth::user()->id;
             $member->affair = $request->affair;
             $member->head = $request->head;
             $member->position = $request->position;
             $member->leave = $request->leave;
             $member->since = $request->since;
             $member->date1 = $request->date1;
             $member->date2 = $request->date2;
             $member->da = $request->da;
             $member->address = $request->address;
             $member->tel = $request->tel;
             $member->status_chief = $request->status_chief;
             $member->status_text1 = $request->status_text1;
             $member->status_hr = $request->status_hr;
             $member->status_text2 = $request->status_text2;
            
             if($request->hasFile('image')){
                $image = $request->file('image');
                $image->move(public_path().'/img/file/',$image->getClientOriginalName());
                $member->image=$image->getClientOriginalName();
              //  $member = $img->getClientOriginalExtension();
              //	$img->save();
            }
            
             //dd($member);
             $member->save();
         
         //dd($data);
         
         return redirect('leave3');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave $leave)
    {
        //
    }
}
