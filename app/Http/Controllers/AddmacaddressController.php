<?php

namespace App\Http\Controllers;

use App\Addmacaddress;
use Illuminate\Http\Request;
use Auth;
class AddmacaddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          return view('hr.newmacaddress');
    }

    public function mac()
    {
       $addmac = Addmacaddress::orderBy('idname')->where('idname', '=' ,Auth::user()->id)->get();
     //dd($user);
      return view('hr.macaddress',['addmac' => $addmac]);
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
        'addmac'=> ['required', 'string', 'max:255'],
          'name'=> ['required', 'string', 'max:255'],
     ]);

//'idname', 'companyname','firstname','lastname','tle','tle2','address','city','postalcode','image','hashedRandomPassword'
       $member = new Addmacaddress;
       //dd($request->all());
          $member->idname = Auth::user()->id;
          $member->addmac = $request->addmac;
          $member->name = $request->name;
//dd($member);
          $member->save();

              return redirect('mac');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Addmacaddress  $addmacaddress
     * @return \Illuminate\Http\Response
     */
    public function show(Addmacaddress $addmacaddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Addmacaddress  $addmacaddress
     * @return \Illuminate\Http\Response
     */
    public function edit(Addmacaddress $addmacaddress,$id)
    {
      $ticket = Addmacaddress::find($id);
    //  dd($ticket);
           return view('hr.editmacaddress', compact('ticket','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Addmacaddress  $addmacaddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, Addmacaddress $addmacaddress)
    {
      $this->validate($request, [
        'addmac'=> ['required', 'string', 'max:255'],
        //'image'=> 'image|mimes:jpeg,png,jpg|max:2048'
     ]);

//'idname', 'companyname','firstname','lastname','tle','tle2','address','city','postalcode','image','hashedRandomPassword'
       $member = Addmacaddress::find($id);;
       //dd($request->all());
        ///  $member->idname = Auth::user()->id;
          $member->addmac = $request->addmac;
          $member->name = $request->name;
//dd($member);
          $member->save();

              return redirect('mac');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Addmacaddress  $addmacaddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addmacaddress $addmacaddress,$id)
    {
      $reg = Addmacaddress::find($id);
      $reg->delete();
      //session::flash('massage','ลบข้อมูลเรียบร้อยเเล้ว');
      return redirect('mac');
    }
}
