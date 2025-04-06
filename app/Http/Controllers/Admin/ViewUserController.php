<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ViewUserController extends Controller
{
    public function viewSingleUser(User $user){
        return view('user.show-single-user',compact('user'));
    }
}
