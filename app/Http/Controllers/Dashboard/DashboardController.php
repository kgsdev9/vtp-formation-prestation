<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Formateur;
use Illuminate\Http\Request;
use App\Services\CourseService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $courseService ;


    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService ;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profiledashboard.base.base', [
            
        ]);
    }

}
