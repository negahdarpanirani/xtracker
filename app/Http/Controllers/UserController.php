<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\user;

use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;


class UserController extends Controller
{


    public function profiles()
    {
        $user=user::orderby('id','DESC')->get();
        return view('profiles',compact('user'));
    }


    public function editprofile(user $user)
    {

    return view('editprofile',compact('user'));

    }

    public function destroy(user $user)
    {
        $user->delete();
        return redirect(route('profiles'));

    }
    //main page profile in first page
    public function fprofile(user $user)
    {
        
        return view('fprofile',compact('user'));
    }
     //main page feditprofile in first page
        public function fupdate( Request $request, user $user)
    {
            
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->ssn=$request->ssn;
        $user->username=$request->username;
        $user->phone=$request->phone;
        $user->tnphone=$request->tnphone;
        $user->buytype=$request->buytype;
        $user->role=$request->role;
        $user-> save();
     return redirect(route('fprofile')) ;
    }


    public function edit( user $user)
    {
        return view('editprofiles',compact('user'));
    }
    public function update(Request $request, user $user)
    {
    
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=$request->password;
            $user->ssn=$request->ssn;
            $user->username=$request->username;
            $user->phone=$request->phone;
            $user->tnphone=$request->tnphone;
            $user->buytype=$request->buytype;
            $user->role=$request->role;
            $user-> save();
         return redirect(route('profiles')) ;
    }
    //add newuser by main admin 
    public function adduser(user $user)
    {

    return view('adduser',compact('user'));

    }

    public function userstore(Request $request)
    {        
  
        return $request;
        
        $contact= new contactform([
            
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
            'ssn'=>$request->get('ssn'),
            'username'=>$request->get('username'),
            'phone'=>$request->get('phone'),
            'tnphone'=>$request->get('tnphone'),
            'buytype'=>$request->get('buytype'),
            'role'=>$request->get('role'),


        ]);
        $contact-> save();
          return Redirect::back()->with('message','Operation Successful !');
        }





    public function excel()
     {

         return Excel::download(new DataExport , 'users.xlsx');
    
    }
    
}
class DataExport implements FromCollection
{
 function collection() {

        return user::all();

    }
}



