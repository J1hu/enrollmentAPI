<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(Request $request) {
        return view('index');
    }

    public function course(Request $request) {
        return view('course');
    }

    public function users(Request $request) {
        return view('users');
    }

    public function schoolYears(Request $request) {
        return view('schoolYears');
    }

    public function enrolledUsers(Request $request) {
        return view('enrolledUsers');
    }
    
}
