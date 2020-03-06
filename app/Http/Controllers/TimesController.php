<?php

namespace App\Http\Controllers;

use App\Times;
use App\Addmacaddress;
use Illuminate\Http\Request;
use DB;
use Auth;
class TimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('.chief.timestamp');

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
      // $d = explode('Physical Address. . . . . . . . .',shell_exec ("ipconfig/all"));
      //  $d1 = explode(':',$d[1]);
      //  $d2 = explode(' ',$d1[1]);
  //  dd($d);

      $mac='UNKNOWN';
      foreach(explode("\n",str_replace(' ','',trim(`getmac`,"\n"))) as $i)
      if(strpos($i,'Tcpip')>-1){$mac=substr($i,0,17);break;}
     //dd($mac);
/*     $MAC = exec('getmac');

      //Storing 'getmac' value in $MAC
      $MAC = strtok($MAC, ' ');

      // Updating $MAC value using strtok function,
      // strtok is used to split the string into tokens
      // split character of strtok is defined as a space
      // because getmac returns transport name after
      // MAC address
      dd($MAC);*/
      $reg = DB::table('addmacaddresses')->orderBy('addmac')->where('addmac', '=' ,$mac)

   ->get();
//dd($reg);
      if (Count($reg) == 1) {
        $regt = DB::table('times')
            ->where('user_id', '=' ,Auth::user()->id)
            ->whereNull('time_out')
            ->orderBy('id','DESC')
            ->get();           //------เช็คว่า 'user_id', '=' ,Auth::user()->id ตาราง time_out ล่าสุดมามีข้อมูลใหม
     //dd($regt);
            if(Count($regt) == 1){
            //dd($regt);
                    $regy = Times::first()
                    ->orderBy('id', 'DESC')
                    ->first();
                    $regy->time_out = 'out';

                    $regy->save();

                  return redirect('timestampch')->with('successv','บันทึกเวลาออกเรียบร้อย');

                   }else{

                    $regu = new Times;
                    $regu->user_id = Auth::user()->id;
                    $regu->time_in = 'in';

                    $regu->save();

                  return redirect('timestampch')->with('success','บันทึกเวลาเข้าเรียบร้อย');
            }

      } else {
          return redirect('timestampch')->with('successh','คุณยังไม่ได้ต่อ  WIFI');
      }



                        //  }
                      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Times  $times
     * @return \Illuminate\Http\Response
     */
    public function show(Times $times)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Times  $times
     * @return \Illuminate\Http\Response
     */
    public function edit(Times $times)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Times  $times
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Times $times)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Times  $times
     * @return \Illuminate\Http\Response
     */
    public function destroy(Times $times)
    {
        //
    }
}
