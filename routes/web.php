<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*<tbody>
   @foreach($hrbumble as $ticket)
   <tr>
       <td>{{$hrbumble->idname}}</td>
       <td>{{$hrbumble->companyname}}</td>
       <td>{{$hrbumble->firstname}}</td>
       {{ Auth::user()->name }}
   </tr>
   @endforeach
</tbody>*/

Route::get('/', function () {
    return view('auth.index');
});
Auth::routes();
//-------------Route:: hr::---------Login//
Route::get('hr', 'HomeController@index')->middleware('admin');
//----------Route:: hr::Folder---------//
Route::get('table', 'NewcompaniesController@table')->middleware('admin');
Route::get('status', 'NewcompaniesController@status')->middleware('admin');
Route::get('leave', 'NewcompaniesController@leave')->middleware('admin');
Route::get('record', 'NewcompaniesController@record')->middleware('admin');
Route::get('usersprofile', 'NewcompaniesController@usersprofile')->middleware('admin');
Route::get('mac', 'AddmacaddressController@mac')->middleware('admin');
Route::resource('newmac', 'AddmacaddressController')->middleware('admin');
Route::resource('newcompany', 'NewcompaniesController')->middleware('admin');
Route::resource('Macaddress', 'NewmacaddressController')->middleware('admin');
//--------------------------------------------------------//

//-------Route:: chief::-----Logig //
Route::get('chief', 'HomeController@chief')->middleware('auth');
//------Route:: chief::Folder------ //
///Route::get('chcode', 'MemberuserController@index')->middleware('auth');
Route::get('tablech', 'MemberuserController@table')->middleware('auth');
Route::get('leavech', 'MemberuserController@leave')->middleware('auth');
Route::get('recordch', 'MemberuserController@record')->middleware('auth');
//Route::get('timestampch', 'MemberuserController@timestamp')->middleware('auth');
Route::get('usersprofilech', 'MemberuserController@usersprofile')->middleware('auth');
Route::get('canvassch', 'MemberuserController@canvass')->middleware('auth');
Route::resource('timestampch', 'TimesController')->middleware('auth');
Route::resource('down', 'TimesController')->middleware('auth');
//--------------------------------------------------------//

//---Route:: chief::Folder---//
Route::get('personnel', 'HomeController@personnel')->middleware('auth');
//--------------------------------------------------------//
//--------------member-chief-personnel------------------//
Route::resource('member', 'MemberuserController')->middleware('auth');

/*Route::get('chif', function() {

	 print_r(Auth::user()->email);
});*/
