<?php

namespace App\Http\Controllers;

use App\Memberuser;
use App\Newcompanies;
use App\User;
use App\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
class MemberuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
         ///------------------chief-------------------------///
    public function index()
    {
      $user = request()->User();
      if ($user && $user->status == 'chief') {
        //dd('aaa');
            $users = Memberuser::orderBy('iduser')->where('iduser', '=' ,Auth::user()->id)->get();

            return view('chief',['users' => $users]);
      }else {
        //dd('royd');

          $userspe = Memberuser::orderBy('iduser')->where('iduser', '=' ,Auth::user()->id)->get();

        return view('personnel',['userspe' => $userspe]);
          }
    }

    public function table()
    {
      $user = request()->User();
      if ($user && $user->status == 'chief') {
        return view('chief.table');
      }else {
        
        return view('personnel.table2');
      }
    }


    public function tablepe()
    {
        
    
 
         return view('personnel.table2');
    }


    public function leave2()
    {
      //dd('asda');

      $boss = DB::table('users')  //หัวหน้า
      ->join('newcompanies', 'users.id', '=','newcompanies.idname')
      ->join('memberusers', 'newcompanies.newcode', '=','memberusers.code')
      ->join('positions', 'memberusers.code', '=','positions.codecom')
      ->where('iduser', '=' ,Auth::user()->id)
      ->get();

      $position = DB::table('users')  //ตำเเหน่ง
      ->join('newcompanies', 'users.id', '=','newcompanies.idname')
      ->join('memberusers', 'newcompanies.newcode', '=','memberusers.code')
      ->join('positions', 'memberusers.code', '=','positions.codecom')
      ->where('iduser', '=' ,Auth::user()->id)
      ->get();
  

      //dd($position);

        $status = DB::table('users')  ///ชื่อ นามสกุลผุ้ใช้
       ->join('memberusers', 'users.id', '=','memberusers.iduser')
       ->where('iduser', '=' ,Auth::user()->id)
        ->get();

        $leave = DB::table('leaves_tops')///ประเภทการลา
        ->get();


      //dd($boss);

        return view('personnel.leave2' , ['status'=> $status ,'boss'=> $boss , 'leave'=> $leave , 'position'=> $position]);
    }


    public function leave3()
    {
      $user = request()->User();
      if ($user && $user->status == 'chief') {
        
        $leave = DB::table('positions') //กำลังรออนุมัติ  ของหัวหน้า
        //->join('memberusers', 'positions.idchief', '=','memberusers.iduser')
        ->join('leaves', 'positions.idchief', '=','leaves.head')
        ->whereNull('status_chief')
        //->orderBy('idchief','DESC')
        ->where('head',Auth::user()->id)
        ->get();

        //dd($leave);

        return view('chief.leave' , ['leave'=> $leave]);
      }else {

        
        $leave = DB::table('users') //กำลังรออนุมัติ ส่วนของพนักงาน
        ->join('memberusers', 'users.id', '=','memberusers.iduser')
        ->join('positions', 'memberusers.code', '=','positions.codecom')
        ->join('leaves', 'positions.idchief', '=','leaves.head')
        ->whereNull('status_hr')
        //->orderBy('idmember','DESC')
        ->where('iduser',Auth::user()->id)
        ->get();


        $leave2 = DB::table('users') /// อนุมัติเเล้ว ส่วนของพนักงาน
        ->join('memberusers', 'users.id', '=','memberusers.iduser')
        ->join('positions', 'memberusers.code', '=','positions.codecom')
        ->join('leaves', 'positions.idchief', '=','leaves.head')
        //->orderBy('idmember','DESC')
        ->where('status_hr','=' ,'1')
        ->where('idmember',Auth::user()->id)
        
        ->Paginate(25);


         $leave3 = DB::table('users') // ไม่อนุมัติ ส่วนของพนักงาน
         ->join('memberusers', 'users.id', '=','memberusers.iduser')
         ->join('positions', 'memberusers.code', '=','positions.codecom')
         ->join('leaves', 'positions.idchief', '=','leaves.head')
         ->orderBy('idmember','DESC')
         ->where('status_chief','=' ,'2')
         ->where('idmember',Auth::user()->id)
        
         ->Paginate(25);
         
        //dd($leave);
         
 
         return view('personnel.leave3',   ['leave'=> $leave , 'leave2'=> $leave2, 'leave3'=> $leave3]);
        
      }
         
    }


    public function record()
    {
   
        return view('chief.leaverecord');
  
    }




    public function usersprofile()
    {
          return view('.chief.usersprofile');
    }
    ///------------------personnel-------------------------///


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
///
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
                'code'=> ['required', 'string', 'max:255'],
                'firstnamebem'=> ['required', 'string', 'max:255'],
                'lastnamebem' => ['required', 'string', 'max:255'],
                'tel' => ['required', 'numeric'],
                'tel2' => ['required', 'numeric'],
                'telname2' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'image'=>'image|mimes:jpeg,png,jpg|max:2048'
             ]);



             $Number  = $request->code;
             $reg = DB::table('Newcompanies')->orderBy('newcode')->where('newcode', '=' ,$Number) ///เช้คว่ามี code ใน Newcompanies

              ->get();
          //dd($reg);
          if (Count($reg) == '1') {
            $member = new Memberuser;
                $member->iduser = Auth::user()->id;
                $member->code = $request->code;
                $member->firstnamebem = $request->firstnamebem;
                $member->lastnamebem = $request->lastnamebem;
                $member->nickname = $request->nickname;
                $member->age = $request->age;
                $member->date = $request->date;
                $member->tel = $request->tel;
                $member->tel2 = $request->tel2;
                $member->telname2 = $request->telname2;
                $member->tel3 = $request->tel3;
                $member->telname3 = $request->telname3;
                $member->address = $request->address;
                $member->city = $request->city;
                $member->status2 = $request->status2;
                $member->postalcode = $request->postalcode;

             if($request->hasFile('image')){
                $image = $request->file('image');
                $image->move(public_path().'/img/profile/',$image->getClientOriginalName());
                $member->image=$image->getClientOriginalName();
              //  $member = $img->getClientOriginalExtension();
              //	$img->save();
            }
      //
      //dd($member);
               $member->save();

             $user = $request->user();
               if (Auth::check() && $user && $user->status === 'chief') {

                  return redirect('chief');
               } else {

                  return redirect('personnel');
               }

                 //return redirect('chief');
                // dd('sdasd');
          } else {
              return redirect('chief')->with('successv','กรุณา ตรวจสอบ Code ใหม่ หรือ ติดต่อ HR');
          //  dd('ตรวจสอบcode ใหม่');
        }



      }



    /**
     * Display the specified resource.
     *
     * @param  \App\Memberuser  $memberuser
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
      $reg = Leave::find($id);

  
      //dd($reg);
            return view('personnel.leave4', compact('reg','id'));
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Memberuser  $memberuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Memberuser $memberuser,$id)
    {

      $chief = Memberuser::find($id);
     //dd($chief);
           return view('chief.editchieffrom', compact('chief','id'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Memberuser  $memberuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Memberuser $memberuser)
    {
     $this->validate($request, [
        //'code'=> ['required', 'string', 'max:255'],
        'firstnamebem'=> ['required', 'string', 'max:255'],
        'lastnamebem' => ['required', 'string', 'max:255'],
        'tel' => ['required', 'numeric'],
        'tel2' => ['required', 'numeric'],
        'telname2' => ['required', 'string', 'max:255'],
        'address' => ['required', 'string', 'max:255'],
        'image'=>'image|mimes:jpeg,png,jpg|max:2048'
     ]);

       $member =  Memberuser::find($id);
       //dd($member);
          //$member->iduser = Auth::user()->id;
          $member->firstnamebem = $request->firstnamebem;
          $member->lastnamebem = $request->lastnamebem;
          $member->nickname = $request->nickname;
          $member->age = $request->age;
          $member->date = $request->date;
          $member->tel = $request->tel;
          $member->tel2 = $request->tel2;
          $member->telname2 = $request->telname2;
          $member->tel3 = $request->tel3;
          $member->telname3 = $request->telname3;
          $member->address = $request->address;
          $member->city = $request->city;
          $member->status2 = $request->status2;
          $member->postalcode = $request->postalcode;

       if($request->hasFile('image')){
          $image = $request->file('image');
          $image->move(public_path().'/img/profile/',$image->getClientOriginalName());
          $member->image=$image->getClientOriginalName();
        //  $member = $img->getClientOriginalExtension();
        //	$img->save();
      }

//dd($member);
          $member->save();

          $user = $request->user();
            if (Auth::check() && $user && $user->status == 'chief') {

               return redirect('chief');
            } else {

               return redirect('personnel');
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Memberuser  $memberuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memberuser $memberuser)
    {
        //
    }
}
