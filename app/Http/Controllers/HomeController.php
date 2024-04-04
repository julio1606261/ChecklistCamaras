<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChecklistModel;

class HomeController extends Controller
{
    public function home()
    {
        $checklist = ChecklistModel::all();
        return view('home', compact('checklist'));
    }
}
