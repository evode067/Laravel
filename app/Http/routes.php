<?php
use App\Address;
use App\History;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// //Route::get('/delete', function()
// //{
// 	//$deleted = DB::delete('delete from history where id = ?',[1]);
// 	//foreach ($result as history ) {

// 	//	return $delete ;

// 	//}

// //});
// //$history = History::all();
// //foreach ($history as $hist) {
// //	return $hist->id;
// 	# code...
// //}


// //});
// Route::get('/findwhere', function(){

// $history = History::where('id',2)->orderBy('id', 'desc')->take(1)->get();
// return $history;



// });


// Route::get('/insert',function()
// {
// 	DB::insert('insert into history (historydate,user_id) 
// 		values(?,?)',['1/1/2019','1111']);
// 	echo "Data inserted successfully";
// });

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello',function(){
// 	Echo "<h1>"."How are you"."</h1>";

// });
// route::get('/hi',function()
// {
// 	echo"hi my ffriends";
// });


 Route::get("insert","testing@index");
 Route::post("store","testing@store");
 Route::get("showall", 'testing@showall');
 Route::get("customer/{name}","testing@show");
 Route::get("edit/{name}","testing@edit");
 Route::patch('edit/update/{id}', "testing@update");
 Route::get("delete/{id}", "testing@destroy");














































































/*

 Route::get('/createaddressdata',function(){

        DB::insert('insert into address (cel,country,district,province,sector) values (?,?,?,?,?)',['Nyarutarama','Rwanda','Gicumbi','Northern','Byumba']);
        DB::insert('insert into address (cel,country,district,province,sector) values (?,?,?,?,?)',['Nyarutarama','Rwanda','Gicumbi','Northern','Byumba']);
        DB::insert('insert into address (cel,country,district,province,sector) values (?,?,?,?,?)',['Nyarutarama','Rwanda','Gicumbi','Northern','Byumba']);
        DB::insert('insert into address ( cel,country,district,province,sector) values (?,?,?,?,?)',['Nyarutarama','Rwanda','Gicumbi','Northern','Byumba']);
        
        echo "Data inserted successfully into address";
});

Route::get('getRead',array('as'=>'getRead','uses'=>'CrudController@getRead'));
Route::post('search',array('as'=>'search','uses'=>'CrudController@search'));
Route::get('/getInsert',array('as'=>'getInsert','uses'=>'CrudController@getInsert'));
Route::post('/postInsert',array('as'=>'postInsert','uses'=>'CrudController@postInsert'));
Route::get('/address/viewall','addressController@ViewAll'); 
Route::get('/address/create','addressController@create'); 
Route::get('/medicine/create','medicineController@create'); 
Route::get('/address/create','addressController@create'); 
Route::get('/credential/viewall','credentialController@ViewAll');
Route::get('/hibernate_sequence/viewall','hibernate_sequenceController@ViewAll');
Route::get('/history/viewall','historyController@ViewAll');
Route::get('/history_symptom/viewall','history_symptomController@ViewAll');
Route::get('/medicine/viewall','medicineController@ViewAll');
Route::get('/symptom/viewall','symptomController@ViewAll');
Route::get('/symptom_medicines/viewall','symptom_medicinesController@ViewAll');
Route::get('/user/viewall','userController@ViewAll');
Route::get('/user_address/viewall','user_addressController@ViewAll');
Route::get('/evode/ViewAll','addressController@ViewAll');






 Route::get('/', array('uses'=>'CrudController@getInsert', 'as' => 'getInsert'));

 Route::group(array('before'=>'csrf'),function()
 {
     Route::post('/postInsert', array('uses'=>'CrudController@postInsert', 'as' => 'postInsert'));
 });


*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
