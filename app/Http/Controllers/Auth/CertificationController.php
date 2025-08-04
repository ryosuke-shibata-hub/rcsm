<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function loginView()
    {
        return view('main.auth.login_view');
    }
}
