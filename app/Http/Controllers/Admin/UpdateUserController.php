<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function showUserEditForm(User $user){
        return view('user.update-user', compact('user'));
    }


    public function UpdateUser(Request $request, User $user){
            $fields = $request->all();
            $user->update($fields);
            return "Done!";
    }
}
