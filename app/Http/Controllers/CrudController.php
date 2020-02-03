<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Controllers;
use App\Admin;
use DB;
use resources\views; 

class CrudController extends Controller
{
    //
    public function getInsert(Request $request)
    {
    	return view('insert');
   
}
public function postInsert(Request $request)
{
	$data=['cel'=>$request->cel,'country'=>$request->country,'district'=>$request->district,'province'=>$request->province,'sector'=>$request->sector];
	DB::table('address')->insert($data);
	return back();
}     
public function getRead()
{
	$s=0;
return view('read',compact('s'));
}
public function search(request $request)
{
	if ($request->search!="")
	{
		$results=DB::table("address")->where('cel','LIKE','%'.$request->search.'%')
			->orWhere('sector','LIKE','%'.$request->search.'%')
			->orWhere('id','=',$request->search)
			->get();
			$s=1;
			return view('read', compact('results','s'));
	}
	return back();
}
}