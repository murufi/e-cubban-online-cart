<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //
    public function index()
    {
    $viewData = [];
    $viewData['title'] = "Admin Page - E-Cubban Dashboard";
    $viewData['subtitle'] = "E-Cubban Admin - Dashboard";
    
    return view('admin.home.index')->with('viewData', $viewData);
    }
}