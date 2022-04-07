<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function get(Request $request) {
        $users = User::get();

        return response()->json(['data' => $users]);
    }

    public function store(Request $request) {
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $type = $request->get('type');
        $status = $request->get('status');

        if (!$firstname || !$lastname) {
            return response()->json(['error' => 'Please fill in the missing fields!']);
        }

        $userExist = User::where('firstname', $firstname)->where('lastname', $lastname)->first();
        if ($userExist) {
            return response()->json(['error' => 'User already exist!']);
        }

        $newUser = User::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'type' => $type,
            'status' => $status
        ]);

        return response()->json(['data' => $newUser]);
    }
}
