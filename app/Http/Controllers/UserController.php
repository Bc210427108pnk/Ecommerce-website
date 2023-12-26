<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();    
        return view('index',compact('users'));
     
         }

         public function delete($id){
            User::find($id)->delete();
            return redirect()->route('index')->with('success', 'User Deleted Successfully!');
           }
      
    }

   

