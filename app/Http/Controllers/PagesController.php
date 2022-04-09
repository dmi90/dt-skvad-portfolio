<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'projects' => Project::orderBy('sequence')->get()
        ]);
    }
}
