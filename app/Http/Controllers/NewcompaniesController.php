<?php

namespace App\Http\Controllers;

use App\Newcompanies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class NewcompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    /*  $hrbumble = Newcompanies::find(Auth::user()->id);
      $date = array('hrbumble' => $hrbumble);
     //dd("aaaaaa");*/
      return view('hr/hrfrom');
    }

    public function table()
    {

      $user_aaa = DB::table('users')
            ->join('newcompanies', 'users.id', '=','newcompanies.idname')
            ->join('memberusers', 'newcompanies.newcode', '=','memberusers.code')
            ->join('times', 'memberusers.iduser', '=','times.user_id')
             ->where('idname',Auth::user()->id)
            
             ->get();


             //-----------คำนวลความต่างกันข้องเวลา---------------//

            /* function diff2time($created_at,$updated_at){
                $now_time1=strtotime(date("Y-m-d ".$created_at));
                $now_time2=strtotime(date("Y-m-d ".$updated_at));
                dd($created_at);
                $time_diff=abs($now_time2-$now_time1);
                $time_diff_h=floor($time_diff/3600); // จำนวนชั่วโมงที่ต่างกัน
                $time_diff_m=floor(($time_diff%3600)/60); // จำวนวนนาทีที่ต่างกัน
                $time_diff_s=($time_diff%3600)%60; // จำนวนวินาทีที่ต่างกัน
                return $time_diff_h." ชั่วโมง ".$time_diff_m." นาที ".$time_diff_s." วินาที";

                dd($time_diff_s);

              }*/


      return view('hr.table' ,['user_aaa' => $user_aaa ]);
    }

    public function status()
    {
      $status = DB::table('users')
      ->join('newcompanies', 'users.id', '=','newcompanies.idname')
      //->join('memberusers', 'newcompanies.newcode', '=','memberusers.code')
      //->where('idname', '=' ,Auth::user()->id)
      ->get();
      dd($status);
        return view('hr.status', ['status' => $status]);
    }

    public function leave()
    {
    /*  $hrbumble = Newcompanies::find(Auth::user()->id);
      $date = array('hrbumble' => $hrbumble);
     //dd("aaaaaa");*/
      return view('hr.leave');
    }

    public function record()
    {
    /*  $hrbumble = Newcompanies::find(Auth::user()->id);
      $date = array('hrbumble' => $hrbumble);
     //dd("aaaaaa");*/
      return view('hr.leaverecord');
    }

    public function usersprofile()
    {
    /*  $hrbumble = Newcompanies::find(Auth::user()->id);
      $date = array('hrbumble' => $hrbumble);
     //dd("aaaaaa");*/
      return view('hr.usersprofile');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('hr.edithrfrom');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'companyname'=> ['required', 'string', 'max:255'],
        'firstname'=> ['required', 'string', 'max:255'],
        'lastname'=> ['required', 'string', 'max:255'],
        'tel'=> ['required', 'numeric'],
        'address'=> ['required', 'string', 'max:255'],
        'city'=> ['required', 'string', 'max:255'],
        'postalcode'=> ['required', 'numeric'],
        //'image'=> 'image|mimes:jpeg,png,jpg|max:2048'
     ]);


//'idname', 'companyname','firstname','lastname','tle','tle2','address','city','postalcode','image','hashedRandomPassword'
       $member = new Newcompanies;
       //dd($request->all());
          $member->idname = Auth::user()->id;
          $member->companyname = $request->companyname;
          $member->firstname = $request->firstname;
          $member->lastname = $request->lastname;
          $member->tel = $request->tel;
          $member->tel2 = $request->tel2;
          $member->address = $request->address;
          $member->city = $request->city;
          $member->postalcode = $request->postalcode;
          $member->newcode   = Str::random(10);

       if($request->hasFile('image')){
          $image = $request->file('image');
          $image->move(public_path().'/img/profile/',$image->getClientOriginalName());
          $member->image=$image->getClientOriginalName();
        //  $member = $img->getClientOriginalExtension();
        //	$img->save();
      }

//dd($member);
          $member->save();



              return redirect('hr');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newcompanies  $newcompanies
     * @return \Illuminate\Http\Response
     */
    public function show(Newcompanies $newcompanies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newcompanies  $newcompanies
     * @return \Illuminate\Http\Response
     */
    public function edit(Newcompanies $newcompanies,$id)
    {
///dd('asdasd');
      $ticket = Newcompanies::find($id);
    //  dd($ticket);
           return view('hr.edithrfrom', compact('ticket','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newcompanies  $newcompanies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id , Newcompanies $newcompanies)
    {
    // dd($request->all());
      $this->validate($request, [
        'companyname'=> ['required', 'string', 'max:255'],
        'firstname'=> ['required', 'string', 'max:255'],
        'lastname'=> ['required', 'string', 'max:255'],
        'tel'=> ['required', 'numeric'],
        'address'=> ['required', 'string', 'max:255'],
        'city'=> ['required', 'string', 'max:255'],
        'postalcode'=> ['required', 'numeric'],
        'image'=> 'image|mimes:jpeg,png,jpg|max:2048'
     ]);

//'idname', 'companyname','firstname','lastname','tle','tle2','address','city','postalcode','image','hashedRandomPassword'
       //$member = new Newcompanies::orderBy('idname')->where('idname', '=' ,Auth::user()->id)->get();
//dd($id);
    $member =  Newcompanies::find($id);
    //   dd($member);
          //$member->idname = Auth::user()->id;
          $member->companyname = $request->companyname;
          $member->firstname = $request->firstname;
          $member->lastname = $request->lastname;
          $member->tel = $request->tel;
          $member->tel2 = $request->tel2;
          $member->address = $request->address;
          $member->city = $request->city;
          $member->postalcode = $request->postalcode;
          //$member->newcode   = Str::random(10);

       if($request->hasFile('image')){
          $image = $request->file('image');
          $image->move(public_path().'/img/profile/',$image->getClientOriginalName());
          $member->image=$image->getClientOriginalName();
        //  $member = $img->getClientOriginalExtension();
        //	$img->save();
      }

//dd($member);
          $member->save();


              return redirect('hr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newcompanies  $newcompanies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newcompanies $newcompanies)
    {
        //
    }
}
