<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Memberuser;
use App\Newcompanies;
use App\User;
use App\Http\Requests;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){


///----เช็คว่า กรองข้อมูบบริษัทยัง----//
//  $hrbumble = Newcompanies::find(Auth::user()->id);
//  $date = array('hrbumble' => $hrbumble);
   //$users = DB::table('Newcompanies')->find(Auth::user()->id); //ใช้ได้
    $hrbumble = Newcompanies::orderBy('idname')->where('idname', '=' ,Auth::user()->id)->get();

    //dd($users);
       if(Count($hrbumble) == 0) {
        return view('.hr.hrfrom');
          //dd('ยังไม่ข้อมูล');
    //  return view('./hr',$date);
        // dd($users);
      }elseif(Count($hrbumble) == 1){

         //dd($hrbumble);
        return view('hr', ['hrbumble' => $hrbumble]);
      }else {
        return view('/');
      }

        //db("HR");
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chief()
    {
        $user = request()->User();
        if ($user && $user->status === 'chief') {

          $users = Memberuser::orderBy('iduser')->where('iduser', '=' ,Auth::user()->id)->get();

         //dd($users);
             if(Count($users) === 0) {

               return view('.chief.chieffrom');

             }else{
            //
            // dd($users);
              return view('chief',['users' => $users]);
             }
          //dd($user);
        }else {
          return redirect('/');
        }

        //dd($user);
        //return view('chief');




    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function personnel()
    {
      $user = request()->User();
      if ($user && $user->status == 'personnel') {

            $userspe = Memberuser::orderBy('iduser')->where('iduser', '=' ,Auth::user()->id)->get();

            if(Count($userspe) === 0) {

              return view('.chief.chieffrom');

            }else{
           //
           // dd($users);
             return view('personnel',['userspe' => $userspe]);
            }
      //  return view('personnel');

      }else {
        return redirect('/');
      }

    }
}
