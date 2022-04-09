<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    public function project($seo_name)
    {
        return view('pages.project', [
            'project' => Project::where('seo_name', '=', $seo_name)->firstOrFail()
        ]);
    }
}
