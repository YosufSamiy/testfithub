<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {

        $Users=user::all();

        return view('auth.allUsers',compact('Users'));
    }

    
    public function editUser( $id)
    {

        $userr=user::find($id);

        return view('auth.edit',compact('userr'));
    }

    public function createUser(){


        return view('auth.createUser');

    }
    



    public function controllEdit( $id)
    {

        $userrs=user::find($id);

        return view('auth.controlEdit',compact('userrs'));
    }

public function controllUpdate(Request $request,$id){


    $edit=user::find($id);


    $edit->name=$request->name;
    $edit->email=$request->email;
    $edit->status=$request->status;
    $edit->update();

    session()->flash('UpataedUsers','UpataedUsers Users Succsessfuly');

    return redirect()->back();



}








    public function updateUser(Request $request,$id)
    {


        

        $use=user::find($id);
        $use->name=$request->name;
        $use->email=$request->email;
        $pass=bcrypt($request->password);
        $use->password=$pass;

        $use->update();
        session()->flash('massegeUpdatee','Information Update Succsessfuly');

        return redirect()->back();

        // return view('dashboard.parent');


       
    }

    public function storeUser(Request $request){
        $adduser=new user();
    
        $adduser->name=$request->name;
        $adduser->email=$request->email;
        $adduser->status=$request->status;
       $password=bcrypt($request->name);
       $adduser->password=$password;
       $isSaved=$adduser->save();
    
       session()->flash('stroeUser','User ADD  Succsessfuly');

        return redirect()->back();
    
    }


















    
    public function showLogin(){

        return response()->view('auth.login');



}
   

    
    public function login(Request $request){

       $validator=Validator($request->all(),[
           'email'=>'required|email|exists:admins,email',
           'password'=>'required|string|max:50|min:2|password,admin'
       ]);



        

    }

    
    public function logout(){



    }


    public function destroy($id){

        $dest=user::find($id);
        $dest->delete();
        return redirect()->back();

    }

}
