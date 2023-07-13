<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public  function  index(){
//      $user=User::with('contact')->first();
     // return $user->contact->phone;
//        $contact=Contact::with('user')->first();
//          return $contact->user->name;

//        $user =User::with(['contact','post'])->find(1);
//        return $user->post;

//        $user=User::with('role')->find(1);
//        return $user->role;

//        $user = User::find(1);
//        $role = Role::where('name', 'admin')->first();
//
//        $user->roles()->attach($role);

        return view('index');
    }


}
