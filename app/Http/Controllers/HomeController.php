<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $list_tenant = Tenant::all();
        return view('home', [
            "list_tenant" => $list_tenant
        ]);
    }
}
