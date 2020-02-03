<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\customer; #import customer
use Illuminate\Support\Facades\Input;
use DB;

class testing extends Controller
{
    //
    public function index()
    {
    	return view("insert");
    }    
    public function store(Request $request)
    {
    
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|unique:customers',
            'favorite'=>'required'
            ]);
    	$user = new customer;
    	$user->name=Input::get("name");
    	$user->email=Input::get("email");
    	$user->country=Input::get("country");
    	$user->gender=Input::get("gender");
    	$user->favorite=implode(", ", Input::get("favorite")); #for checkbox;
    	if(Input::hasFile("image"))
    		{
    			$files = Input::file('image');
    			$name = time()."".$files->getClientOriginalName();
    			$image = $files->move(public_path().'/image',$name);
    			$user->image=$name;

    		}
    		$user->save();
    		return redirect('showall');

    }





    public function showall()
    {
        $user = customer::all();
        return view("viewall", compact('user'));
    }
    public function show($name)
    {
        $user = DB::table("customers")->where('name', $name)->first();
       // $user = customer::find($id);
        return view("customername", compact('user'));
    }
public function edit($name)
{
    $user = DB::table("customers")->where('name', $name)->first();
       // $user = customer::find($id);
        return view('update', compact('user'));
}

public function update(Request $request, $id)
{
        $user = customer::find($id);
        $user->name=Input::get("name");
        $user->email=Input::get("email");
        $user->country=Input::get("country");
        $user->gender=Input::get("gender");
        $user->favorite=implode(", ", Input::get("favorite")); #for checkbox;
        if(Input::hasFile("image"))
            {
                $files = Input::file('image');
                $name = time()."".$files->getClientOriginalName();
                $image = $files->move(public_path().'/image',$name);
                $user->image=$name;

            }
            $user->save();
            return redirect('showall');   
}
public function destroy($id)
{
    $user = customer::find($id);
    $user->delete();
    return redirect("showall");

}
}
