<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Tasks;
use App\Models\Projects;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function projectDashboard()
    {
        $data=[];
        $data['totalTask'] = Tasks::count();
        $data['completedTask'] = Tasks::where('status',4)->count();
        $data['pendingTask'] = Tasks::where('status',3)->count();

        $data['projects'] = Projects::all();
        $data['totalProjects'] = Projects::count();
        $data['commingProjects'] = Projects::where('status',3)->count();
        $data['ongoingProjects'] = Projects::where('status',1)->count();
        $data['completedProjects'] = Projects::where('status',4)->count();



        return view('project-dashboard',compact('data'));
    }
    
}
