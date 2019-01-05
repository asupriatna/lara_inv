<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'DESC')->paginate(10);
        return view('dashboard.index', compact('customers'));
    }
}
