<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){

        $data = teacher::latest()->get();
        return view("schoolTable",compact("data"));
    }
}
