<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
     // pagina di atterraggio dopo il login
    public function index()
    {
        $adminId = Auth::id();
        $admin = Auth::user();
        $data = [
            'adminId' => $adminId,
            'admin' => $admin
        ];
        return view('admin.home', $data);
    }
}
