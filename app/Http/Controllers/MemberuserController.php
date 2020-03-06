<?php

namespace App\Http\Controllers;

use App\Memberuser;
use App\Newcompanies;
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
    public function index()
    {
  //  dd('ตรวจสอบ');
      //return view('chief.chieffrom');

    }

    public function test()
    {
        return view('test');
    }


    public function leave()
    {
        return view('.chief.leave');
    }


    public function record()
    {
        return view('.chief.leaverecord');
    }


    public function table()
    {
          return view('.chief.table');
    }


    public function usersprofile()
    {
          return view('.chief.usersprofile');
    }

    public function canvass()
    {
          return view('.chief.canvass');
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
              $this->validate($request, [
                'code'=> ['required', 'string', 'max:255'],
                'firstname'=> ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
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
                $member->firstname = $request->firstname;
                $member->lastname = $request->lastname;
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
                 return redirect('chief');
                 dd('sdasd');
          } else {
              return redirect('chief')->with('successv','กรุณา ตรวจสอบ Code ใหม่ หรือ ติดต่อ HR');;
          //  dd('ตรวจสอบcode ใหม่');
        }



      }



    /**
     * Display the specified resource.
     *
     * @param  \App\Memberuser  $memberuser
     * @return \Illuminate\Http\Response
     */
    public function show(Memberuser $memberuser)
    {
        //
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
        'firstname'=> ['required', 'string', 'max:255'],
        'lastname' => ['required', 'string', 'max:255'],
        'tel' => ['required', 'numeric'],
        'tel2' => ['required', 'numeric'],
        'telname2' => ['required', 'string', 'max:255'],
        'address' => ['required', 'string', 'max:255'],
        'image'=>'image|mimes:jpeg,png,jpg|max:2048'
     ]);

       $member =  Memberuser::find($id);
       //dd($member);
          //$member->iduser = Auth::user()->id;
          $member->firstname = $request->firstname;
          $member->lastname = $request->lastname;
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

                return redirect('chief');
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
