<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{

    public function showDeleteUserForm(User $user){
        return view('user.delete-user',compact('user'));
    }
    public function deleteUser(User $user){
        $user->delete();
        return redirect('/users')->with('danger','User has been deleted');
    }
}
