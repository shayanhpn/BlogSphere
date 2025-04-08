<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShowAllUsersController extends Controller
{
    public function showAllUsers(){
        $users = DB::table("users")->paginate(10);
        return view('user.show-all-users',compact('users'));
    }
}
